<?php
require_once('../connection.php');
extract($_POST);
if(isset($save)){
                                                                                                
    $sqlchk = mysqli_query($conn,"select * from `student-room-detail` where room_no= '$roomno'"); 
    $chk = mysqli_num_rows($sqlchk);
    
    if($chk > 0){
      $err= "<font color='red'>Room not available</font>";
    }
    else{
      $q = "insert into `student-room-detail` values('','$blockid','$roomno','$roomty','$nbeds','$troom','$need')";
      $run = mysqli_query($conn,$q);
      if($run){
        $err = "<font color='green'>Room Registered</font>";
    
      }else{
        $err = "<font color='red'>ERROR Contact Admin!</font>";
      }
    }
    
}



//dropdown values for room_no
$res4 = mysqli_query($conn,"SELECT room_no FROM rooms");
$row4 = mysqli_num_rows($res4);
?>


<form class="form-group" method="POST" action="">
<h3><?php echo @$err;?></h3>


<div class="form-group">
    <label for="fee">Block-id:</label>
    <input type="text" class="form-control" name="blockid" placeholder="Block Id" required>
  </div>

    
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
    <label for="exampleInputEmail1">Room-Type</label>
    <select class="form-control form-control-lg" name="roomty" required>
    <option value=""></option>
  <option>AC</option>
  <option>NON-AC</option>

</select> 
</div>




<div class="form-group">
    <label for="exampleInputEmail1">No of Beds</label>
    <select class="form-control form-control-lg" name="nbeds" required>
    <option value=""></option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select> 
</div>



<div class="form-group">
    <label for="exampleInputEmail1">type of Room</label>
    <select class="form-control form-control-lg" name="troom" required>
    <option value=""></option>
  <option>shared</option>
  <option>NON-Shared</option>

</select> 
</div>

<label for="fee">need ?</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="need" id="inlineRadio1" value="loundary">
  <label class="form-check-label" for="inlineRadio1">Loundary</label>
  <input class="form-check-input" type="radio" name="need" id="inlineRadio2" value="gym">
  <label class="form-check-label" for="inlineRadio2">gym</label>
</div>

<input type="submit" class="btn btn-success" value="Register" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>



</form>