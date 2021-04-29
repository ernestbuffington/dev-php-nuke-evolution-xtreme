<?php
require_once("../models/EmployeeModel.php");
require_once("../controllers/ClockControllerClass.php");
if ($_COOKIE["userid"] != ""){
	$userid = $_COOKIE["userid"];
}else
	header("location:login.php");

if(isset($_GET["s"])){
	$status = trim($_GET['s']);
	if ($status =="1") //clockin success
		$confirmInfo = "You have clocked in";
	if ($status =="2")
		$confirmInfo = "You have clocked out";
}else
	$confirmInfo="";

	
	$clockcontroller = new ClockController();
	if ($result = $clockcontroller->getSelfTimeSheet($userid))
		$selfTimesheetrows = $result->fetch_all();
	else
		$selfTimesheetrows="";	
	$status = $clockcontroller->getStatus($userid);
	if ($status == "1")
		$buttonvalue ="Clock Time Out";
	else
		$buttonvalue="Clock Time In";

	//Total amount worked		
	$total = $clockcontroller->getTotalAmount($userid,0);
	$role = $clockcontroller->getRole($userid);
	
?>
<html xmlns="" lang="en-US">
  <head>
      <meta http-equiv="Content-type" content="text/html; UTF-8" />
      <title>Clock In/out (Demo)</title>
      <meta name="description" content="Clock in/out form"/>
      <meta name="copyright" content="Copyright 2014 Edward Gao" />
      <link rel="stylesheet" type="text/css" href="../styles/main.css" />
      <script src="../scripts/clockForm.js" type="text/javascript" language="JavaScript" ></script>
      
  </head>
  <body>
	<div id="wrapper2">  
  	<?php
	  	$selftimesheet ="";
		$teamtimesheet="";
		if ($selfTimesheetrows !== ""){
			$i=0;			
			foreach($selfTimesheetrows as $row){
				
				$index = sizeof($selfTimesheetrows)- $i;
				
				$i++;
				
				if($i%2==0) $divclass="shade";else $divclass="noshade";
				$timein= $row[1];
				if ($row[2] == "") $timeout= "<span class='warning'>Waiting to clock out...</span>";else $timeout=$row[2];	
		  		$selftimesheet.= "<div class='$divclass'>$index<span class=padding></span>".$timein."<span class=padding></span>".$timeout."</div>";
		  	}
			$selftimesheet.="<hr><div class='timeTotal'>Total Amount Worked&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total H</div>";  
		}
	  	switch ($role){
			case "0": //--------employee role
			  
			  	break;
			case "1":
			//-----------Administrator role: Need to load all team members' time sheet
				$result = $clockcontroller->getUserIDList($userid);
				$useridlistrows = $result->fetch_all();
				$usertimesheet="";
				$teamtotal =0;
				foreach($useridlistrows as $userrow){
					$memberid = $userrow[0];
					$usertimesheet .= "<a href='javascript:toggle_visibility($memberid)'>User ID: $memberid</a><br><div id='$memberid' style='display:none'><img src=../images/".$memberid.".jpg width=50>";
					$usertimesheet .= "<h3>Day<span class=padding></span>Time In<span class=padding></span>Time Out</h3><hr>";
					//display time sheet for this user
					$result = $clockcontroller->getSelfTimeSheet($memberid, 7); // last 7 days
					$usertimesheetrows = $result->fetch_all();
					
						$j=0;
									
						foreach($usertimesheetrows as $timesheetrow){
							
							$index = sizeof($usertimesheetrows)- $j;
						
							$j++;
							
							if($j%2==0) $divclass="shade";else $divclass="noshade";
							$timein= $timesheetrow[1];
							if ($timesheetrow[2] == "") $timeout= "<span class='warning'>Waiting to clock out</span>";else $timeout=$timesheetrow[2];
							//$usertimesheet.= "<h3>Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time Out</h3><hr>";	
					  		$usertimesheet.= "<div class='$divclass'>$index<span class=padding></span>".$timein."<span class=padding></span>".$timeout."</div>";
					  	}
						$usertotal = $clockcontroller->getTotalAmount($memberid, 7); // last 7 days
						$teamtotal = $teamtotal + $usertotal;
						$usertimesheet.="<div class='timeTotal'>ID: $memberid Total Amount Worked&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$usertotal H</div><hr>";  
						$usertimesheet .="</div>";
					
					//end of display time sheet for this user
				}
				$teamtimesheet = "<h2>Team Timesheet for Last 7 days</h2><H3>Total Hours Worked by the Team: $teamtotal H</H3><hr>".$usertimesheet;	
				break;
			default:
				break;
	  }
	  
	  ?>
	  <div class="top">
		  <div class="topleft">
		  	
		  	<img id="avatar" src=../images/<?=$userid?>.jpg><br>Welcome back!<br>ID: <?=$userid?><br>
			 <br><br><br>
			 <div class="warning"><?=$confirmInfo?></div>
			  <button type="button" onclick="window.location.href='../controllers/clockController.php?token=<?php echo $userid;?>'"><?php echo $buttonvalue;?> </button>
			  <br><a href=login.php?a=logout>Logout</a> 
		  </div>
		  <div class="topright">
		  	<h2>T i m e  S h e e t</h2>
		  			<h3>Day<span class=padding></span>Time  In<span class=padding></span>Time  Out</h3><hr>
		  	<?=$selftimesheet?>
		  </div>
	   </div>
	  <br style="clear: left;" />
	  <div class="bottom">
	   <br><hr>
	  	<?=$teamtimesheet?><br><br>
	  </div>	

  </body>
</html>