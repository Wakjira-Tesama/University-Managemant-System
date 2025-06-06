<?php 
$del_student = $_GET['st_id'];
$del_done = $jxnu->delete_student($del_student);
if($del_done==true)
{
	echo "<script>window.location = 'home.php?jxnu=del-student'; alert('success delete');</script>";
	
}
else
{
	echo "<script>window.location='home.php?jxnu=del-student'; alert('cant delete');</script>";
}
?>