<?php
	$conn = mysqli_connect('localhost','root','','eca');
	if(!$conn)
	{
		echo "The Connection is not established.";
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = $_POST['name'];
	$id = $_POST['id'];
	$year = $_POST['year'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$event = $_POST['event'];
	$ename = $_POST['ename'];
	
	$qry="INSERT INTO reg VALUES ('".$name."','".$id."','".$year."','".$email."','".$gender."','".$event."','".$ename."')";
	$res=mysqli_query($conn,$qry);
	$res1=mysqli_query($conn,"SELECT * FROM reg where id='".$id."'");
		
		
		if(mysqli_num_rows($res1)==1)
 		{
 			echo "INSERTED";
			header("Location:student.html");
 		}
 		else
 		{
 			echo "NOT INSERTED";
 		}
 		$conn->close();
}
	// header("location:".html"");
?>

<html>
<title> <cenetr><h1><font color='blue'>REGISTRATION FORM</center></title>
<body>
<br />
<br />
<form name="myform" method = "POST" action = "<?php $_PHP_SELF ?>">
<center>
<caption><font color='blue' size='5'>FILL IN THE DETAILS</caption>
<table bordercolor="blue" ,cellspacing='10' cellpadding='15'>
<tr>
<td>NAME</td>
<td><input type="text" name='name' maxlength='30' placeholder='name'></td>
</tr>
<tr>
<td>REGISTRATION ID</td>
<td><input type="text" name='id' maxlength='30' placeholder='registration number'></td>
</tr>
<td>YEAR</td>
<td><input type="text" name='year' maxlength='4' placeholder='2019'></td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type="text" name='email' maxlength='30' placeholder='john@gmail.com'></td>
</tr>
<tr>
<td>GENDER</td>
<td><input type="radio" name='gender' value="male"><b>MALE</b>
<input type="radio" name='gender' value="female"><b>FEMALE</b></td>
</tr>
<tr>
<td>EVENT</td>
<td><SELECT name='event'>
<option value='1'>SPORTS</option>
<option value='2'>NCC</option>
<option value='3'>NSS</option>
</td>
</tr>
<tr>
<td>EVENT NAME</td>
<td><input type="text" name='ename' maxlength='30' placeholder='event name'></td>
</tr>

</table>
</center>
<br /><center><input type="submit" name='b' value='REGISTER'></center>
</form>
</body>
</html>