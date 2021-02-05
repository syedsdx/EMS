<?php
include 'connection.php';
$sql="select*from registration";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function userdelete(url)
{
var deluser=confirm("are you sure want to delete this record?");
if(deluser==true)
{
location.replace(url);
}
}
</script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" align="center">
<tr>
<th colspan="6">REPORTS</th>
</tr>
<td>S.N</td>
<td>name</td>
<td>gender</td>
<td>email</td>
<td>mobile</td>
<td>action</td>
</tr>
<?php
$i=1;
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile']?></td>
<td><a href="edit.php?id=<?php echo $row['id'];?>">edit</a>|&nbsp;
<a href="javascript:void();" onclick="userdelete('delete.php?id=<?php echo $row['id'];?>');">Delete</a>
<a href="viewmore.php?id=<?php echo $row['id'];?>">view more</a>
</td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
