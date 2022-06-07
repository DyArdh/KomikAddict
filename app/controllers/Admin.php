<?php 

class Admin extends Controller {
    public function index()
    {
        $data['title'] = 'Admin Page';

        $this->view('templates/header-admin', $data);
        $this->view('templates/sidebar-admin', $data);
        $this->view('admin-dashboard/index', $data);
        $this->view('templates/footer-admin');
    }
}