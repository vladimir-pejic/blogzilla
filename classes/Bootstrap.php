<?php
class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        if($this->request['controller'] == '') {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if($this->request['action'] == '') {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

        //echo $this->controller .'/'. $this->action;
    }

    public function createController()
    {
        // check if class exists
        if(class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            // check extend
            if(in_array("Controller", $parents)) {
                // check for method
                if(method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    // Method doesn't exist
                    echo '<h1>404 - Method does not exist</h1>';
                    return;
                }
            } else {
                // Base Controller doesn't exist
                echo '<h1>404 - Base controller does not exist</h1>';
                return;
            }
        } else {
            // Controller Class doesn't exist
            echo '<h1>404 - Controller Class does not exist</h1>';
            return;
        }
    }
}