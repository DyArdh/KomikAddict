<?php 

class Home extends Controller {

    public function index()
    {
        $data['title'] = 'NoName';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}