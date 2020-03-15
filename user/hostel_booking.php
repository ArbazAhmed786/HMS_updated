<?php
require_once('../connection.php');
extract($_POST);
$sqlchk4 = mysqli_query($conn,"select * from hostel_reg where email_id= '".$_SESSION['user']."'"); 
$chk4 = mysqli_num_rows($sqlchk4);
if($chk4 >0){
  $err= "<font color='red'>You Have Already Booked The hostel!</font>";
}


if(isset($save)){
  
  $sqlchk = mysqli_query($conn,"select * from hostel_reg where roomno= '$roomno'"); 
$chk = mysqli_num_rows($sqlchk);
if($chk == true){
  $err= "<font color='red'>Room not available</font>";



  //check user alereay exists or not
  $sql=mysqli_query($conn,"select email_id from hostel_reg where email_id='".$_SESSION['user']."'");
  
  $r=mysqli_num_rows($sql);
}else if($r==true){ 
  $err= "<font color='red'>Already Booked</font>";

}
  else{


  $q = "insert into hostel_reg values('','$roomno','$fee','$wf','$date','$duration','$ta','$course','$rn','$sfn','$smn','$sln','$gen','$cn','$email','$ecn','$gn','$gcn','$gaddress','$saddress','$scity','$spc')";
  $run = mysqli_query($conn,$q);
  if($run){
    $err = "<font color='green'>Data Inserted</font>";

  }else{
    $err = "<font color='red'>ERROR!</font>";
  }
}

}

//select old data
// getting user fname Mname Lname
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);


//dropdown values for courses
$res3 = mysqli_query($conn,"SELECT course_fn FROM courses");
$row3 = mysqli_num_rows($res3);

//dropdown values for room_no
$res4 = mysqli_query($conn,"SELECT room_no FROM rooms");
$row4 = mysqli_num_rows($res4);

//getting Student_register_no
$getr = mysqli_query($conn,"select regid from user where email = '".$_SESSION['user']."'");
$sregno = mysqli_fetch_array($getr);



?>



<form class="form-group" method="POST" action="">

<h3><?php echo @$err;?></h3>


<h3>Hostel Registration</h3>
<br>

<div class="form-group">
    <label for="exampleInputEmail1">Room_no</label>
    <select class="form-control form-control-lg" name="roomno" required>
    <?php
                    
										
											while($row= mysqli_fetch_array($res4))
											{
												echo "<option value='". $row['room_no'] ."'>" .$row['room_no'] ."</option>" ;
											}
											
										?>

</select> 
</div>




  <div class="form-group">
    <label for="fee">Fee per student:</label>
    <input type="text" class="form-control" name="fee" placeholder="Fee" required>
  </div>

  <label for="fee">Food Status:</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="wf" id="inlineRadio1" value="with food">
  <label class="form-check-label" for="inlineRadio1">with food</label>
  <input class="form-check-input" type="radio" name="wf" id="inlineRadio2" value="without food">
  <label class="form-check-label" for="inlineRadio2">without food</label>
</div>


<div class="form-group">
    <label for="date">Stay from: </label>
    <input type="date" class="form-control" name="date"  placeholder="date" required>
 </div>

<div class="form-group">
    <label for="exampleInputEmail1">Duration</label>
    <select class="form-control form-control-lg" name="duration" required>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
</select> 
</div>


<div class="form-group">
    <label for="fee">Total Amount:</label>
    <input type="text" class="form-control" name="ta"  placeholder="total amount" required>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Course</label>
    <select class="form-control form-control-lg" name="course" required>
    <?php
                    
										
											while($row3 = mysqli_fetch_array($res3))
											{
												echo "<option value='". $row3['course_fn'] ."'>" .$row3['course_fn'] ."</option>" ;
											}
											
										?>
</select> 
</div>


<div class="form-group">
    <label for="fee">Registration Number:</label>
    <input type="text" class="form-control" name="rn" value="<?php echo $sregno['regid'];?>"  placeholder="total amount" required readonly>
  </div>

  
<div class="form-group">
    <label for="fee">Student fname:</label>
    <input type="text" class="form-control" name="sfn"  value="<?php echo $res['name'];?>" placeholder="total amount" required readonly>
  </div>


  <div class="form-group">
    <label for="fee">Student mname:</label>
    <input type="text" class="form-control" name="smn" value="<?php echo $res['mname'];?>"  placeholder="total amount" required readonly>
  </div>


  <div class="form-group">
    <label for="fee">Student lname:</label>
    <input type="text" class="form-control" name="sln" value="<?php echo $res['lname'];?>"  placeholder="total amount" required readonly>
  </div>

    
  <div class="form-group">
    <label for="fee">Gender</label>
    <input type="text" class="form-control" name="gen"  value="<?php echo $res['gender'];?>"  placeholder="gender" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">Conatact Number:</label>
    <input type="number" class="form-control" name="cn"  value="<?php echo $res['mobile'];?>" placeholder="total amount" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">Student Email:</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $res['email'];?>" placeholder="email" required readonly>
  </div>

  <div class="form-group">
    <label for="fee">Emergency Conatact Number:</label>
    <input type="number" class="form-control" name="ecn"  placeholder="emergency contact number" required>
  </div>


  <div class="form-group">
    <label for="fee">Gaurdian Name:</label>
    <input type="text" class="form-control" name="gn"  placeholder="guardian Name" required>
  </div>

  <div class="form-group">
    <label for="fee">guardian Conatact Number:</label>
    <input type="number" class="form-control" name="gcn"  placeholder="emergency contact number" required>
  </div>


  <div class="form-group">
	<label class="control-label">guardian Address : </label>
	<textarea  rows="5" name="gaddress"  id="address" class="form-control" required="required"></textarea>
</div>

  <div class="form-group">
	<label class="control-label">Student Address : </label>
	<textarea  rows="5" name="saddress"  id="address" class="form-control" required="required"></textarea>
	</div>


  <div class="form-group">
    <label for="fee">city:</label>
    <input type="text" class="form-control" name="scity"  placeholder="city" required>
  </div>

  <div class="form-group">
    <label for="fee">Pincode:</label>
    <input type="text" class="form-control" name="spc"  placeholder="Pincode" required>
  </div>



  <input type="submit" class="btn btn-success" value="Register" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>
