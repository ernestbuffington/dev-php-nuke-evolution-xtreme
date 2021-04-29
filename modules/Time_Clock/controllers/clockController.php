<?php
// This controller is used to manage data flow of clockTime page 
require_once("../models/EmployeeModel.php");
require_once("ClockControllerClass.php");

$userid = trim($_GET["token"]);
$clockController = new ClockController();
$status = $clockController->clockTime($userid);
if ($status !== false) {
	header("location: ../views/clockform.php?s=$status");
}


?>