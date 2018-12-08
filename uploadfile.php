<?php

	//step 1:read the file name (optional)
	$filename = basename($_FILES["Image"]["name"]);
	//step 2: get file info
	//new file name in server e.g. profile/abc.gif
  $getFileType =   pathinfo($filename, PATHINFO_EXTENSION);//gif/jpg/mp3
	$checkfilesize = $_FILES["Image"]["size"];
  $newfilename = "useronly/".$_POST['Caption'].".".$getFileType;

	//step 3:check for the file size so not too big
	if($checkfilesize >1000000) //1MB
		{
			echo"<script>alert('Picture too big');";
			die("window.history.go(-1);</script>");
		}
	//step 4: check for the picture type correct or not
	if($getFileType != "jpg" && $getFileType !="png" && $getFileType != "gif")
	{
		echo"<script>alert('".$filename."');";
		die("window.history.go(-1);</script>");
	}
	//step 5: everything ok.. then upload the profile picture to the server
	if (move_uploaded_file($_FILES["Image"]["tmp_name"], $newfilename) )
	{
		echo "<script>alert('Picture uploaded to the server!');";
    echo "window.location.href='Gallery.php';</script>";
  	}
	else {
		echo "<script>alert('Picture cannot be uploaded');";
		die ("window.history.go(-1);</script>");
	 }
?>
