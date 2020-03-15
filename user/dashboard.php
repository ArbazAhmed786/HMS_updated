<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

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
  box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
  transition: 0.7s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,2);
}

</style>
</head>
<body>

<div class="row">
    
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
        <center><h1 class="card-title">MY PROFILE</h1></center>
          <p class="card-text"></p>
          <center><a href="index.php?page=update_profile" class="btn btn-success"><span><i class="fas fa-calendar-alt"></i></span>&nbsp;Profile</a></center><br>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
          <center> <h1 class="card-title">MY ROOM</h1></center>
            <p class="card-text"></p>
           <center> <a href="index.php?page=room-details" class="btn btn-success"><span><i class="fas fa-calendar-alt"></i></span>&nbsp;Rooms</a></center><br>
          </div>
        </div>
      </div>
      
  </div>

    
</body>
</html>

