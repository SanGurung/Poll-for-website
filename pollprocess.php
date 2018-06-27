<?php
$Pollsuccess="True";
//ans === ee5efeee656213319f6bb072def11320  ++ Pollid ++ "spg"
//Get Variables
$ans_GET=$_GET['ans'];
$Pollsid_GET=$_GET['id'];

//Remove
$sel_GET=$_GET['sel'];
//Post Variables
$Pollsid_POST=$_POST['pid'];
$sel_POST=$_POST['sel'];
//in form we need to send this keys
$check="ee5efeee656213319f6bb072def11320".$Pollsid_POST."SPG";
//Now Checking both Variables // First Security Barier
if($ans_GET==$check && $Pollsid_GET==$Pollsid_POST && $_POST['pollserver']=="www.example.com") 
{ 
//$security_step_one="Clear";
	//$GS_ans=$ans_POST; 
	$GS_id=$Pollsid_POST;
	$GS_sel=$sel_POST;
	//now checking cookie//Second Security Barier
	if($HTTP_COOKIE_VARS[Author]=="www.example.com" && $HTTP_COOKIE_VARS[keycode]==$Pollsid_GET)
	  {	
	$Pollsid=$_GET['id'];
	$Gen="c7a42de3acefa9db9c9a9d9949b7bb74_".md5(base64_encode($Pollsid));
	$ErrorOccured="False";
	$Establishedconn="Fast";
	include("poll.php");
	  
		//Now we are goin to Increment it ++++
			$WirePlug=="Connected";
			$Permission=="Granted";
			include("poll_server_Grant_CoNNection07.php");
			include($OpenMySQL);
			if($Connected=="Approached" && $GS_sel<=4 && $GS_sel>=1)
		    { 
				//$AddQuery="Select * from ".$ipkr_dbtable." where ((Pollid=".$PID.") && (Permission ='Granted') && );";
				
				if($GS_sel==1)
				{
					$ADDHIT=$HIT1+1;
				}
				elseif($GS_sel==2)
				{
					$ADDHIT=$HIT2+1;
				}
				elseif($GS_sel==3)
				{
					$ADDHIT=$HIT3+1;
				}
				elseif($GS_sel==4)
				{
					$ADDHIT=$HIT4+1;
				}
				else
				{ $Pollsuccess="False";}

				$AddQuery="UPDATE pollstructure SET HitOption".$GS_sel."=".$ADDHIT." WHERE ((Pollid=".$GS_id.") && (Permission ='Granted'));";
				@mysql_query($AddQuery,$conn);
				@mysql_close($conn);
				
				//Now we need 2 give thanks 
				$Pollsuccess="True";
				//updated & closed
			}		
	  }
	  else
	  {
	  $Pollsuccess="False";
	  }
}
else
{
$Pollsuccess="False";

}
//Last line //The End
?>
