<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
    header('location:login.php');
}
//total rooms
$r = "SELECT * FROM rooms ";
$runq = mysqli_query($conn,$r);

if($runq){
 
}
$count=0;
while($row=mysqli_fetch_assoc($runq))
{
  $count++;
}

//total students
$r1 = "SELECT * FROM user ";
$runq1 = mysqli_query($conn,$r1);

if($runq1){
 
}
$count1=0;
while($row=mysqli_fetch_assoc($runq1))
{
  $count1++;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HOSTEL MANAGEMENT SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <style>
    .card{
        background-color:#a3f7bf;
        border: 4px solid black;
      
    }
    .card-title{
        color:#4a47a3;
    }
    .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,220,2);
  transition: 0.7s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 7px 8px 16px 5px rgba(0,0,33,2);
}

</style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			
			
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Mange  Notification</a></li>
       <li><a href="index.php?page=add_notice"><span class="glyphicon glyphicon-envelope"></span>add_notice</a></>
       <li><a href="index.php?page=add_room"><span class="glyphicon glyphicon-envelope"></span> Create Room</a></li>
       <li><a href="index.php?page=manage_rooms"><span class="glyphicon glyphicon-envelope"></span> Mange Rooms</a></li>
       <li><a href="index.php?page=add_course"><span class="glyphicon glyphicon-envelope"></span> Add Course</a></li>
       <li><a href="index.php?page=manage_course"><span class="glyphicon glyphicon-envelope"></span> Mange Course</a></li>            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
          
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
      }

      if($page=="update_course")
			{
				include('update_course.php');
			
      }

      if($page=="add_course")
			{
				include('add_course.php');
			
      }
      if($page=="manage_course")
			{
				include('manage_course.php');
			
      }
      

      if($page=="edit_room")
			{
				include('edit_room.php');
			
			}

			if($page == "add_room"){
        include('add_room.php');
      }

      if($page == "manage_rooms"){
        include('manage_rooms.php');
      }
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  
		  
		
		  
		  <h1 class="page-header">Dashboard</h1>
		  
		
      <div class="row">
    
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
        <center><h4 class="card-title">STUDENTS</h4></center>
          <p class="card-text"></p>
          <center><a href="#" class="btn btn-primary"><span><i class="fas fa-calendar-alt"></i></span>&nbsp;<?php echo "$count1"; ?></a></center><br>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
          <center> <h4 class="card-title">Total_No_Of_Rooms</h4></center>
            <p class="card-text"></p>
           <center> <a href="#" class="btn btn-primary"><span><i class="fas fa-calendar-alt"></i></span>&nbsp;<?php echo "$count"; ?></a></center><br>
          </div>
        </div>
      </div>
      
  </div>
		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
