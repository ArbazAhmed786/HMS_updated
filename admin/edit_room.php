<?php 
require_once('../connection.php');
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update rooms set seater='$seater',room_no='$roomno',fees='$fee' where id='".$_GET['id']."'");
$err="<font color='blue'>room updated </font>";

}

//select old notice 

$q=mysqli_query($conn,"select * from rooms where id ='".$_GET['id']."'");
$res=mysqli_fetch_array($q);

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
    <input type="text" class="form-control" name="seater" placeholder="seater" value="<?php echo $res['seater'];?>" required>
</div>


<div class="form-group">
    <label for="roomno">Room No:</label>
    <input type="text" class="form-control" name="roomno" placeholder="Room Number" value="<?php echo $res['room_no'];?>" required>
  </div>


  <div class="form-group">
    <label for="fee">Fee/Student:</label>
    <input type="text" class="form-control" name="fee"  placeholder="Fee" value ="<?php echo $res['fees'];?>" required>
  </div>

  <input type="submit" class="btn btn-success" value="UPDTE ROOM" name="update" />
<input type="reset" class="btn btn-success" value="Reset"/>
				
</form>


</body>
</html>