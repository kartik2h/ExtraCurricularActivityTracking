<?php 
	$conn=mysqli_connect('localhost','root','','eca');
	if(!$conn)
	{
		echo("The connectiom is not Established");
	}
	$username=$_POST['username'];
	$query="DELETE FROM signup WHERE username='".$username."'";
	$result=mysqli_query($conn,$query);
	$res1=mysqli_query($conn,"SELECT * FROM signup where username='".$username."'");
		
		
		if(mysqli_num_rows($res1)==1)
 		{
 			echo "NOT DELETED";
 		}
 		else
 		{
 			echo "DELETED SUCCESSFULLY";
 		}
 		$conn->close();
?>