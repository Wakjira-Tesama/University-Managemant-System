<?php 
 $del_teacher = $_GET['teacherid'];
$del_done = $jxnu->delete_teacher($del_teacher);
if($del_done==true)
{
	echo "<script>window.location = 'home.php?jxnu=teacher-delete'; alert('success delete');</script>";
	
}
else
{
	echo "<script>window.location='home.php?jxnu=teacher-delete'; alert('cant delete');</script>";
}
?>