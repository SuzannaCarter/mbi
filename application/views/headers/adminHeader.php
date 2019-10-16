<!DOCTYPE html>
<html lang="en">
    <head>
      <title>MBI Accounting</title>

      <!--Required Tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
      <!-- Optional JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
      <!--Inline Javscript-->
      <script>
          /* Set the width of the side navigation to 250px */
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          /* Set the width of the side navigation to 0 */
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
        
          /* Set background to fill screen */
          $(document).ready(function(){
            $('.header').height($(window).height());
          })
        </script>

        <!--Inline CSS-->
     <style>
        .navbar {background-color: #00182E;}
        .welcome {color: white;}
        .img-link{border-image: 20%;}

        /* The side navigation menu */
        .sidenav {
            height: 100%; /* 100% Full-height */
            width: 0; /* 0 width - change this with JavaScript */
            position: fixed; /* Stay in place */
            z-index: auto; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #00182E; /* Black*/
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px; /* Place content 60px from the top */
            transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
          }
          
          /* The navigation menu links */
          .sidenav a {
            padding: 5px 5px 5px 5px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
          }
          
          /* When you mouse over the navigation links, change their color */
          .sidenav a:hover {
            color: grey;
          }
          
          /* Position and style the close button (top right corner) */
          .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
          }
      </style>
    </head>
    <body>
      <nav class="navbar navbar-xpand-md">
          <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a class="nav-link" href="#"><img src="images/profileicon.png" alt="" width="50" height="50">Profile</a> <!--Need profile page link-->
              <a class="nav-link" href="<?php echo site_url('accountant/AccountantUserController/');?>">Users</a>
              <a class="nav-link" href="<?php echo site_url('accountant/AccountantCOAController/');?>">Accounts</a>
              <a class="nav-link" href="<?php echo site_url('accountant/AccountantJournalController/');?>">Ledger</a>
              <br>
              <br>
              <br>
              <li><a href="#">Hello, <?php echo $_SESSION["username"]; ?></a></li>
              <a class="nav-link" href="<?php echo site_url('Login/logout');?>" style="font-size:15px;">Logout</a>
            </div>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span onclick="openNav()">
                    <span class="navbar-toggler-icon"></span></span>
              </button>
              <div class="welcome">
                  <h1>
                    Welcome <label for="firstname"></label> <!-- Username Goes Here -->
                  </h1>
                </div>
              </div>
            <a class="navbar-brand" href="<?php echo site_url('accountant/Accountant/');?>">
                <img src="images/MBILogo2.png" alt="" width=50 height=50>
            </a>
        </nav>
        <br>
  </body>
</html>
