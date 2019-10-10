<!DOCTYPE HTML>
<html>

<head>
  <title>Change other information</title>
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
        <li><a href="changePassword.php">change password</a></li>
        <li class="current_page_item"><a href="changeOtherInformation.php">change other information</a></li>
        <li><a href="myCars.php">my cars</a></li>
      </ul>
    </nav>
  </div>



  <div id="content" class="mobileUI-main-content">
    <div class="registerDiv">
      <img src="images/slide5.jpg" class="loginBackgroundImg" id="loginBackgroundImg" width="100%">
      <form method="post" action="phpsrc/userProfileUpdate.php">
      <div align="center" class="registerTable" id="registerTable1">
        <table align="center" class="registerTable">
          <tbody>
            <tr>
              <td align="center" colspan="2">
                <h2>Change Phone Number</h2>
              </td>
            </tr>
            <tr>
              <td class="registerTableLeftTD">Phone Number:</td>
              <td class="registerTableRightTD">
                <input class="form-control" type="text" name="phoneNumber" value="<?php echo $_SESSION['user']['phoneNumber']; ?>" v-model="phoneNum" />
                <span style="color:red"> {{ checkPhone() }}</span>
              </td>
            </tr>
            <tr>
              <td class="registerButtonTD" colspan="2">
                <!-- <a href="#nowhere"
                                              ><button onclick="showNextTable(1)">next</button></a
                                            > -->
                <button type="submit" class="btn btn-success" name="updatePhone">
                  UPDATE
                </button>
                </br></br>
                <!-- <input type="submit" name="register" value="REGISTER NEW ACCOUNT" /> -->
              </td>
            </tr>

            <tr>
              <td align="center" colspan="2">
                <h2>Change Address</h2>
              </td>
            </tr>
            <tr>
              <td class="registerTableLeftTD">Street:</td>
              <td class="registerTableRightTD">
                <input type="text" name="street" value="" v-model="street" />
              </td>
            </tr>
            <tr>
              <td class="registerTableLeftTD">Suburb:</td>
              <td class="registerTableRightTD">
                <input type="text" name="suburb" value="" v-model="suburb" />
              </td>
            </tr>
            <tr>
              <td class="registerTableLeftTD">PostCode:</td>
              <td class="registerTableRightTD">
                <input type="text" name="postCode" value="" v-model="postCode" />
                <span style="color:red"> {{ checkPostCode() }}</span>
              </td>
            </tr>

            <tr>
              <td class="registerButtonTD" colspan="2">
                <!-- <a href="#nowhere"
                                              ><button onclick="showNextTable(1)">next</button></a
                                            > -->
                <button type="submit" class="btn btn-success" name="updateAddress">
                  UPDATE
                </button>
                </br></br>
                <!-- <input type="submit" name="register" value="REGISTER NEW ACCOUNT" /> -->
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

      <div class="col-md-3">
        <div class="footer-grid site-map">
          <h5>Site Map</h5>

          <ul>
            <li><a href="index.php"><span> </span>Home</a>
            </li>
            <li><a href="about.php"><span> </span>About</a>
            </li>
            <li><a href="services.php"><span> </span>Services</a>
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
    if (regex.test(num)) return true;
    else return false;
  }
  function checkPos(num) {
    regex = /^\d{4}$/;
    if (regex.test(num)) return true;
    else return false;
  }

  var check = new Vue({
    el: "#registerTable1",
    data: {
      email: "",
      emailColor: "color:red",
      emailBoolean: false,
      password: "",
      passwordColor: "color:red",
      passwordBoolean: false,
      password2: "",
      password2Color: "color:red",
      password2Boolean: false,
      phoneNum: "",
      firstName: "",
      lastName: "",
      carType: "",
      street: "",
      suburb: "",
      state: "",
      postCode: ""
    },
    methods: {
      checkEmail: function () {
        value = this.email;
        if (!value) return ""; //如果为空，则返回空字符串
        var myReg = /^[a-zA-Z0-9_-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/;
        if (myReg.test(value)) {
          this.emailColor = "color:green";
          this.emailBoolean = true;
          //   return "correct email format";
          return "";
        } else {
          this.emailColor = "color:red";
          this.emailBoolean = false;
          return "incorrect email format";
        }
      },
      checkPassword: function () {
        value = this.password;
        if (!value) return "";
        if (value.length < 8) {
          this.passwordColor = "color:red";
          this.passwordBoolean = false;
          return "length should be no less than 8";
        } else {
          this.passwordColor = "color:green";
          this.passwordBoolean = true;
          //   return "correct password format";
          return "";
        }
      },
      checkPassword2: function () {
        value = this.password2;
        if (!value) return "";
        if (!(value == this.password)) {
          this.password2Color = "color:red";
          this.password2Boolean = false;
          return "inconsistent with the first password";
        } else {
          this.password2Color = "color:green";
          this.password2Boolean = true;
          //   return "correct";
          return "";
        }
      },
      checkPhone: function () {
        value = this.phoneNum;
        if (!value) return "";
        //alert(checkTel(value));
        if (!checkTel(value)) {

          return "invalid phone number";
        }
        return "";
      },
      checkPostCode: function () {
        value = this.postCode;
        if (!value) return "";
        //alert(checkTel(value));
        if (!checkPos(value)) {
          return "invalid postcode";
        }
        return "";
      },
      checkAll: function () {
        if (
          !this.phoneNum ||
          !this.firstName ||
          !this.lastName ||
          !this.street ||
          !this.suburb ||
          !this.postCode
        ) {
          alert("Please fill all information.");
          return false;
        }
        if (
          checkTel(this.phoneNum) &&
          checkPos(this.postCode)
        ) {
          return true;
        } else {
          alert("Invalid information.");
          return false;
        }
      }
    }
  });
</script>

</html>