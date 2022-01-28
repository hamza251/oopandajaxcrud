<?php
	include('conn.php');
	if(isset($_POST['firstname']))
	{
		$firstname=$_POST['firstname'];
		if(preg_match("/^[A-Za-z]+$/",$firstname))
		{
			echo "";
		}else{
			echo "<div>characters only</div>";
		}
		$lastname=$_POST['lastname'];
		if(preg_match("/^[A-Za-z]+$/",$lastname)){
			echo "";
		}else{
			echo "<div>characters only</div>";
		}
 
		$conn->query("insert into member (firstname, lastname) values ('$firstname', '$lastname')");
	}
 
?>
