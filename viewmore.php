<?php
include'connection.php';
$getid=$_REQUEST['id'];
$sql= "select*from registration where id=$getid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled document</title>
</head>

<body>
<table border="1" align="center">
<tr>
<th colspan="2">USER DETAILS</th>
</tr>
<tr>
<td>name</td>
<td><?php echo $row['name'];?></td>
</tr>
<tr>
<td>gender</td>
<td><?php echo $row['gender'];?></td>
</tr>
<tr>
<td>DOB</td>
<td><?php echo $row['dob'];?></td>
</tr>
<tr>
<td>email</td>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<td>mobile</td>
<td><?php echo $row['mobile'];?></td>
</tr>
<tr>
<td>PAN</td>
<td><?php echo $row['pan'];?></td>
</tr>
<tr>
<td>aadhar</td>
<td><?php echo $row['aadhar'];?></td>
</tr>
<tr>
<td>address</td>
<td><?php echo $row['address'];?></td>
</tr>
<tr>
<td>photo</td>
<td><img src="photo/<?php echo $row['photo'];?>" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" onclick="print();" value="Print" />
</td>
</tr>

</table>
</body>
</html>
