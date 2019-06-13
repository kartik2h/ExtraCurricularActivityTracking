<?php 
	$con=mysqli_connect('localhost','root','','eca');
	if(!$con)
	{
		echo("The connectiom is not Established");
	}
	$ename=$_POST['ename'];
	$year=$_POST['year'];
	$query="SELECT name,id,ename FROM reg WHERE ename='".$ename."' and year='".$year."'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		echo "<center>";
		echo "<h1>"."THE REGISTERED STUDENTS ARE:"."<h1>";
		echo "<table bordercolor='blue' border='2'  cellspacing='0' cellpadding='15'>";
		echo "<th>" ."NAME:"."</th>"."<th>" ."REGISTRATION ID:"."</th>"."<th>" ."EVENT NAME"."</th>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo '<tr><td>'.$row["name"].'</td><td>'.$row["id"].'</td><td>'.$row["ename"].'</td></tr>';
			
		}
		echo "</table>";
		echo "</center>";
	}
	else
	{
		echo "THERE ARE NO REGISTERED CANDIDATES....";
	}
?>