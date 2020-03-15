<?php

include('../includes/config.php');
include('../includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from rooms where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        header('location:index.php?page=manage_rooms');
        echo "<script>alert('Data Deleted');</script>";
        $stmt->close();	   
       
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Manage Rooms</title>
	<link rel="stylesheet" href="css2/font-awesome.min.css">
	<link rel="stylesheet" href="css2/bootstrap.min.css">
	<link rel="stylesheet" href="css2/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css2/bootstrap-social.css">
	<link rel="stylesheet" href="css2/bootstrap-select.css">
	<link rel="stylesheet" href="css2/fileinput.min.css">
	<link rel="stylesheet" href="css2/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css2/style.css">
</head>

<body>
	

	<div class="ts-main-content">
			
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Manage Rooms</h2>
						<div class="panel panel-default">
							<div class="panel-heading" style="background-color:#67676765;">All Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="table table-dark" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Seater</th>
											<th>Room No.</th>
											<th>Fees (PM) </th>

											<th>Posting Date  </th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from rooms";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->seater;?></td>
<td><?php echo $row->room_no;?></td>
<td><?php echo $row->fees;?></td>
<td><?php echo $row->posting_date;?></td>
<td><a href="index.php?page=edit_room&id=<?php echo $row->id;?>"><i class="fa fa-edit"></i>edit</a>&nbsp;&nbsp;
<a href="manage_rooms.php?del=<?php echo $row->id;?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i>delete</a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js2/jquery.min.js"></script>
	<script src="js2/bootstrap-select.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
	<script src="js2/jquery.dataTables.min.js"></script>
	<script src="js2/dataTables.bootstrap.min.js"></script>
	<script src="js2/Chart.min.js"></script>
	<script src="js2/fileinput.js"></script>
	<script src="js2/chartData.js"></script>
	<script src="js2/main.js"></script>

</body>

</html>
