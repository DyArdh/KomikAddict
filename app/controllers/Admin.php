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

        $this->view('templates/header-admin', $data);
        $this->view('templates/sidebar-admin', $data);
        $this->view('admin-dashboard/index', $data);
        $this->view('admin-dashboard/modal', $data);
        $this->view('admin-dashboard/editform', $data);
        $this->view('templates/footer-admin');
    }
}