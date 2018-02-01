<?php
class posts extends Controller{
    protected function Index() {
        $viewmodel = new PostModel();
        $this->ReturnView($viewmodel->Index(), true);
    }

    protected function create() {
        if(!isset($_SESSION['logged_in'])) {
            header('LOCATION: '.ROOT_URL.'users/login');
        }
        $viewmodel = new PostModel();
        $this->ReturnView($viewmodel->Create(), true);
    }
}