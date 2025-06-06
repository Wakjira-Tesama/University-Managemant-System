<?php 

$student_id = $_GET['studentid'];
$edit_student_info = $jxnu->edit_studentid($student_id);
	$edit_student_display = $edit_student_info->fetch_assoc();


if(isset($_POST['up_student']))
{
	
	
	$up_fullname = $_POST['up_fullname'];
	$up_username = $_POST['up_username'];
    $up_password = $_POST['up_password'];
	$up_grade = $_POST['up_grade'];
	$up_roll = $_POST['up_roll'];
	$up_dob = $_POST['up_dob'];
	$up_address = $_POST['up_address'];
	$up_district = $_POST['up_district'];
	$up_gender = $_POST['up_gender'];
	$up_father = $_POST['up_father'];
	$up_mother = $_POST['up_mother'];
    $up_phone = $_POST['up_phone'];
	
	$update_done = $jxnu->update_student_info($up_fullname,$up_username,$up_password,$up_grade,
    $up_roll,$up_dob,$up_address,$up_district,$up_gender,$up_father,
    $up_mother,$up_phone,$student_id);

	if($update_done==true)
	{
		echo "<script>window.location='home.php?jxnu=student-edit';</script>";
	}
	else
	{
		echo "<script>alert('Cant update Information');</script>";
	}
	

}

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<?php if(isset($_GET['jxnu'])){ echo strtoupper($page=$_GET['jxnu']); } ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['jxnu']); ?>
		</h2>


<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_fullname" value="<?php echo $edit_student_display['st_fullname']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_username" value="<?php echo $edit_student_display['st_username']; ?>"> </div>
					</div>
                    <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="up_password" value="<?php echo $edit_student_display['st_password']; ?>"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_grade" value="<?php echo $edit_student_display['st_grade']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Roll</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_roll" value="<?php echo $edit_student_display['roll_no']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Date of Birth</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_dob" value="<?php echo $edit_student_display['st_dob']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_address" value="<?php echo $edit_student_display['st_address']; ?>"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">District</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_district" value="<?php echo $edit_student_display['st_district']; ?>"> </div>

                    <div class="form-group">
                        <select id="selector1" class="form-control1" name="up_gender">
                        <option value="<?php echo $edit_student_display['t_gender']; ?>">Select Gender</option>
                            <option>Male</option>
                        <option>Female</option>
                            </select>
                    </div>

					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Father</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_father" value="<?php echo $edit_student_display['st_father']; ?>"> </div>

					</div>

                    <div class="form-group"> <label for="address" class="col-sm-2 control-label">Mother</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_mother" value="<?php echo $edit_student_display['st_mother']; ?>"> </div>

					</div>

                    <div class="form-group"> <label for="address" class="col-sm-2 control-label">Parents Contact</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="up_phone" value="<?php echo $edit_student_display['st_parents_contact']; ?>"> </div>

					</div>



					<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="up_student">Update Student Profile</button> </div>
				</form>
			</div>

		</div>


	</div>