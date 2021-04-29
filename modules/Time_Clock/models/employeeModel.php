<?php
include("../global.inc.php");

Interface IEmployee{
	public function login($userid, $password);
	
	
}

class Employee implements IEmployee {
	public $Errors;
	public $Role;
	public $Status;
	private $Authenticated;
	
	public function __construct()
	{
		//There should be a layer of security to check if the user is authenticated. Hardcode  for  now.
		$this->Authenticated = true;
	}
	/*  User login */
	public function login($userid, $password){
		global $mysqli;	
		$password = $this->encrypt($password);
		
		
		if ($result = $mysqli->query("SELECT Login($userid, '".$mysqli->real_escape_string($password)."') AS LoginResult")){
			$obj = $result->fetch_object();
			if ($obj->LoginResult == "1")
			{
				$this->Authenticated = true;  //for security purpose	
				return true;
			}
			else
				return false;	
		}else{
			$this->Errors = "The userid or password is incorrect, Please try again";
			return false;
		}
		
	}
	
	/*developer or Administor
	* 0 - Employee  
	* 1 - Adminstrator
	*/
	public function getRole($userid){
		global $mysqli;	
		if ($this->Authenticated){
			if ($result = $mysqli->query("select GetRole($userid) AS role")){
				$obj=$result->fetch_object();
				$this->Role = $obj->role;		
				return $obj->role;	
			}
		}else
			$this->Error ="User is NOT authorized to execute this function/getRole. Please contact Administator<br>";	
			
	}
	
	/*  Get current user Timein or out status 
	*/
	public function getStatus($userid){
		global $mysqli;	
		if ($this->Authenticated){
			if ($result = $mysqli->query("select GetStatus($userid) AS status")){
				$obj=$result->fetch_object();
				$this->Status = $obj->status;		
				return $obj->status;	
						}
		}else
			$this->Error ="User is NOT authorized to execute this function/getStatus. Please contact Administator<br>";
	
	}
	
	/* clock time in/out and return status, which specifs employee's most recent action, in or out*
	*	status  1: clocked in, need clock out; 2:  clocked out, need clock in;
	*/
	public function clockTime($userid){
		global $mysqli;	
		if ($this->Authenticated){
			if ($result = $mysqli->query("SELECT ClockTime($userid) AS status")){
				if ($result->num_rows){
					$obj = $result->fetch_object();
					$this->Status = $obj->status;
					return $obj->status;
				}
			}			
			else{
				$this->Errors = "Clock time failure. Please contact Administrator";	
				return false;
			}
		}else
				$this->Error ="User is NOT authorized to execute this function/clockTime. Please contact Administator<br>";
	}
	
	/* Get time amount worked 
	*  $day =0   all days
	*   $day =n  over the last N days	
	*/
	public function getSelfTimeSheet($userid, $day=0){
		global $mysqli;
		if ($this->Authenticated){
			if ($day !=0) 
				$daterange = " AND clocktimein> NOW() - INTERVAL $day DAY";  //WITHIN $day data
			else
				$daterange = "";	
			if ($result = $mysqli->query("SELECT status, date_format(clocktimein, '%b %D %h:%i %p'), date_format(clocktimeout, '%b %D %h:%i %p') FROM employeetime where userid=$userid ".$daterange." order by id desc")){
				if ($result->num_rows){
					return $result;
				}else return false;
			}else return false;	
		}else
			$this->Error ="User is NOT authorized to execute this function/getSelfTimeSheet. Please contact Administator<br>";	
		
		
	}

	/*Only Adminstrator has previlige to get team time sheet*/
	public function getTeamTimeSheet($userid){
		global $mysqli;
		$this->getRole($userid);	
		if (($this->Authenticated) && ($this->Role =="1")){
			if ($result = $mysqli->query("SELECT userid, status, date_format(clocktimein, '%b %D %h:%i %p'), date_format(clocktimeout, '%b %D %h:%i %p') FROM employeetime where HOUR(TIMEDIFF(clocktimein, NOW()))< 158 order by userid, clocktimein ")){
				if ($result->num_rows){
					return $result;
				}else return false;
			}else return false;
		}else{
			$this->Error ="User is NOT authorized to execute this function/getTeamTimeSheet. Please contact Administator<br>";
		}
	}
	
	/* Get the list of userids
	* $userid is Administrator
	*/
	public function getUserIDList($userid){
		global $mysqli;
			$this->getRole($userid);	
			if (($this->Authenticated) && ($this->Role =="1")){
				if ($result = $mysqli->query("SELECT distinct userid FROM employeetime ORDER BY userid")){
					if ($result->num_rows){
						return $result;
					}else return false;
				}else return false;
			}else{
				$this->Error ="User is NOT authorized to execute this function/getUserIDList. Please contact Administator<br>";
			}
	}
	
	/* Get total amount worked */
public function getTotalAmount($userid, $day){
		global $mysqli;
		if ($this->Authenticated){
			if ($result = $mysqli->query("select GetTotalAmount($userid,$day) AS total")){
				$obj=$result->fetch_object();		
				return $obj->total;	
						}
		}else
			$this->Error ="User is NOT authorized to execute this function/getStatus. Please contact Administator<br>";		
	
	}
	/* return error */
	public function getErrors(){
		return $this->Errors;
	}
	
	/* encrypt password */
	public function encrypt($password){
		return $password;
	}

}


?>