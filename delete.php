<?php
	include('conn.php');
	if(isset($_POST['memid']))
	{
		$memid=$_POST['memid'];
 
		$conn->query("delete from member where memberid='$memid'");
	}
?>