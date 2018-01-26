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
}