<?php 

class KomikModel {
    private $table = 'komik';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKomik()
    {
        $this->db->query("SELECT komik.*, penulis.penulis, bahasa.bahasa FROM " . $this->table . " JOIN penulis ON penulis.id = komik.penulis_id JOIN bahasa ON bahasa.id = komik.bahasa_id");
        return $this->db->resultSet();
    }

    public function getKomikbyId($id) {
        $this->db->query("SELECT komik.*, penulis.penulis, bahasa.bahasa FROM " . $this->table . " JOIN penulis ON penulis.id = komik.penulis_id JOIN bahasa ON bahasa.id = komik.bahasa_id WHERE komik.id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllPenulis()
    {
        $this->db->query("SELECT * FROM penulis");
        return $this->db->resultSet();
    }

    public function getAllBahasa()
    {
        $this->db->query("SELECT * FROM bahasa");
        return $this->db->resultSet();
    }

    public function countPosted()
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE kondisi = 'Posted'");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function countPending()
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE kondisi = 'Pending'");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahKomik($data)
    {
        foreach ($data as $key => $value) {
            $value = is_array($value) ? trim(implode(',', $value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        };

        $query = "INSERT INTO komik (id, judul, penulis_id, tahun, genre, bahasa_id, sinopsis, kondisi) VALUES(NULL,:judul, :penulis_id, :tahun, :genre, :bahasa_id, :sinopsis, :kondisi)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis_id', $data['penulis_id'], PDO::PARAM_INT);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('genre', $data['genre']);
        $this->db->bind('bahasa_id', $data['bahasa_id'], PDO::PARAM_INT);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->bind('kondisi', $data['kondisi']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}