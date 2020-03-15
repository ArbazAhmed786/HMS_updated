

<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update courses set course_code='$cd',course_sn='$cns', course_fn = '$cnf' where id='".$_GET['id']."'");
$err="<font color='blue'>Course updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from courses where id='".$_GET['id']."'");
$res=mysqli_fetch_array($q);

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
		<input type="text" name="cd"  value="<?php echo $res['course_code']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Course Name (SHORT): </div>
		<div class="col-sm-5">
		<input type="text" name="cns"  value="<?php echo $res['course_sn']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter Course Name(FULL):  </div>
		<div class="col-sm-5">
		<input type="text" name="cnf"  value="<?php echo $res['course_fn']; ?>" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Course" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	