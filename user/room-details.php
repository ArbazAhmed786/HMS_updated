<?php 



$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>You have not Booked Hostel!!!</h2>";
}
else
{
?>


<h2>All Details</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>room_no</th>
		<th>feespm</th>
		<th>food_status</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['roomno']."</td>";
echo "<td>".$row['feespm']."</td>";
echo "<td>".$row['food_status']."</td>";

echo "</Tr>";
$i++;
}

?>



<table class="table table-bordered">
	<Tr class="success">
		<th>Stay_from</th>
		<th>duration</th>
		<th>total_amount</th>
		<th>course</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['stay_from']."</td>";
echo "<td>".$row['duration']."</td>";
echo "<td>".$row['total_amount']."</td>";
echo "<td>".$row['course']."</td>";

echo "</Tr>";
}



?>

<table class="table table-bordered">
	<Tr class="success">
		<th>reg_num</th>
		<th>fname</th>
		<th>mname</th>
		<th>lname</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['reg_no']."</td>";
echo "<td>".$row['sfname']."</td>";
echo "<td>".$row['smname']."</td>";
echo "<td>".$row['slname']."</td>";

echo "</Tr>";
}



?>


<table class="table table-bordered">
	<Tr class="success">
		<th>gender</th>
		<th>contact_no</th>
		<th>email_id</th>
		<th>emergency_contact_no</th>
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['contact_no']."</td>";
echo "<td>".$row['email_id']."</td>";
echo "<td>".$row['emer_contact_no']."</td>";

echo "</Tr>";
}



?>

<table class="table table-bordered">
	<Tr class="success">
		<th>guardian_name</th>
		<th>guardian_no</th>
		<th>guad_address</th>
		
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['guardian_name']."</td>";
echo "<td>".$row['guardian_no']."</td>";
echo "<td>".$row['guad_address']."</td>";


echo "</Tr>";
}

?>

<table class="table table-bordered">
	<Tr class="success">
		<th>student_address</th>
		<th>city</th>
		<th>pincode</th>
		
		</Tr>
		<?php 

$q=mysqli_query($conn,"select * from hostel_reg where email_id='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['stu_address']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['pincode']."</td>";


echo "</Tr>";
}

?>








<table class="table table-bordered">

<h2>Room Realted Details</h2>
	<Tr class="danger">
		<th>Sr.no</th>
		<th>block-id</th>
		<th>room-no</th>
		<th>room-type</th>
		</Tr>
		<?php 

$ro1 = mysqli_query($conn,"select * from `student-room-detail` where email='".$_SESSION['user']."'");
$ro1r = mysqli_num_rows($ro1);
$i=1;
while($row=mysqli_fetch_array($ro1))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['block-id']."</td>";
echo "<td>".$row['room_no']."</td>";
echo "<td>".$row['room_type']."</td>";


echo "</Tr>";
}

?>




<table class="table table-bordered">

	<Tr class="danger">
		<th>no-of-beds</th>
		<th>type-of-room</th>
		<th>need</th>
		</Tr>
		<?php 

$ro1 = mysqli_query($conn,"select * from `student-room-detail` where email='".$_SESSION['user']."'");
$ro1r = mysqli_num_rows($ro1);
$i=1;
while($row=mysqli_fetch_array($ro1))
{

echo "<Tr>";

echo "<td>".$row['no_of_beds']."</td>";
echo "<td>".$row['type_of_room']."</td>";
echo "<td>".$row['need']."</td>";


echo "</Tr>";
}

?>

</table>
<?php }?>