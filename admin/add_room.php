<?php 
require('../connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select room_no from rooms where room_no= '$roomno' ");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This Room already exists</font>";
}
else
{
if($seater == 'one seater')
{
  $i = 1;
}else if($seater == 'two seater'){
  $i = 2;
}
else if($seater == 'three seater'){
  $i = 3;
}
else if($seater == 'four seater'){
  $i = 4;
}
else if($seater == 'five seater'){
  $i = 5;
}
$query="insert into rooms (seater,room_no,fees) values('$i','$roomno','$fee')";
mysqli_query($conn,$query);


$err="<font color='blue'>ROOM ADDED</font>";

}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form-group" method="POST" action="">

<p><?php echo @$err;?></p>
<div class="form-group">
    <label for="exampleInputEmail1">select seater</label>
    <select class="form-control form-control-lg" name="seater" required>
  <option>select seater</option>
  <option>one seater</option>
  <option>two seater</option>
  <option>three seater</option>
  <option>four seater</option>
  <option>five seater</option>
</select> 
</div>


<div class="form-group">
    <label for="roomno">Room No:</label>
    <input type="text" class="form-control" name="roomno" placeholder="Room Number" required>
  </div>


  <div class="form-group">
    <label for="fee">Fee/Student:</label>
    <input type="text" class="form-control" name="fee"  placeholder="Fee" required>
  </div>

  <input type="submit" class="btn btn-success" value="ADD ROOM" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>


</body>
</html>