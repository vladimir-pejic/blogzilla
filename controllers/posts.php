<?php
class posts extends Controller{
    protected function Index() {
        $viewmodel = new PostModel();
        $this->ReturnView($viewmodel->Index(), true);
    }

    protected function create() {
        $viewmodel = new PostModel();
        $this->ReturnView($viewmodel->Create(), true);
    }
}