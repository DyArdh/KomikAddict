<?php 

class Admin extends Controller {

    // public function __construct()
    // {
    //     if($_SESSION['session_login'] != 'already_login') {
    //         Flasher::setNotification('Login', 'Tidak Ditemukan!', 'danger');
    //         header('location: '. base_url . '/login');
	// 		exit;
    //     }
    // }
    
    public function index()
    {
        $data['title'] = 'Daftar Komik';
        $data['komik'] = $this->model('KomikModel')->getAllKomik();
        $data['penulis'] = $this->model('KomikModel')->getAllPenulis();
        $data['bahasa'] = $this->model('KomikModel')->getAllBahasa();
        $data['countPosted'] = $this->model('KomikModel')->countPosted();
        $data['countPending'] = $this->model('KomikModel')->countPending();

        $this->view('templates/header-admin', $data);
        $this->view('templates/sidebar-admin', $data);
        $this->view('admin-dashboard/index', $data);
        $this->view('admin-dashboard/modal', $data);
        $this->view('admin-dashboard/editform', $data);
        $this->view('templates/footer-admin');
    }

    public function tableContent() 
    {
        $data['komik'] = $this->model('KomikModel')->getAllKomik();
        $this->view('admin-dashboard/tableContent', $data);
    }

    public function addComic()
    {
        if( $this->model('KomikModel')->tambahKomik($_POST) > 0 ) {
            Flasher::setNotification('Berhasil', 'ditambahkan', 'success');
            header('location: ' .base_url. '/admin');
            exit;
        }  else {
            Flasher::setNotification('Gagal','ditambahkan','danger');
            header('location: ' .base_url. '/admin');
			exit;	
        }
    }

    public function getEdit()
    {
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
            echo json_encode($this->model('KomikModel')->getKomikbyId($id), JSON_INVALID_UTF8_SUBSTITUTE);
        }
    }
}