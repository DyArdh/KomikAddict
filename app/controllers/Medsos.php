<?php 

class Medsos extends Controller {

    public function index()
    {
        $data['title'] = 'Media Sosial';

        $this->view('templates/header-admin', $data);
        $this->view('templates/sidebar-admin', $data);
        $this->view('medsos/index', $data);
        $this->view('templates/footer-admin');
    }
}