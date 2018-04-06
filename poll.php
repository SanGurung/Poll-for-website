<?php //<meta http-equiv="pragma" content="no-cache"> ?>
<?php
//Code Writen
$ErrorOccured="False";
if(isset($Pollsid) && isset($Gen) && is_numeric($Pollsid) && $Establishedconn=="Fast")
{ 	$PID=$Pollsid;
	$GenCode=$Gen;
	$CheckCode="c7a42de3acefa9db9c9a9d9949b7bb74_".md5(base64_encode($PID));
	if($GenCode==$CheckCode)
	{
		$WirePlug="DisConnected";
		$Permission="Denied";
		include("poll_server_Grant_CoNNection07.php");
		include($OpenMySQL);
		if($Connected=="Approached")
		{ 
			$Query="SELECT * from ".$ipkr_dbtable." where ((Pollid=".$PID.") && (Permission ='Granted'));";
			$DisplayCard = mysql_query($Query,$conn);
			$count = @mysql_num_rows($DisplayCard);
			if($count<=0)
			{
//			 $ErrorOccured="True";
			 $ErrorLine="P1";
			 @mysql_close($conn);
			 exit;
			}
			else
			{ 
			    $Query="SELECT * from ".$ipkr_dbtable." where ((Pollid=".$PID.") && (Permission ='Granted'));";
				$ResultCard = mysql_query($Query,$conn);
				$SHOWDATA = @mysql_fetch_array($ResultCard);
				$PollQuestion=$SHOWDATA['PollQuestion'];
				$OP1=$SHOWDATA['Option1'];
				$OP2=$SHOWDATA['Option2'];
				$OP3=$SHOWDATA['Option3'];
				$OP4=$SHOWDATA['Option4'];
				$HIT1=$SHOWDATA['HitOption1'];
				$HIT2=$SHOWDATA['HitOption2'];
				$HIT3=$SHOWDATA['HitOption3'];
				$HIT4=$SHOWDATA['HitOption4'];
				$PollDate=$SHOWDATA['Publisheddate'];
				$TotalPoll=$HIT1+$HIT2+$HIT3+$HIT4;
				@mysql_close($conn);
				$ErrorOccured="Null"; 
				if($TotalPoll>0)
				{
					if($HIT1>0) { $PER1=round((($HIT1/$TotalPoll)*100),2); }
					if($HIT2>0) { $PER2=round((($HIT2/$TotalPoll)*100),2); }
					if($HIT3>0) { $PER3=round((($HIT3/$TotalPoll)*100),2); }
					if($HIT4>0) { $PER4=round((($HIT4/$TotalPoll)*100),2); }
				}
			}
		}
		else
		{
	    $ErrorOccured="True";
	    $ErrorLine="P2";
		@mysql_close($conn);
		}
	}
	else
	{
	$ErrorOccured="True";
	$ErrorLine="P3";
	}
}
else
{
$ErrorOccured="True";
$ErrorLine="P4";
}

?>