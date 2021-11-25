 <?php
  ob_start();
  include "dbconnect.php"; // Using database connection file here without displaying its contents
  ob_end_clean(); 

  if(isset($_POST['delete'])){//Delete record from database when delete button is clicked
    $search = $_POST['del'];
    $del=mysqli_query($db,"DELETE FROM `bookings` WHERE `Booking_ID`='$search' ");//delete query
    if ($del) {
        header("location:viewbooking.php"); // redirects to form page
        exit;   

        } 
    else {
      echo "Error deleting record: " ;
    }
    }
     
    
mysqli_close($db); // Close connection
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Online University of
In-Demand Professions, ​Top ten most popular courses for international students, ​What Is a Life Coach?, ​Leader in Executive Education, ​Flexible Distance Learning, ​Need Help?">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
<link rel="stylesheet" href="form.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script><style>

/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@font-face {
  font-family: Montserrat-Regular;
  src: url('../fonts/montserrat/Montserrat-Regular.ttf'); 
}

@font-face {
  font-family: Montserrat-Medium;
  src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

body, html {
  height: 100%;
  font-family: sans-serif;
}

/* ------------------------------------ */
a {
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
  margin: 0px;
  list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
  outline: none;
  border: none;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent;
}

/* ------------------------------------ */
button {
  outline: none;
  border: none;
  background: transparent;
}

button:hover {
  cursor: pointer;
}

iframe {
  border: none;
}



/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #d1d1d1;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1300px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width: 100%;
  background-color: #fff;
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  width: 130px;
  padding-left: 25px;
}

.column100.column1 {
  width: 265px;
  padding-left: 42px;
}

.row100.head th {
  padding-top: 24px;
  padding-bottom: 20px;
}

.row100 td {
  padding-top: 18px;
  padding-bottom: 14px;
}


/*==================================================================
[ Ver1 ]*/
.table100.ver1 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver1 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #36304a;
}

.table100.ver1 .row100:hover {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-ver1 {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-head-ver1 {
  background-color: #484848;
}

.table100.ver1 .row100 td:hover {
  background-color: #6c7ae0;
  color: #fff;
}

/*==================================================================
[ Ver2 ]*/
.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}

/*==================================================================
[ Ver2 ]*/
.table100.ver2 tbody tr:nth-child(even) {
  background-color: #eaf8e6;
}

.table100.ver2 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #333333;
}

.table100.ver2 .row100:hover td {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-ver2 {
  background-color: #83d160;
  color: #fff;
}

.table100.ver2 .hov-column-head-ver2 {
  background-color: #484848;
}

.table100.ver2 .row100 td:hover {
  background-color: #57b846;
  color: #fff;
}

/*==================================================================
[ Ver3 ]*/
.table100.ver3 tbody tr {
  border-bottom: 1px solid #e5e5e5;
}

.table100.ver3 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver3 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #6c7ae0;
}

.table100.ver3 .row100:hover td {
  background-color: #fcebf5;
}

.table100.ver3 .hov-column-ver3 {
  background-color: #fcebf5;
}

.table100.ver3 .hov-column-head-ver3 {
  background-color: #7b88e3;
}

.table100.ver3 .row100 td:hover {
  background-color: #e03e9c;
  color: #fff;
}

/*==================================================================
[ Ver4 ]*/

.table100.ver4 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver4 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #fa4251;
}

.table100.ver4 .row100:hover td {
  color: #fa4251;
}

.table100.ver4 .hov-column-ver4 {
  background-color: #ffebed;
}

.table100.ver4 .hov-column-head-ver4 {
  background-color: #f95462;
}

.table100.ver4 .row100 td:hover {
  background-color: #ffebed;
  color: #fa4251;
}

/*==================================================================
[ Ver5 ]*/
.table100.ver5 tbody tr:nth-child(even) {
  background-color: #e9faff;
}

.table100.ver5 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
  position: relative;
}

.table100.ver5 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #002933;
}

.table100.ver5 .row100:hover td {
  color: #fe3e64;
}

.table100.ver5 .hov-column-ver5 {color: #fe3e64;}
.table100.ver5 .hov-column-ver5::before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border-left: 1px solid #f2f2f2;
  border-right: 1px solid #f2f2f2;
}

.table100.ver5 .hov-column-head-ver5 {
  background-color: #1a3f48;
  color: #fe3e64;
}

.table100.ver5 .row100 td:hover {
  color: #fe3e64;
}

.table100.ver5 .row100 td:hover:before {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  border: 1px solid #fe3e64;
}

/*==================================================================
[ Ver6 ]*/

.table100.ver6 {
  border-radius: 16px;
  overflow: hidden;
  background: #7918f2;
  background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
  background: linear-gradient(-68deg, #ac32e4 , #4801ff);
}

.table100.ver6 table {
  background-color: transparent;
}

.table100.ver6 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #fff;
  line-height: 1.4;
}

.table100.ver6 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: rgba(255,255,255,0.32);
}

.table100.ver6 .row100:hover td {
  background-color: rgba(255,255,255,0.1);
}

.table100.ver6 .hov-column-ver6 {
  background-color: rgba(255,255,255,0.1);
}


.table100.ver6 .row100 td:hover {
  background-color: rgba(255,255,255,0.2);
}</style>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/ashesi_logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#0d244b">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-e950"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.html" data-page-id="1098673" class="u-image u-logo u-image-1" data-image-width="237" data-image-height="212" title="Home">
          <img src="images/ashesi_logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
     <section  id="carousel_ad20" >
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">VIEW RESERVATIONS</h2>
            <div class="u-expanded-width u-form u-form-1">

              <form  method="POST" >
                <div class="u-form-group u-form-partition-factor-2">
                  <input type="text" placeholder="Enter ID number"  name="id" id="sid" class="u-grey-5 u-input u-input-rectangle u-input-1" required>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <input type="submit" name="res" value="View your reservations" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1" >
                </div>
              </form>
              
          </div>
          </div>
        </div>
      </div>
    </section>
        
        <div class="table100 ver5 m-b-110">
          <table data-vertable="ver5">
            <thead>
              <tr class="row100 head">
                <th class="column100 column1" data-column="column1">Teacher Name</th>
                <th class="column100 column2" data-column="column2">Course</th>
                <th class="column100 column3" data-column="column3">Booking Date</th>
                <th class="column100 column4" data-column="column4">Booking time</th>
                <th class="column100 column5" data-column="column5">Additional Comments</th>
                <th class="column100 column6" data-column="column6">Teacher Email</th>
                <th class="column100 column7" data-column="column7"></th>
                <th class="column100 column8" data-column="column8"></th>
              </tr>
            </thead>
      <?php
      ob_start();
      include "dbconnect.php"; // Using database connection file here
      ob_end_clean();
      if(isset($_POST['res'])){
        $search = $_POST['id'];
        $records = mysqli_query($db,"SELECT teachers.name, courses.courseName, bookings.bookingDate, bookings.bookingTime, bookings.additionalComments,bookings.Booking_ID, teachers.email, bookings.studentID FROM `bookings`  INNER JOIN teachers on bookings.teacherID = teachers.teacherID   INNER JOIN courses on bookings.courseID = courses.courseID WHERE (`studentID`='$search') "); // fetch data from database
        
        while($data = mysqli_fetch_array($records)){//While loop to print out data in a table form
  ?>
            
              <tbody>
              <tr class="row100">
                <td class="column100 column1" data-column="column1"><?php echo $data['name']; ?></td>
                <td class="column100 column2" data-column="column2"><?php echo $data['courseName']; ?></td>
                <td class="column100 column3" data-column="column3"><?php echo $data['bookingDate']; ?></td>
                <td class="column100 column4" data-column="column4"><?php echo $data['bookingTime']; ?></td>
                <td class="column100 column5" data-column="column5"><?php echo $data['additionalComments']; ?></td>
                <td class="column100 column6" data-column="column6"><?php echo $data['email']; ?></td>
                <td class="column100 column7" data-column="column7">
                  <form method="POST" action="update.php">
              <input type="submit" name="edit"  value="Edit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">
              <input type="hidden" name="tname"  value="<?php echo $data['name'];  ?>">
              <input type="hidden" name="cname"  value="<?php echo $data['courseName'];  ?>">
              <input type="hidden" name="bdate"  value="<?php echo $data['bookingDate'];  ?>">
              <input type="hidden" name="btime"  value="<?php echo $data['bookingTime'];  ?>">
              <input type="hidden" name="comm"  value="<?php echo $data['additionalComments'];  ?>">
              <input type="hidden" name="ema"  value="<?php echo $data['email'];  ?>">
              <input type="hidden" name="id"  value="<?php echo $data['Booking_ID'];  ?>">
            </form>


          
              
          
          </td>
                <td class="column100 column8" data-column="column8">
                  <form method="POST" >
            <input type="submit" name="delete"  value="Delete" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1" onclick="return confirm('Are you sure you want to delete reservation?')">
            <input type="hidden" name="del"  value="<?php echo $data['Booking_ID'];  ?>"></form>
            </td>            
              </tr>
             
          
             
  <?php
  }
  ?>
          
            
  <?php
}
  ?>
   
  
            </table>
   <?php
      ob_start();
      include "dbconnect.php"; // Using database connection file here
      ob_end_clean();
      if(isset($_POST['res'])){
        $search = $_POST['id'];
        $records = mysqli_query($db,"SELECT teachers.name, courses.courseName, bookings.bookingDate, bookings.bookingTime, bookings.additionalComments,bookings.Booking_ID, teachers.email, bookings.studentID FROM `bookings`  INNER JOIN teachers on bookings.teacherID = teachers.teacherID   INNER JOIN courses on bookings.courseID = courses.courseID WHERE (`studentID`='$search') "); // fetch data from database
        
      $data = mysqli_fetch_array($records);
  ?>
             
  <form method="POST" action="Booking.php"> 
      <div class="u-align-center u-form-group u-form-submit">
        <input type="hidden" name="sid"  value="<?php echo $data['studentID'];  ?>">
       <input type="submit" name="add"  value="Add new reservation" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1" >
     </div>
    </form> 


     <?php
  }
  ?>
          
            
  <?php

  ?>  

          </div>
        </div>

    
     <footer class="u-clearfix u-footer u-grey-80" id="sec-3f3a"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Ashesi University Group Project</p>
			  <p class="u-small-text u-text u-text-variant u-text-1">Web tech gurus</p>
          </div>
        </div>
      </div></footer>
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; color: rgb(255, 255, 255) !important;" class="u-back-to-top u-custom-color-1 u-icon u-icon-rounded u-opacity u-opacity-85 u-spacing-10" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98" data-color="rgb(255, 255, 255)"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  <!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  </body>


</html>
