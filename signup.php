<?php
include 'connection.php';
if(isset($_POST['signup']))
{
$getuser=$_POST['user'];
$getpass=$_POST['pass'];
$sqlcheck="select*from login where user='$getuser'";
$resultcheck=mysqli_query($con,$sqlcheck);
$countcheck=mysqli_num_rows($resultcheck);
if($countcheck!=1)
{
$ins="insert into login(id,user,password,status)values('','$getuser','$getpass','1')";
$result=mysqli_query($con,$ins);
if($result==true)
{
echo'user successfully registered';
}
else
{
echo'user not registered';
}
}
else
{
echo $getuser.' Already Exist';
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function CheckPassword()
{

var getpass=document.getElementById("pass").value;
var getcpass=document.getElementById("cpass").value;
if(getpass!=getcpass)
{
alert("password and confirm password does not match!");
cpass.focus();
return false;
}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>USER LOGIN</title>
</head>
<body>
<form action="signup.php" method="post" onsubmit="return CheckPassword();">
<table border="1" align="center">
<tr>
<th colspan="2">USER LOGIN</th>
</tr>
<td>USER</td>
<td><input type="text" name="user" id="user"/>
</td></tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="pass" id="pass"/>
</tr>
<td>CONFIRM PASSWORD</td>
<td><input type="password" name="cpass" id="cpass"/> 
<tr>
<td colspan="2"align="center"><input type="submit" value="signup" name="signup"/>
&nbsp;&nbsp <input type="submit" value="reset"/>
</td>
</tr>
</table>
</form>
</body>
</html>
