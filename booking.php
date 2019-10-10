<!doctype html>

<html>
    


<head>
        

        <title>Booking</title>
        <!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
        <link rel="stylesheet" type="text/css" href="css/table/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/vue.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/table/PcSiteStyle.css">        
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
        <!-- <link rel="stylesheet" href="css/style-desktop.css" /> -->
      </head>

<body>
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

    <!--Start-->
    <div class="wapper">
        <div class="content">
            <div class="content-rg">
                <div class="wj-rg3">
                    <form method="post" id="myform" action="phpsrc/bookingManagement.php">
                        <h2 class="ky-h2">Choose the type of your car:</h2>
                        <div class="ky-style">
                            <div class="teacher5-top">
                                <select class="inputNum form-control" name='carType' id="carType">
                                  <?php
                                    $cars = $_SESSION['user']['cars'];
                                    foreach($cars as $car){
                                      echo "<option value='$car'> $car</option>";
                                    } 
                                  ?>
                                </select>
                            </div>
                        </div>
                        <h2 class="ky-h2">Choose the type of our service:</h2>
                        <div class="yysm">
                            <span style="margin-top: 18px;">
                                Instructions:
                            </span>
                            <p>
                                Select one out of a variety of options namely
                                </br>(i) wash outside only $15,
                                </br>(ii) wash inside and outside $25,
                                </br>(iii) deluxe wash $30 (which is inside and outside and the car is very dirty);

                            </p>
                        </div>
                        <div class="ky-style">
                            <div class="teacher5-top">
                                <select class="inputNum form-control" name='serviceOption' id="serviceOption">
                                    <option value='1' selected>wash outside only($15)</option>
                                    <option value='2'>wash inside and outside($25)</option>
                                    <option value='3'>deluxe wash($30) </option>
                                </select>
                            </div>
                        </div>
                        <h2 class="ky-h2">Some description:</h2>
                        <div class="ky-style">
                            <textarea class="form-control" name='serviceDesc' id="serviceDesc"
                                placeholder="give us some special instructions if needed"></textarea>
                        </div>
                        <h2 class="ky-h2">Please select the washing time</h2>
                        <div class="yysm">
                            <span style="margin-top: 18px;">
                                Instructions:
                            </span>
                            <p>
                                1. The time period displayed as open is a reservable time period.
                                <br> 2. Check a time slot for 40 minutes. You can only pick one time period. If you need
                                to change the time period, please uncheck the current time period first.
                                <br>3. Cancellation rule: you can cancel the reservation 2 hours before the car wash. If
                                it is less than 2 hours, it will be regarded as an emergency cancellation. Half of the
                                cost will be deducted for emergency cancellation.
                            </p>
                        </div>
                        <div class="table">
                        <table>
                <thead>
                  <tr>
                    <th colspan="2" width="140"></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                    <th class=timeTableDate></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="7" class="am"><strong>Morning</strong></td>
                  </tr>
                  <tr class="back">
                    <td><strong>08:00</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>08:40</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>09:20</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>10:00</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>10:40</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>11:20</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td rowspan="11" class="am"><strong>Afternoon</strong></td>
                  </tr>
                  <tr class="back">
                    <td><strong>12:00</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>12:40</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>13:20</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>14:00</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>14:40</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>15:20</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>16:00</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr>
                    <td><strong>16:40</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>
                  <tr class="back">
                    <td><strong>17:20</strong></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                    <td class="open"><span>OPEN</span></td>
                  </tr>

                </tbody>
              </table>
                        </div>
                        <input type="hidden" name="serviceTime" value="" id="timePeriod">
                        <!-- 这个地方存放时间 格式："2019-10-9 08:00" -->
                        <!-- <a href="javascript:;" class="yy-qr">Confirm Booking</a> -->
                        <h1 align='center'><button type='submit' class="btn btn-success btn-lg" name="confirm">Confirm Booking</button></h1>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

    function initialTimePeriod() {

    }
    $('.timeTableDate').ready(function () {
      var date = new Date();
      var day = date.getDay(); //通过日期对象获取数字形式的星期几
      var weeks = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

      var tdsCollection = document.getElementsByClassName("timeTableDate");
      //alert(tdsCollection.length);
      for (var i = 0; i < tdsCollection.length; i++) {
        temp = "<span>" + date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + "</span>" + "\n" + weeks[day];
        tdsCollection[i].innerHTML = temp;
        date.setDate(date.getDate() + 1);
        day = date.getDay();
      }

      var tdsCollection2 = document.getElementsByClassName("open");
      for (var i = 0; i < tdsCollection2.length; i++) {
        var blockDate = new Date();
        var time = $(tdsCollection2[i]).parent('tr').find('td').eq(0).find('strong').html();
        var index = $(tdsCollection2[i]).index();
        var date2 = $('.table').find('tr').find('th').eq(index).find('span').html();
        var selTime = date2 + ' ' + time;
        var temp1 = date2.split('-');
        // alert(parseInt(temp1[2]));
        blockDate.setFullYear(parseInt(temp1[0]));
        blockDate.setMonth(parseInt(temp1[1]) - 1);
        blockDate.setDate(parseInt(temp1[2]));
        var temp2 = time.split(':');
        blockDate.setHours(parseInt(temp2[0]));
        blockDate.setMinutes(parseInt(temp2[1]));
        var date = new Date();
        // alert(date);
        var gap = blockDate.getTime() - date.getTime();
        //  alert(gap/1000/60/60);
        if (gap < 2 * 60 * 60 * 1000) {
          tdsCollection2[i].innerHTML = "<span>CLOSE</span>";
          tdsCollection2[i].className = 'close';
        }
        // changeAvailable("2019-10-12 12:00");
        <?php
      require 'phpsrc/connectDB.php';
      date_default_timezone_set('Australia/Melbourne');
      $startOfTheWeek = date('Y-m-d');
      $endOfTheWeek = date('Y-m-d', strtotime('+1 week'));
      $sql = "select service_time from booking where service_time >= '$startOfTheWeek' and service_time < '$endOfTheWeek'";
      $result = mysqli_query($conn, $sql);
      while($row=mysqli_fetch_assoc($result)){
        $serviceTime = new DateTime($row['service_time']);
        $strTime = $serviceTime->format('Y-m-d H:i');
        ?>
          changeAvailable('<?php echo $strTime; ?>');
        <?php
      }
      
    ?>
        
      }

      //  tdsCollection[0].innerHTML ="ssss";
    })

    function changeAvailable(dateAndTime) {
      temp = dateAndTime.split(' ');
      var col, row;
      for (var i = 0; i < 7; i++) {
        var temp2 = $('.table').find('tr').find('th').eq(i).find('span').html();
        if (temp2 == temp[0]) {
          col = i;
        }
      }
      // alert(col);
      // var time = $(tdsCollection2[i]).parent('tr').find('td').eq(0).find('strong').html();
      for (var i = 1; i < 17; i++) {
        var temp2 = $('.table').find('tbody').find('tr').eq(i).find('td').eq(0).find('strong').html();
        // alert(temp[1]);
        if (temp2 == temp[1]) {
          // alert(temp[1]);
          row = i;
        }
      }
      // alert(row);
      // temp3=$('.table').find('tbody').find('tr').eq(row).find('td').eq(col);
      temp3 = $('.table').find('tr').eq(row + 1).find('td').eq(col);
      // temp3.innerHTML="sssssssssssssssssssssss";
      // temp4=temp3.parent('td');
      // alert(temp3.html());
      temp3.removeClass('open');
      temp3.addClass('close');
      temp3.html('BOOKED');
      // alert(temp4.html());
    }


    var myTime = new Array();
    $('.table .open').click(function () {


      // alert(this.innerHTML);
      if (this.className == "close") return;
      var time = $(this).parent('tr').find('td').eq(0).find('strong').html();
      var index = $(this).index();
      var date = $('.table').find('tr').find('th').eq(index).find('span').html();
      var selTime = date + ' ' + time;


      if ($(this).find('span').html() == 'OPEN') {
        if (myTime.length > 0) {
          alert("Please cancel the other time pried first.");
          return;
        }
        myTime.push(selTime);
        var ht = '<img src="images/choose.png" />'
        $(this).find('span').html(ht);


      } else {
        for (var i = 0; i < myTime.length; i++) {
          if (myTime[i] == selTime) {
            myTime.splice(i, 1);
          }
        }
        $(this).find('span').html('OPEN');

      }


      var json = myTime.join(',');
      // alert(json);
      $('#timePeriod').val(json);
    })

    $('.yy-qr').click(function () {
      /*var d = dialog({
          title: 'dialog',
          content: '预约成功！',
          cancel: false,
          okValue: '<div style="padding-left:15px;padding-right:15px">确认</div>',
          ok: function () {}
      });
      d.showModal();*/
      var carType = $("select[name='carType'] :selected").val();
      // alert(carType);
      var serviceType = $("select[name='serviceType'] option:selected").val();
      var timePeriod = $("input[name='timePeriod']").val();
      // alert(!timePeriod);
      if (!carType || !serviceType || !timePeriod) {
        // ispost = true;
        alert('Please fill all information.');
      } else {
        $("#myform").submit();
      }
      return false;
    })
  </script>
<style>
.footer{
  margin-top: 1000px;
  display: block;
  height: 300px;
}
</style>
  
    


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
</body>

</html>
