<!DOCTYPE HTML>


<head>
    <title>Change Password</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vue.min.js"></script>
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
                <li class="current_page_item"><a href="changePassword.php">change password</a></li>
                <li><a href="changeOtherInformation.php">change other information</a></li>
                <li><a href="myCars.php">my cars</a></li>
                </li>
        </nav>
    </div>



    <div id="content" class="mobileUI-main-content">
        <div class="registerDiv">
            <img src="images/slide5.jpg" class="loginBackgroundImg" id="loginBackgroundImg" width="100%">
            <div align="center" class="registerTable" id="registerTable1">
                <form name="form1" method="post" action="phpsrc/userProfileUpdate.php" target="nm_iframe" onsubmit="return check.checkAll();">
                    <table align="center" class="registerTable" >
                        <tr>
                                <td align="center" colspan="2">
                                    <h2>Set New Password</h2>
                                </td>
                            </tr>
                    <tr>
                        <td class="registerTableLeftTD">Password:</td>
                        <td class="registerTableRightTD">
                          <input
                            class="form-control"
                            type="password"
                            name="password"
                            value=""
                            v-model="password"
                          />
                          <span v-bind:style="passwordColor"> {{ checkPassword() }}</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="registerTableLeftTD">Comfirm Password:</td>
                        <td class="registerTableRightTD">
                          <input
                            class="form-control"
                            type="password"
                            name="password2"
                            value=""
                            v-model="password2"
                          />
                          <span v-bind:style="password2Color"> {{ checkPassword2() }}</span>
                        </td>
                      </tr>
                      <tr>
                      <tr>
                          <td class="registerButtonTD" colspan="2">
                              <button class="btn btn-success" type="submit" id="emailButton" name="changePassword" style="width: 160px;">SUBMIT</button>
                          </br></br>
                          </td>
                      </tr>
                  </table>
                </form>
            </div>
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

<script>
    function checkTel(num) {
        regex = /^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/;
        if (regex.test(num))
            return true;
        else return false;
    }


    var check = new Vue({
        el: '#registerTable1',
        data: {
            email: '',
            emailColor: "color:red",
            emailBoolean: false,
            password: '',
            passwordColor: "color:red",
            passwordBoolean: false,
            password2: '',
            password2Color: "color:red",
            password2Boolean: false,
            phoneNum: '',
            firstName: '',
            lastName: '',
            carType: '',
            street: '',
            suburb: '',
            state: '',
            postCode: '',              
            email2: '',
            verifyCode:''
        },
        methods: {
              checkPassword: function() {
                  value = this.password;
                  if (!value) return "";
                  if (value.length < 8) {
                  this.passwordColor = "color:red";
                  this.passwordBoolean = false;
                  return "length shoud be no less than 8";
                  } else {
                  this.passwordColor = "color:green";
                  this.passwordBoolean = true;
                  //   return "correct password format";
                  return "";
                  }
              },
              checkPassword2: function() {
                  value = this.password2;
                  if (!value) return "";
                  if (!(value == this.password)) {
                  this.password2Color = "color:red";
                  this.password2Boolean = false;
                  return "inconsist with the first password";
                  } else {
                  this.password2Color = "color:green";
                  this.password2Boolean = true;
                  //   return "correct";
                  return "";
                  }
              },

              checkAll: function() {
                  if (
                  !this.password ||
                  !this.password2
                  ) {
                  alert("Please fill all information.");
                  return false;
                  }
                  if (
                  this.passwordBoolean &&
                  this.password2Boolean 
                  ) {
                  return true;
                  } else {
                  alert("Invalid imformation.");
                  return false;
                  }
              }
          }
          
    })
</script>