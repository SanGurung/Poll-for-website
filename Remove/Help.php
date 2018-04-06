<?php
/*
Code Purely Written by Santos Gurung.xangurung@gmail.com

First of all write this code inside php file inside <?php....?> tag or whatever(Change id as you like);
	1)  a) $Pollsid=1;
		b) $Gen="c7a42de3acefa9db9c9a9d9949b7bb74_".md5(base64_encode($Pollsid));
		c) $Establishedconn="Fast";
		
After that write this code in any where in any form but must be inside <?php.. (notice its location...poll.php...)
	2) include("poll.php");

After that data is taken out of the database::. And in case of error it will detect error place like D1 or P1...
After that mainly two variable is used to know what is happening::. value of $erroroccured are True,False & Null
	3) 	a) $ErrorOccured;     
		b) $ErrorLine;

Upper step & this step is same just if you want to show error message than use above else use directly down 
Now these are some variables just put in any corner of html then also it works. you can use it any where all a,b,c,d..
	3)		a)	<?php echo $PollQuestion;  ?>
			b)	<?php echo $OP1;  ?>
			c)	<?php echo $OP2;  ?>
			d)	<?php echo $OP3;  ?>
			e)	<?php echo $OP4;  ?>
			
			
			f)  <?PHP echo $PollDate; ?>
if you want to show total hit then add the below code anywhere in html line
	4)  <?php	echo $TotalPoll	?>

if you want to show the results the insert these abcd as you like
	5)		a)	<?php echo $HIT1;   ?>
			b)	<?php echo $HIT2;   ?>
			c)	<?php echo $HIT3;   ?>
			d)	<?php echo $HIT4;   ?>

*/


/*
				echo "<br>";
				echo $PollQuestion;  echo "<br>";
				echo $OP1; echo "<br>";
				echo $OP2; echo "<br>";
				echo $OP3; echo "<br>";
				echo $OP4; echo "<br>";
				echo $HIT1; echo "<br>";
				echo $HIT2; echo "<br>";
				echo $HIT3; echo "<br>";
				echo $HIT4; echo "<br>";
*/

/*
<?PHP  echo $PER1; ?>
<?PHP  echo $PER2; ?>
<?PHP  echo $PER3; ?>
<?PHP  echo $PER4; ?>

*/


?>