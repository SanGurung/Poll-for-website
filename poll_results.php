<?php

//use it like this    poll_results.php?id=1&GS=..........
$Pollsid=$_GET['id'];
$Gen=$_GET['GS'];

$Establishedconn="Fast";
include("poll.php");
 if($ErrorOccured=="True")
 {
	$Msg="Polls Result could not be shown.<br>Unauthorized Access Code.<br>Error Code: ".$ErrorLine;
	echo $Msg;
 }
 else
 {
 	if($ErrorOccured=="Null")
 	{

?> 
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="description" content="Poll ipokhara Results.">
<meta name="Contents" content="Copyright © 2007 ipokhara.com">
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Poll&gt;&gt;Results &gt;&gt; ipokhara.com</title>
</head>

<body topmargin="2" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" width="566" height="400" style="border: 1px solid #808080">
		<tr>
			<td valign="bottom" width="172">
			<p align="center">
<img border="0" src="images/TopBarblue.jpg" width="149" height="36"></td>
			<td valign="bottom" height="46" width="392">
			<p align="right"><font size="2" color="#5B6264"><br>
			www.ipokhara.com<br>
			info@ipokhara.com</font></td>
		</tr>
		<tr>
			<td valign="top" background="bar.jpg" height="23" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" height="19" bgcolor="#F1F3F5" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" height="258" bgcolor="#F1F3F5" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0" width="564" height="258">
				<tr>
					<td valign="top" rowspan="14" width="12">&nbsp;</td>
					<td valign="top"><font color="#000033">Q)</font></td>
					<td valign="top" colspan="8"><font color="#000033"><?php echo $PollQuestion;  ?><br>
&nbsp;</font></td>
					<td valign="top" rowspan="13" width="10">&nbsp;</td>
				<td valign="top" rowspan="13" width="9" bgcolor="#D2DADF" style="border-left: 1px solid #808080; border-top: 1px solid #808080; border-bottom: 1px solid #808080">&nbsp;</td>
					<td valign="top" rowspan="13" bgcolor="#D2DADF" style="border-top: 1px solid #808080; border-bottom: 1px solid #808080" width="122">
					<p align="justify"><font color="#000033" size="2"><br>
			Dear users if you want your poll question to be on ipokhara.com then 
			send us your poll question with option. And if we will find that 
			question suitable as poll question than we 
			will try to change poll question with yours</font><font color="#000033">. <font size="2">
			Thank you::.</font><br>
			<font size="2">iPokhara.com Team<br>
			info@ipokhara.com</font></font></td>
				<td valign="top" rowspan="13" width="9" bgcolor="#D2DADF" style="border-right: 1px solid #808080; border-top: 1px solid #808080; border-bottom: 1px solid #808080">&nbsp;</td>
					<td width="10" valign="top" rowspan="13">&nbsp;</td>
				<td height="40"></td>
				</tr>
				<tr>
					<td valign="top" colspan="9"></td>
					<td height="13"></td>
				</tr>
				<tr>
					<td valign="top">
					<p align="center">i)</td>
					<td valign="top" rowspan="2" colspan="2">
					<font color="#000033"><?php echo $OP1;  ?></font><br>
					<font size="2" color="#5B6264">
					<img border="0" src="images/lines/orange.jpg" width="10" height="10">&nbsp; Votes:&nbsp; <?php echo $HIT1;   ?> [<?PHP echo $PER1; ?>%]</font></td>
					<td bgcolor="#E8F3FF" style="border: 1px solid #9B9B9B" colspan="6">
					<font size="1">&nbsp;Poll Results in Bar Diagram.</font></td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top">&nbsp;</td>
					<td valign="top" style="border: 1px solid #B2B2B2" rowspan="6" colspan="6">
					<table border="0" cellspacing="0" cellpadding="0" width="125" height="102">
						<tr>
							<td valign="bottom" width="13">&nbsp;</td>
							<td valign="bottom" width="24">
			<img border="0" src="images/lines/orange.jpg" width="21" <?PHP PRINT "height='".$PER1."'" ?> > </td>
							<td width="1"></td>
							<td valign="bottom" width="25">
			<img border="0" src="images/lines/green.jpg" width="21" <?PHP PRINT "height='".$PER2."'" ?> ></td>
							<td valign="bottom" width="25">
			<img border="0" src="images/lines/lbrown.jpg" width="21" <?PHP PRINT "height='".$PER3."'" ?> ></td>
							<td valign="bottom" width="25">
			<img border="0" src="images/lines/brown.jpg" width="21" <?PHP PRINT "height='".$PER4."'" ?> ></td>
							<td valign="bottom" height="102" width="12">&nbsp;</td>
						</tr>
					</table>
					</td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top">
					<p align="center">ii)</td>
					<td valign="top" rowspan="2" colspan="2">
					<font color="#000033"><?php echo $OP2;  ?></font><br>
					<font size="2" color="#5B6264">
					<img border="0" src="images/lines/green.jpg" width="10" height="10">&nbsp; Votes:&nbsp; <?php echo $HIT2; ?> [<?PHP  echo $PER2; ?>%]</font></td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top">&nbsp;</td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top">
					<p align="center">iii)</td>
					<td valign="top" rowspan="2" colspan="2">
					<font color="#000033"><?php echo $OP3;  ?></font><br>
					<font size="2" color="#5B6264">
					<img border="0" src="images/lines/lbrown.jpg" width="10" height="10">&nbsp; Votes:&nbsp; <?php echo $HIT3; ?> [<?PHP  echo $PER3; ?>%]</font></td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top">&nbsp;</td>
					<td height="19"></td>
				</tr>
				<tr>
					<td valign="top" rowspan="2">iv)</td>
					<td valign="top" rowspan="4" colspan="2">
					<font color="#000033"><?php echo $OP4;  ?></font><br>
					<font size="2" color="#5B6264">
					<img border="0" src="images/lines/brown.jpg" width="10" height="10">&nbsp; Votes:&nbsp; <?php echo $HIT4; ?> [<?PHP  echo $PER4; ?>%]</font></td>
					<td height="9"></td>
				</tr>
				<tr>
					<td valign="top" align="center" rowspan="2" width="13">&nbsp;</td>
					<td valign="top" align="center" rowspan="2" width="24">
					<font size="2">
					<?PHP  echo round($PER1,1); ?></font></td>
					<td valign="top" align="center" rowspan="2" width="26">
					<font size="2" color="#CC0000"><?PHP  echo round($PER2,1); ?></font></td>
					<td valign="top" align="center" rowspan="2" width="26">
					<font size="2">
					<?PHP  echo round($PER3,1); ?></font></td>
					<td valign="top" align="center" rowspan="2" width="23">
					<font size="2" color="#CC0000">
					<?PHP  echo round($PER4,1); ?></font></td>
					<td valign="top" align="center" rowspan="2" width="15">&nbsp;</td>
					<td height="10"></td>
				</tr>
				<tr>
					<td valign="top" rowspan="2">&nbsp;</td>
					<td height="11"></td>
				</tr>
				<tr>
					<td valign="top" colspan="6" rowspan="3">
					<p align="left"><font size="2">Legends: <br>
					<img border="0" src="images/lines/orange.jpg" width="14" height="14"> </font>
					<font size="1">Option (i) </font><font size="2">
					<img border="0" src="images/lines/green.jpg" width="14" height="14"> </font>
					<font size="1">Option (ii)<br>
					</font><font size="2">
					<img border="0" src="images/lines/lbrown.jpg" width="14" height="14"> </font>
					<font size="1">Option(iii)</font><font size="2"><img border="0" src="images/lines/brown.jpg" width="14" height="14"> </font>
					<font size="1">Option (iv)</font></td>
					<td height="10"></td>
				</tr>
				<tr>
					<td valign="top" style="border-top: 1px solid #C0C0C0" rowspan="2" width="17">&nbsp;</td>
					<td style="border-top: 1px solid #C0C0C0" rowspan="2" width="219"><font size="2">Number of Votes: 
					<font color="#003399"> <?php	echo $TotalPoll;	?></font><br>
					Poll Published Date: <font color="#003399"><?PHP echo $PollDate; ?></font></font></td>
					<td width="26" valign="top" rowspan="2">&nbsp;</td>
					<td height="22" width="1"></td>
				</tr>
				<tr>
					<td valign="top" colspan="6" height="29">&nbsp;</td>
					</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td height="52" style="border-left-width: 1px; border-right-width: 1px; border-top: 1px solid #DDDDDD; border-bottom-width: 1px" colspan="2">
			<p align="center"><font color="#5B6264"><font style="font-size: 11pt">
			www.ipokhara.com-A Name of simplicity, purity &amp; beauty::.</font><font size="2"><br>
			Copyright © 2007 iPokhara.com. All Rights Reserved.</font></font></td>
		</tr>
	</table>
</div>
</body>
</html>
<?php 

	}
	else
	{
	$Msg="Polls Result could not be shown.<br>Unauthorized Access Code.<br>Error Code: ".$ErrorLine;
	echo $Msg;
	}
}

?>