<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="#"method="post">
<table border="1" align="center">
<tr>
<th colspan="3">search</th>
</tr>
<tr>
<td>UserId</td>
<td><input type="text" name="userid"/></td>
<td><input type="submit" name="search" value="Search"/></td>
</tr>
</table>
</form>
<?php
include 'connection.php';
if(isset($_POST['search']))
{
$getuserid=$_POST['userid'];
$ser="select*from registration where id='$getuserid'";
$result=mysqli_query($con,$ser);
$sercount=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($sercount==1)
{
?>
<table border="1" align="center">
<tr>
<th colspan="5">User Details</th>
</tr>
<tr>
<td>Name</td>
<td>Gender</td>
<td>DOB</td>
<td>Email</td>
<td>Mobile</td>
</tr>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
</tr>
</table>
<?php
}
else
{
?>
<Div align="center">Record not found</Div>
<?php
}
}
?>
</body>
</body>
</html>
