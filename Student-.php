<?php
  ob_start();
  include "add_teacher.php";
  include "add_student.php";
  include "dbconnect.php"; // Using database connection file here without displaying its contents
  ob_end_clean();

  if(isset($_POST['Add'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $dob = $_POST['date'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $sid=$_POST['id'];
    $tid = $_POST['teach'];
    $cid = $_POST['subject'];
    $date=$_POST['date2'];
    $time=$_POST['time'];
    $comment=$_POST['comment'];
    $error1="";
    $error2="";
    $error3="";
   
     if(preg_match('/^[0-9]{8}/', $id) && preg_match('/(2019|2020|2021|2022|2023|2024|2025)$/', $id)  && preg_match('/@ashesi.edu.gh$/', $email)){
     
      $add=mysqli_query($db,"INSERT INTO `students` VALUES ('$id', '$name', '$phone', '$email', '$dob', '$class', '$gender') ");//add query
       $insert = mysqli_query($db,"INSERT INTO `bookings`(studentID, teacherID, courseID, bookingDate, bookingTime, additionalComments) VALUES ('$id','$tid', '$cid', '$date', '$time', '$comment')  ");
       if($add && $insert)
            {
            
                header("Location: index.html");
                exit();
            }
        else
            {
                $error1= "ID number already used<br>";
            }
                 
            }
            else{
              $error2="Invalid Ashesi ID<br>";
            }
             
         }
            
        
        
   
         mysqli_close($db); // Close connection
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <script src="jquery.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ENTER STUDENT DETAILS">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Student </title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Student-.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/ashesi_logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#0d244b">
    <meta property="og:title" content="Student">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-e950"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Home.html" data-page-id="1098673" class="u-image u-logo u-image-1" data-image-width="237" data-image-height="212" title="Home">
          <img src="images/ashesi_logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_ad20" data-image-width="810" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">ENTER STUDENT DETAILS</h2>
            <div class="u-expanded-width u-form u-form-1">

              <form  method="POST" >
                <div class="u-form-group u-form-partition-factor-2">
                  <label for="email-f18c" class="u-label u-label-1">Name</label>
                  <input type="text" placeholder="Enter full name"  name="name" class="u-grey-5 u-input u-input-rectangle u-input-1" required>
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2">
                  <label for="name-f18c" class="u-label u-label-2">ID number</label>
                  <input type="text" placeholder="Enter your ID number"  name="id" id="id" class="u-grey-5 u-input u-input-rectangle u-input-2" required >

                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                  <label for="phone-cbff" class="u-label u-label-3" wfd-invisible="true">Phone number</label>
                  <input type="text" placeholder="Enter your phone number"  name="phone" class="u-grey-5 u-input u-input-rectangle u-input-3" pattern="[0-9]{10}" required  oninvalid="this.setCustomValidity('Phone number should be 10 numbers')" oninput="this.setCustomValidity('')">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-4">
                  <label for="date-33f9" class="u-label u-label-4">Date of birth</label>
                  <input  type="text" placeholder="YYYY-MM-DD"  name="date" class="u-grey-5 u-input u-input-rectangle u-input-4" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" required oninvalid="this.setCustomValidity('Invalid date format')" oninput="this.setCustomValidity('')">
                </div>
                <div class="u-form-email u-form-group u-form-group-5">
                  <label for="text-4556" class="u-label u-label-5">Email</label>
                  <input type="email" placeholder="Enter ashesi email address"  name="email" class="u-grey-5 u-input u-input-rectangle u-input-5" type="email" required oninvalid="this.setCustomValidity('Invalid email format')" oninput="this.setCustomValidity('')">
                </div>
                <div class="u-form-group u-form-radiobutton u-form-group-6">
                   <label for="gender" class="u-label u-label-4">Please select your gender:</label>
                  <div class="u-form-radio-button-wrapper">
                    <select id="gender" name="gender" class="u-grey-5 u-input u-input-rectangle u-input-6" required="required">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  
                  </div>
                </div>
                <div class="u-form-group u-form-select u-form-group-7">
                  <label for="select-b8c4" class="u-label u-label-8">Class of</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-b8c4" name="class" class="u-grey-5 u-input u-input-rectangle u-input-6" required="required">
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                  </div>
                </div>
                 <div class="u-form-group u-form-select u-form-group-1">
                  <label for="select-211d" class="u-label u-label-1">Course Name</label>
                  <div class="u-form-select-wrapper" >
                    <select id="course" name="course" class="u-grey-5 u-input u-input-rectangle u-input-1" >
                      <option value="">Select course</option>
                      <option value="BA">Business Administration</option>
                      <option value="MIS">Management Information Systems</option>
                      <option value="CS">Computer Science</option>
                      <option value="ENG">Electrical engineering</option>
                      <option value="ENG">Mechanical Engineering</option>
                      <option value="ENG">Computer Engineering</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                  </div>
                </div>
                
                <div class="u-form-group" id="sub">
                <!-- <select id="subject" name="subject" class="u-grey-5 u-input u-input-rectangle u-input-2"  >
                <option>Select Subject</option> 
                
              </select>-->
              
                </div>
                <div class="u-form-group" id="teach">
                </div>
                <!-- <div class="u-form-group u-form-select u-form-group-3">
                  <label for="select-7b45" class="u-label u-label-3">Available teacher</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-7b45" name="teacher-1" class="u-grey-5 u-input u-input-rectangle u-input-3" required="required">
                      <option value="Teacher 1">Teacher 1</option>
                      <option value="Teacher 2">Teacher 2</option>
                      <option value="Teacher 3">Teacher 3</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                  </div>
                </div> -->
                <div class="u-form-date u-form-group u-form-group-4">
                  <label for="date-33f9" class="u-label u-label-4">Date</label>
                  <input type="text" id="date-33f9" name="date2" class="u-grey-5 u-input u-input-rectangle u-input-4" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" placeholder="YYYY-MM-DD" required="" oninvalid="this.setCustomValidity('Enter date in specified format')" oninput="this.setCustomValidity('')">
                </div>
                <div class="u-form-group u-form-select u-form-group-5">
                  <label for="select-b3fa" class="u-label u-label-5">Select time</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-b3fa" name="time" class="u-grey-5 u-input u-input-rectangle u-input-5" required="required">
                      <option value="9 am - 10 am">9 am - 10 am</option>
                      <option value="11 am - 12 pm">11 am - 12 pm</option>
                      <option value="1 pm - 2 pm">1 pm - 2 pm</option>
                      <option value="3 pm - 4 pm">3 pm - 4 pm</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                  </div>
                </div>
                <div class="u-form-group u-form-message u-form-group-6">
                  <label for="message-1015" class="u-label u-label-6">Additional informtion</label>
                  <textarea placeholder="Enter your message" rows="4" cols="50" id="message-1015" name="comment" class="u-grey-5 u-input u-input-rectangle u-input-6" ></textarea>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <input type="submit" name="Add" value="Make Reservation" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1" >
                  </div>
                    <div class="u-align-center u-form-group u-form-submit" style="color: darkred;">
                     
<?php
if(isset($_POST['Add'])){
$id = $_POST['id'];
$email = $_POST['email']; 
  if (!preg_match('/@ashesi.edu.gh$/', $email) ) {
    $error3= "Invalid ashesi email";
   }
   echo $error1;
   echo $error2;
   echo $error3;
      
     }  
   
?>
                  
                </div>
              </form>
             </div>
          </div>
        </div>
      </div>
    </section>
    



     <footer class="u-clearfix u-footer u-grey-80" id="sec-3f3a"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Ashesi University Group Project</p>
			  <p class="u-small-text u-text u-text-variant u-text-1">Web tech gurus</p>
          </div>
        </div>
      </div></footer>
   
  </body>
</html>
<script >
  $(document).ready(function(){


    $('#course').change(function(){
      var course_id=$(this).val();
      // alert(course_id);
      $.get("add_student.php?course="+course_id,function(data){
        console.log(data);
            //document.getElementById("sub").innerHTML="Hello World";
            $("#sub").html(data);
            //console.log($("#sub").html);
      });

      /*$.ajax({
        url:"add_student.php",
        method:"GET",
        data:{courseId:course_id},
        dataType:"text",
        success:function(data)
        {
          $('#subject').html(data);
        }
      });*/
    });
  });
 


    /*$('#subject').change(function(){
      var subject_id=$(this).val();
      //alert(subject_id);
      $.get("add_teacher.php?subject="+subject_id,function(data){
        console.log(data);
            //document.getElementById("sub").innerHTML="Hello World";
            $("#teach").html(data);
            //console.log($("#sub").html);
      });

      /*$.ajax({
        url:"add_student.php",
        method:"GET",
        data:{courseId:course_id},
        dataType:"text",
        success:function(data)
        {
          $('#subject').html(data);
        }
      });*/
    
 
</script>