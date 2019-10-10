<!DOCTYPE HTML>
<html>

<head>
  <title>Carwash Website Template | About :: w3layouts</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/style-new.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script
    type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800|Comfortaa:700'
    rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Comfortaa:700,300,400' rel='stylesheet' type='text/css'>
  <!-- webfonts -->

  <link rel="stylesheet" href="css/style-desktop.css" />
</head>

<style>
  li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color:  #f2f2f2;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
  z-index: 999;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>



<!-- container -->
<!-- header -->
<div class="header">
  <div class="container">
    <!-- logo -->
    <div class="logo">
      <a href="index.html"><img src="images/logo.png" title="carwash" /></a>
    </div>
    <!-- /logo -->
    <!-- top-nav -->
    <div class="top-nav">
      <span class="menu"> </span>
      <ul>
      <li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Services</a></li>
						<?php
								// if the user is not logged in, show login/register
								session_start();
								error_reporting( error_reporting() & ~E_NOTICE );
								if($_SESSION["user"]==null){
									header("Location: http://localhost/spm_project/index.php");
								} else{
									// if the user has logged in show name and dropdown menu
									?>
										<li class="dropdown active"><a href="#" class="dropbtn">Welcome, <?php echo $_SESSION["user"]['fname'] ?></a>
										<div class="dropdown-content">
										<a href="myAccount.php">Profiles</a>
      									<a href="myBooking.php">Booking</a>
      									<a href="phpsrc/userLogOut.php">Log Out</a>
										</div>
										</li>
									<?php
								}
							 ?>
        <!-- <li><a href="contact.html">Contact</a></li> -->
        <div class="clearfix"> </div>
      </ul>
    </div>
    <!-- script-for-nav -->
    <script>
      $(document).ready(function () {
        $("span.menu").click(function () {
          $(".top-nav ul").slideToggle(1000);
        });
      });
    </script>
    <!-- script-for-nav -->
    <!-- /top-nav -->
    <div class="clearfix"> </div>
  </div>
  <!-- /header -->
</div>


<div id="middle-div">
  <div id="sidebar">
    <!-- <link rel="stylesheet" href="css/5grid/core.css" />
        <link rel="stylesheet" href="css/5grid/core-desktop.css" />
        <link rel="stylesheet" href="css/5grid/core-1200px.css" />
        <link rel="stylesheet" href="css/5grid/core-noscript.css" /> -->
    <!-- <link rel="stylesheet" href="css/style-1200px.css" /> -->

    <!-- Nav -->
    <nav id="nav" class="mobileUI-site-nav">
      <ul>
        <li><a href="myAccount.php">my account</a></li>
        <li><a href="changePassword.php">change password</a></li>
        <li><a href="changeOtherInformation.php">change other information</a></li>
        <li class="current_page_item"><a href="myCars.php">my cars</a></li>
      </ul>
    </nav>
  </div>

  <style>
    .registerTable {
      border-collapse: collapse;
      table-layout: fixed;
    }

    tr.odd {
      background-color: #f8f8f8;
    }

    tr.head {
      border-bottom-width: 4px;
      border-bottom-color: lightgray;
      border-bottom-style: solid;
      font-weight: bold;
    }

    tr {

      height: 35px;
    }

    td {
      /* width:25%; */
      border-style: solid;
      border-width: 1px;
      border-color: lightgray;
      text-align: center !important;
    }

    td.registerTableLeftTD {
      width: 250px !important;
    }

    td.registerTableRightTD {
      width: 250px !important;
    }
    td.deleteTD {
      width: 100px !important;
    }
  </style>

  <div id="content" class="mobileUI-main-content">
    <div class="registerDiv">
      <img src="images/slide5.jpg" class="loginBackgroundImg" id="loginBackgroundImg" width="100%">
      <form method="POST" action="phpsrc/carManagement.php">
      <div align="center" class="registerTable" id="registerTable1">
        <table align="center" class="registerTable" id="registerTable1">
          <tbody>
            <tr class="head">
              <td class="registerTableRightTD" > 
                Car type
              </td>
              <td class="deleteTD" >
              </td>
            </tr>
            <?php 
              $cars = $_SESSION['user']['cars'];
              foreach($cars as $key => $car){
                echo "<tr>";
                echo "<td class='registerTableRightTD'>$car</td>";
                echo "<td class='deleteTD'><button type='submit' class='btn btn-success' name='delete$key'>DELETE</button>";
                echo "</tr>";
              }
            ?>
              <td class="registerTableRightTD">
                  <select
                  class="form-control"
                  type="radio"
                  name="carType"
                  style="width: 250px;"
                  value=""
                >                  
                  <option value="Hatchback">Hatchback</option>
                  <option value="Sedan" selected="selected">Sedan</option>                  
                  <option value="SUV">Suv</option>
                </select>

              </td>
              <td class="deleteTD">
                  <button type="submit" class="btn btn-success" name="add">ADD</button>
                </td>
            </tr>


          </tbody>
        </table>

      </div>
            </form>
    </div>

  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="footer-grids">
      <div class="col-md-3">
        <div class="footer-grid">
          <h5>About US</h5>

          <p>We are a professional and efficient car wash team.</p>
          <p>Welcome to book our service online.</p>
        </div>
      </div>
      <div class="col-md-3" style="display: none;">
        <div class="footer-grid f-blog">
          <h5>Form the Blog</h5>

          <div class="f-blog-artical">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <span>March 20,2014</span>

          </div>
          <div class="f-blog-artical f-blog-artical1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <span>March 20,2014</span>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-grid site-map">
          <h5>Site Map</h5>

          <ul>
            <li><a href="index.html"><span> </span>Home</a>
            </li>
            <li><a href="about.html"><span> </span>About</a>
            </li>
            <li><a href="services.html"><span> </span>Services</a>
            </li>
            <li><a href="#"><span> </span>Booking</a>
            </li>
            <!-- <li><a href="contact.html"><span> </span>Contact</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-grid f-gallery">
          <h5>Gallery</h5>

          <div class="f-gallery-grids">
            <div class="f-gallery-grid">
              <ul>
                <li>
                  <a href="#">
                    <img src="images/people-pic.jpg" title="name" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/people-pic1.jpg" title="name" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/people-pic4.jpg" title="name" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/people-pic3.jpg" title="name" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/people-pic4.jpg" title="name" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="images/people-pic1.jpg" title="name" />
                  </a>
                </li>
                <div class="clearfix">
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

</html>