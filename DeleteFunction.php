<?php
include "DatabaseLink.php";
	$delimg = $_POST['Caption']; //from the url id=x

	//start the delete contact stage (step by step)
	//1. connect to database
	
	$deleteimage = "SELECT * FROM upload WHERE loadcaption='$delimg'";
	$getimage = mysqli_query($conn,$deleteimage);

if ($getimage === false){
	echo "false";
	echo (print_r(mysqli_error($conn)));
}
else{
	if($rows = mysqli_fetch_array($getimage))
	{
		$image = $rows['loadimage'];
	}
	$delete = $image;
	if (!unlink($delete)) {
		echo ("Error deleting $delete");
	}
	// statement corrent = delete
	else {
		echo ("deleted $delete");

		//after delete image , remove directory from database
		//2. write sql query
		$directory = mysqli_real_escape_string($conn,$delete);
		$sql = "delete from upload where loadimage = '$directory'"; //delete query
		//3. execute the sql query
		$check = mysqli_query($conn, $sql);

		//4. check for the result from the sql query
		if(mysqli_affected_rows($conn)<=0)
		{
		//5. incorrect - come out error message
			echo "<script>alert('Unable to delete Image!');";
		//7. end..transfer back to view.php (previous page)

		}else{
		//6. correct - success message
		echo "<script>alert('Image deleted!')</script>";
		//7. end..transfer back to view.php (previous page)
		echo "<script>window.location.href='Gallery.php';</script>";
		}
	}

}

?>