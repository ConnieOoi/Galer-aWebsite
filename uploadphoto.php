<?php
	session_start();
	include "DatabaseLink.php";

	//retreive data 
	$Caption = mysqli_real_escape_string($conn,$_POST['Caption']);
// mysqli_real_escape_string is check valid text or not

include "uploadfile.php";


$sql = "INSERT INTO upload (loadimage,loadcaption)".
"VALUES ('$newfilename','$Caption');";
mysqli_query($conn,$sql);
//echo $sql;
 if(mysqli_affected_rows($conn)<=0)
 {
	echo "<script>alert('Unable to Upload ! \\Please Try Agian!');";
	die("window.history.go(-1);</script>");
 }
 else{
	echo"<script>alert('Upload Succesfull!');";

  echo"window.location.href='Gallery.php';</script>";
	
}
?>
