<?php
session_start();
?>
<?php
	ob_start();
   	if(!empty($_POST['username']) && !empty($_POST['pwd'])) 
	{  
		$SESSION_user=$_POST['username'];  
		$SESSION_pass=$_POST['pwd'];  
		$con=new mysqli('localhost','root','','eca') or die("Connection failed");   
		$qury = "SELECT * FROM adminsignup WHERE username= '".$SESSION_user."' AND pwd='".$SESSION_pass."'";
		$result = $con->query($qury);
		$numrows = $result->num_rows;  
		if($numrows==1)  
		{
				echo "Login is successful";			
				header("Location:admin.html");
		}
		else 
		{  
			echo "Invalid username or password!";  
		}
	}
?>