<?php 

class Detailpage extends Controller {

    public function index()
    {
        $data['title'] = 'NoName';

        $this->view('templates/header', $data);
        $this->view('detailpage/index', $data);
        $this->view('templates/footer');
    }
}