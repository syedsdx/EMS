<?php
include'connection.php';
$getdate=date('d/m/y');
if(isset($_POST['register']))
{
$getname=$_POST['username'];
$getgender=$_POST['gender'];
$dobday=$_POST['day'];
$dobmonth=$_POST['month'];
$dobyear=$_POST['year'];
$finaldob=$dobday.'/'.$dobmonth.'/'.$dobyear;
$getemail=$_POST['email'];
$getmobile=$_POST['mobile'];
$getpan=$_POST['pan'];
$getaadhar=$_POST['aadhar'];
$getaddress=$_POST['address'];
$getphoto=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],'photo/'.$getphoto);
$sqlins="insert into registration(id,name,gender,dob,email,mobile,pan,aadhar,address,photo,reg_date)values('','$getname','$getgender','$finaldob','$getemail','$getmobile','$getpan','$getaadhar','$getaddress','$getphoto','$getdate')";
$result=mysqli_query($con,$sqlins);
if($result==true)
{
echo'registration successfully submitted';
}
else
{
echo'registration not submitted';}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRATION FORM</title>
</head>

<body>
<form action="registration.php" method="post" enctype="multipart/form-data">
<table border="1">
<tr>
<th colspan="2">REGISTRATION FORM</th>
</tr>
<tr>
<td>name</td>
<td><input type="text" name="username" id="username"/>
</td></tr>
<tr>
<td>gender</td>
<td>
<select name="gender">
<option>male</option>
<option>female</option>
</select>
</tr></td>
<tr>
<td>dob</td>
<td>
<select name="day">
<option>day</option>
<?php
for($i=1;$i<=31;$i++)
{?>
<option><?php echo $i;?></option>
<?php
}?>
</select>
&nbsp;&nbsp;
<select name="month">
<option>month</option>

<?php
for($j=1;$j<=12;$j++)
{?>
<option><?php echo $j;?></option>
<?php
}?>
</select>

&nbsp;&nbsp;
<select name="year">
<option>year</option>
<?php
for($k=1960;$k<=2017;$k++)
{?>
<option><?php echo $k;?></option>
<?php
}?>

</select>
</tr></td>
<tr>
<td>email</td>
<td><input type="text" name="email" id="email"/>
</td></tr>
<tr>
<td>mobile</td>
<td><input type="text" name="mobile" id="mobile"/>
</td></tr>
<tr>
<td>PAN</td>
<td><input type="text" name="pan" id="pan"/>
</td></tr>
<tr>
<td>aadhar</td>
<td><input type="text" name="aadhar" id="aadhar"/>
</td></tr>
<tr>
<td>address</td>
<td><input type="text" name="address" id="address"/>
</td></tr>
<tr>
<td>photo</td>
<td><input type="file" name="photo" id="photo"/>
</td></tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="register" name="register"/>
</td>
</tr>
</table>
</form>
</body>
</html>
