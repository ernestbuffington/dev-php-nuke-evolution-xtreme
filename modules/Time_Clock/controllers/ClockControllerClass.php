<?php
require_once("ControllerClass.php");
class ClockController extends Controller {
	/* To clockin or clockout time */
	public function clockTime($userid){
		$this->employee = new Employee();
		if ($status = $this->employee->clockTime($userid))
			return $status;
		else 
			return false;
	
	}
	/* To get the timesheet for the whole team
 	  NOT USED FOR NOW
	   BUT  it could be used in the future 
	*/
	public function getTeamTimeSheet($userid){
		$this->employee = new Employee();
		if($result=$this->employee->getTeamTimeSheet($userid)){
			return $result;
		}else
			return false;
		
	}
	
	/* To get an employee's timesheet, date range - ALL
	*/
	public function getSelfTimeSheet($userid, $day=0){
		$this->employee = new Employee();
		if($result=$this->employee->getSelfTimeSheet($userid, $day)){
			return $result;	
		}else 
			return false;
		
	}
	/* To get the list of employees whe has ever clocked in*/
	public function getUserIDList($userid){
		$this->employee = new Employee();
		if($result=$this->employee->getUserIDList($userid)){
			return $result;	
		}else 
			return false;
		
	}
	/* To get the total amount of time in HOURs for an employee*/
	public function getTotalAmount($userid,$day){
		$this->employee = new Employee();
		$total = $this->employee->getTotalAmount($userid,$day);
		return $total;
	}
	/* To get clock in/out status
		1- clockein , need clockout next time
		2- clockeout, need clockin next time
	*/
	public function getStatus($userid){
		$this->employee = new Employee();
		$status = $this->employee->getStatus($userid);
		return $status;
	}
	/* To get employee role
	 0 - employee
	 1-  administrator
	*/
	public function getRole($userid){
		$this->employee = new Employee();
		$role = $this->employee->getRole($userid);
		return $role;
	}	
}


?>