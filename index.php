<?php

require ('config.php');
require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/posts.php');

require('models/home.php');
require('models/user.php');
require('models/post.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller) {
    $controller->executeAction();
}