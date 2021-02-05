<?php
include'connection.php';
if(isset($_POST['login']))
{
$getuser=$_POST['USER'];
$getpass=$_POST['PASS'];
$sql="select*from login where user='$getuser'and password='$getpass'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
header("location:home.php");
}
else
{echo"user and password invalid";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" method="post">
<table border="1">
<tr>
<th colspan="2">USER LOGIN</th>
</tr>
<tr>
<td>USER</td>
<td><input type="text"name="USER"  />
</td></tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="PASS"/>
</tr>
<tr>
<td colspan="2"align="center"><input type="submit"value="login" name="login"/>
&nbsp;&nbsp;<input type="submit"value="reset"/>
<a href="signup.php">signup</a>
</td>
</tr>
</table>
</form>
</body>
</body>
</html>
