<?php

class Login extends Controller {
    public function index()
    {
        $data['title'] = 'Login';

        $this->view('login/index', $data);
    }

    public function authLogin() {
        if($row = $this->model('LoginModel')->checkLogin($_POST) > 0) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['session_login'] = 'already_login';

            header('location: '. base_url . '/admin');

        } else {
            Flasher::setNotification('Username / Password', 'salah', 'danger');
            header('location: '. base_url . '/login');
            exit;
        }
    }
}