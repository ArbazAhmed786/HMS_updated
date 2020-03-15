<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from courses where course_code='$cd'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>Course already exists</font>";
}
else
{
$q1 = "insert into courses (course_code,course_sn,course_fn) values ('$cd','$cns','$cnf')";
$run = mysqli_query($conn,$q1);
if($run){
$err="<font color='blue'>Course Added successfully !!</font>";
}else{
    $err="<font color='blue'>PROBLEM !!</font>";
}
}

}

?>


<h2>ADD COURSE</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Course Code: </div>
		<div class="col-sm-5">
		<input type="text" name="cd" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Course Name (SHORT): </div>
		<div class="col-sm-5">
		<input type="text" name="cns" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Course Name(FULL):  </div>
		<div class="col-sm-5">
		<input type="text" name="cnf" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Add Course" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	