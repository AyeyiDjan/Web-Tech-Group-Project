<?php

$db = mysqli_connect("localhost","root","","ashesi_office_hours");

// Check connection
   if ($db->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Unsuccessful connection";
}
   else
//Display results
   echo "Connected successfully". "<br>";
?>