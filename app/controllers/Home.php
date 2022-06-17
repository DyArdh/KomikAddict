<?php 

class Home extends Controller {

    public function index()
    {
        $data['title'] = 'Komik Addict';
        $data['komik'] = $this->model('KomikModel')->getAllKomik();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function getDaftarKomik()
    {
        $data['komik'] = $this->model('KomikModel')->getAllKomik();
        $this->view('home/cardContent', $data);
    }

    public function detailPage()
    {
        $data['title'] = 'Detail Page';
        $data['detail'] = $this->model('KomikModel')->getKomikbyId();

        $this->view('detailpage/index', $data);
    }
}