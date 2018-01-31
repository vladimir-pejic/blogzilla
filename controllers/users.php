<?php
class users extends Controller{
    protected function Index() {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->Index(), true);
    }

    protected function register() {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->register(), true);
    }

    protected function login() {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->login(), true);
    }

    protected function logout() {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user']);
        session_destroy();
        header('LOCATION: '.ROOT_URL);
    }
}