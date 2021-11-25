<?php
      ob_start();
      include "dbconnect.php"; // Using database connection file here
      ob_end_clean();
      $output='';
      $a=$_GET['subject'];
       $output= '<option value="">Select Teacher</option>';
       $sql="SELECT * FROM teachers WHERE courseID =  '$a' ";
        $records = mysqli_query($db,$sql); 
         while($data = mysqli_fetch_array($records)){
          $output.= '<option value='.$data['teacherID'].'>'.$data['Name'].'</option>';

        }

//echo $output;
?>
<label for="email-f18c" class="u-label u-label-2">Available Teacher</label>
<select id="teach" name="teach" class="u-grey-5 u-input u-input-rectangle u-input-2"  >

<?= $output ?>               
</select>