<?php
	include('conn.php');
	if(isset($_POST['efirstname'])){
		$firstname=$_POST['efirstname'];
		$lastname=$_POST['elastname'];
		$memid=$_POST['memid'];
 
		$conn->query("update member set firstname='$firstname', lastname='$lastname' where memberid='$memid'");
	}
?>