<?php
//The controller is used to control the data flow of Login Form page

require_once("../models/EmployeeModel.php");
require_once("LoginControllerClass.php");

$userid = trim($_POST["userid"]);
$password=trim($_POST["password"]);
$LoginController = new  LoginController();
$LoginController->login($userid, $password);

$mysqli-close();
?>