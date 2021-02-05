<?php
include 'connection.php';
$getuserid=$_REQUEST['id'];
$del="delete from registration where id='$getuserid'";
$result=mysqli_query($con,$del);
if($result==true)
{
?>
<script>
alert('user successfully deleted');
location.replace('report.php');
</script>
<?php
}
else
{
?>
<script>
alert('user not deleted');
</script>
<?php
}
?>

