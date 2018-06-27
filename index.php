<?php


?>
<?php
setcookie("Author","www.example.com",0);
setcookie("keycode","2",0);

?>
<?php
//ee5efeee656213319f6bb072def11320
$Pollsid=$_GET['id'];
$Gen=$_GET['GS'];
$Establishedconn="Fast";
include("poll.php"); 
// Remove it...

//this.action='pollprocess.php?ans=ee5efeee656213319f6bb072def11320'+'.sel.'
?>
<html>
<head><title>this is </title>
<script language="JavaScript">
function duelsubmit()
{

document.poll.action='pollprocess.php?ans=ee5efeee656213319f6bb072def11320'+document.poll.pid.value+'SPG'+'&id='+document.poll.pid.value;
document.poll.submit;
}
</script>
</head>
<body>

<form method="POST" action="pollprocess.php" name="poll" onsubmit="duelsubmit();" >
<?php echo $PollQuestion; ?><br>
<input type="radio" value="1" checked name="sel"><?Php echo $OP1; ?><br>
<input type="radio" value="2" name="sel"><?Php echo $OP2; ?><br>
<input type="radio" value="3" name="sel"><?Php echo $OP3; ?><br>
<input type="radio" value="4" name="sel"><?Php echo $OP4; ?><br>

<input type='hidden' name='pid' value=<?php echo $PID; ?> >
<input type='hidden' name='pollserver' value="www.ipokhara.com" >
<input type="submit" onclick="duelsubmit();" value="this is ">
<input type="submit" name="pollsubmit" value="Submit" >
</form>
</body>
</html>
