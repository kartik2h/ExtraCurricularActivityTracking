<?php
$name=$_POST['name'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$email=$_POST['email'];
if(!empty($name) || !empty($username) || !empty($pwd) || !empty($cpwd) ||!empty($email)){
	$host="localhost";
	$user="root";
	$pass="";
	$db="eca";
	$conn = new mysqli($host,$user,$pass,$db);
 	if(mysqli_connect_error())
 	{
 		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
 	}
	else{
		if($pwd!=$cpwd)
 		{
 			echo "Pass word Missmatch";
 			die();
 		}
		$res=mysqli_query($conn,"INSERT INTO signup(`name`,`username`,`email`,`pwd`) VALUES( '".$name."','".$username."','".$email."','".$pwd."')");
		$res1=mysqli_query($conn,"SELECT * FROM signup where username='".$username."'");
		
		
		if(mysqli_num_rows($res1)==1)
 		{
 			header("Location:studentlogin.html");
 		}
 		else
 		{
 			echo "Error: ".$res."<br>".$conn->error;
 		}
 		$conn->close();
 		}
}
else{
	echo "All fields should be filled";
	die();
}
?>
