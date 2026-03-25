<?php
    include_once("controller/controller.php");
    $controller = new Controller();
    $page = $_GET['page'] ?? 'home';
    $controller->manage($page); 
?>