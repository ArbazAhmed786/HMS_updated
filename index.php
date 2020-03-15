<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="carousel.css" rel="stylesheet" />

    <title>Home Page</title>

    <style>
      html,
      body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */
      }

      /* since the navbar is fixed we need to add some space to the body */
      body {
        padding-top: 56px;
      }

      .offcanvas-collapse {
        position: fixed;
        top: 56px; /* Height of navbar */
        bottom: 0;
        right: 100%;
        left: -300px;
        width: 300px;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: #343a40;
        transition-timing-function: ease-in-out;
        transition-duration: 0.3s;
        transition-property: left, visibility;
      }

      .offcanvas-collapse {
        align-items: start;
        /*   Adds a subtle drop shadow   */
        -moz-background-clip: padding; /* Firefox 3.6 */
        -webkit-background-clip: padding; /* Safari 4? Chrome 6? */
        background-clip: padding-box; /* Firefox 4, Safari 5, Opera 10, IE 9 */
        border-right: 5px solid rgba(0, 0, 0, 0.2);
      }

      /* Makes the nav visibile with the open class */
      .offcanvas-collapse.open {
        left: 0;
        visibility: visible;
      }

      .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, 0.75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .nav-underline .nav-link {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        font-size: 0.875rem;
        color: #6c757d;
      }

      .nav-underline .nav-link:hover {
        color: #007bff;
      }

      .nav-underline .active {
        font-weight: 500;
        color: #343a40;
      }

      .card{
        background-color:#05dfd7;
        border: 4px solid black;
        
    }
    .card-title{
        color:#4a47a3;
    }
    #c1{
        height:200px;
        width: 680px;
        margin-left: 20px;
        
    }
    #c2{
        height:200px;
        width: 666px;
        margin-left: 20px;
        margin-right: 50px;
        padding-left: 12px;
    }
    .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
  transition: 0.7s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 13px 15px 25px 10px rgba(0,0,0,2);
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(56, 52, 52);
   color: white;
   text-align: center;
}
    </style>
  </head>
  <body>
    <section class="bg-primary">
      <div class="container">
        <!--  START NAVBAR   -->
        <nav
          class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navbar-offcanvas"
        >
          <a class="navbar-brand mr-auto" href="#">Navigation Bar</a>

          <!-- If you want to show the button online on mobile use this toggle  -->

          <button
            class="navbar-toggler p-0 border-0"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--      This toggle button is always visible  -->
          <button class="navbar-toggler d-block" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="login.php"
                  >User login <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Registration.php"
                  >User Regsitration</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Admin </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">help</a>
              </li>
              <br />
              <!-- <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="https://example.com"
                    id="dropdown01"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Settings</a
                  >
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>-->
            </ul>
          </div>
        </nav>
        <!--  END NAVBAR   -->
      </div>
      <!--/.container    -->
    </section>
    <center><h1>HOSTEL MANAGEMENT SYSTEM</h1></center>
    <br /><br />
    <br /><br /><br /><br /><br />
    
    <!--CARDS-->

    <div class="row">
      <div class="col-sm-6">
        <div class="card" id="c1">
          <div class="card-body">
            <h5 class="card-title">ADMIN</h5>
            <p class="card-text">ADMIN LOGIN</p>
            <a href="admin/login.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" id="c2">
          <div class="card-body">
            <h5 class="card-title">STUDENT</h5>
            <p class="card-text">
             STUDENT LOGIN
            </p>
            <a href="login.php" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
    </div>



<!-- footer-->

<div class="footer">
    <p>&copy COPYRIGHT</p>
  </div>
  
  <!-- footer-->


    <script>
      $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");

        $('[data-toggle="offcanvas"], #navToggle').on("click", function() {
          $(".offcanvas-collapse").toggleClass("open");
        });

        // document ready
      });

      window.onload = function() {
        // executes when complete page is fully loaded, including all frames, objects and images
        console.log("window is loaded");

        // window load
      };
    </script>
  </body>
</html>
