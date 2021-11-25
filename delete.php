<?php
  ob_start();
  include "dbconnect.php"; // Using database connection file here without displaying its contents
  ob_end_clean();

  if(isset($_POST['yes'])){//Delete record from database when delete button is clicked
    $search = $_POST['del'];
    $del=mysqli_query($db,"DELETE FROM `bookings` WHERE `Booking_ID`='$search' ");//delete query
    if ($del) {
        header("location:viewbooking.php"); // redirects to form page
        exit;   

        } 
    else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
    }
     
    
mysqli_close($db); // Close connection
?>