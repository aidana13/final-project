<?php
session_start();
 require_once 'vendor/autoload.php';
 use App\Controllers\MainController;
 $mainController = new MainController();
 $view=$mainController->process();
if($view!=null){
require_once "App/Views/".$view.".php";
}

 //use App\DBManager;
 //new DBManager('localhost','bitlab','root','');
?>