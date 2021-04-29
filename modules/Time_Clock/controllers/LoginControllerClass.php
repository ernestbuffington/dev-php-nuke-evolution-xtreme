<?php
require_once("ControllerClass.php");
class LoginController extends Controller{

	/***
	* Executed when user visits Login Form
	*/
	public function login($userid,$password){
		$this->employee = new Employee();
		
		//Check user credential agianst database
		if ($this->employee->login($userid, $password)){
			reset($_COOKIE);
			setcookie("userid", $userid, time()+600, "/"); //Login will expire in 10 minutes
			header("location: ../views/clockform.php");
		} else{
			header("location: ../views/login.php?err=1"); 
		}

	}
}

?>