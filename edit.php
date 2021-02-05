<?php
include'connection.php';
error_reporting(0);
$getuserid=$_REQUEST['id'];
$sql="select * from registration where id='$getuserid'";
$row=mysqli_fetch_array($result);
$result=mysqli_query($con,$sql);
if(isset($_POST['update']))
{
$getuser=$_POST['user'];
$getgender=$_POST['gender'];
$getdob=$_POST['dob'];
$getemail=$_POST['email'];
$getmobile=$_POST['mobile'];
$getpan=$_POST['pan'];
$getaadhar=$_POST['aadhar'];
$getaddress=$_POST['address'];
$getphoto=$_FILES['photo']['name'];
if($getphoto=="") 
{
$updt="update registration set name='$getuser',gender='$getgender',dob='$getdob',email='$getemail',mobile='$getmobile',pan='$getpan',aadhar='$getaadhar',address='$getaddress' where id='$getuserid'";
$result=mysqli_query($con,$updt);
}
if($getphoto!="")
{
move_uploaded_file($_FILES['photo']['temp_name'],'photo/'.$getphoto);
$updt="update registration set name='$getuser',gender='$getgender',dob='$getdob',email='$getemail',mobile='$getmobile',pan='$getpan',aadhar='$getaadhar',address='$getaddress',photo='$getphoto' where id='$getuserid'";
$result=mysqli_query($con,$updt);
}
if($result==true)
{?>
<script>
alert('user successfully updated');
location.replace("report.php");
</script>
<?php
}
else
{?>
<script>
alert('user not updated');
</script>
<?php
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
<form action="#" method="post" enctype="multipart/form-data">
<table border="1" align="center">
<tr>
<th colspan="2">USER DETAILS</th>
</tr>
<?php
$row=mysqli_fetch_array($result);
?>
<tr>
<td>name</td>

<td><input type="text" name="user" value="<?php echo $row['name'];?>"/>
</td>
</tr>
<tr>
<td>gender</td>
<td><input type="text"name="gender" value="<?php echo $row['gender'];?>"/>
</td>
</tr>
<tr>
<td>dob</td>
<td><input type="text" name="dob" value="<?php echo $row['dob'];?>"/>
</td>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" value="<?php echo $row['email'];?>"/>
</td>
</tr>
<tr>
<td>mobile</td>
<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/>
</td>
</tr>
<tr>
<td>pan</td>
<td><input type="text" name="pan" value="<?php echo $row['pan'];?>"/>
</td>
</tr>
<tr>
<td>aadhar</td>
<td><input type="text" name="aadhar" value="<?php echo $row['aadhar'];?>"/>
</td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="address" value="<?php echo $row['address'];?>"/>
</td>
</tr>
<tr>
<td>photo</td>
<td><input type="file" name="photo"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="update" value="update"/>
</td>
</tr>
</table>
</form>
</body>
</html>
