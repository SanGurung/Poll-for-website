<br>
<?PHP

if($WirePlug=="Connected" && $Permission=="Granted" && $Establishedconn=="Fast")
{
//$ipkr_dbname="PollServer07";
$ipkr_dbhost = "localhost";
$ipkr_dbuser="root";
$ipkr_dbpassword="";

$ipkr_dbname="PollServer07";
$ipkr_dbtable="PollStructure";

	if(!$conn = @mysql_connect($ipkr_dbhost,$ipkr_dbuser,$ipkr_dbpassword))
	{
	 $ErrorOccured="True";
	 $ErrorLine="D1";
	 //remove
	 echo "M::Error";
	 exit;
	}
	else
	{
		if(!@mysql_select_db($ipkr_dbname,$conn))
		{
		 $ErrorOccured="True";
		 $ErrorLine="D2";
		 //remove
		 echo "2";
		 exit;
		}
		else
		{
			$Connected="Approached";

			// remove
		}
	}
}
else
{
$ErrorOccured="True";
$ErrorLine="D3";
//remove
echo "3";
exit;
}
?>
<br>