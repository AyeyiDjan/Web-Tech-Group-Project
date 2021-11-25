<?php
      ob_start();
      include "dbconnect.php"; // Using database connection file here
      ob_end_clean();
      $output='';
      $a=$_GET['course'];
       $output= '<option value="">Select Subject</option>';
       $sql="SELECT * FROM courses WHERE courseID Like  '%$a%' ";
        $records = mysqli_query($db,$sql); 
         while($data = mysqli_fetch_array($records)){
          $output.= '<option value='.$data['courseID'].'>'.$data['courseName'].'</option>';

        }

//echo $output;
?>
<label for="email-f18c" class="u-label u-label-2">Subject Name</label>
<select id="subject" name="subject" class="u-grey-5 u-input u-input-rectangle u-input-2"  >

<?= $output ?>               
</select>
<script >
$('#subject').change(function(){
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
    });
</script> 