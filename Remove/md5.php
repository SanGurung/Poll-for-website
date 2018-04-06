<?php
$p=$_GET['id'];
$Gen="c7a42de3acefa9db9c9a9d9949b7bb74_".md5(base64_encode($_GET['id']));
echo "index.php?id=" .$p. "&GS=" . $Gen;
echo "<br>";

echo "Insert Below code<br>";
echo "poll_results.php?id=".$p."&GS=";
echo "c7a42de3acefa9db9c9a9d9949b7bb74_".md5(base64_encode($_GET['id']));
$a=base64_decode($p);
echo "<BR>";

?>