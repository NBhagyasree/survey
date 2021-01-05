<?php
$name="";
$email="";
$number="";
$branch ="";
$q1="";
$q2="";
$q3 ="";
$q4 ="";
$q5="";
$q6="";
$comment="";
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'userregistration';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);     
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $branch= mysqli_real_escape_string($conn, $_POST['branch']);
  $q1 = mysqli_real_escape_string($conn, $_POST['q1']);
  $q2= mysqli_real_escape_string($conn, $_POST['q2']);
  $q3 = mysqli_real_escape_string($conn, $_POST['q3']);
  $q4= mysqli_real_escape_string($conn, $_POST['q4']);
  $q5= mysqli_real_escape_string($conn, $_POST['q5']);
  $q6= mysqli_real_escape_string($conn, $_POST['q6']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);     
 $sql = "INSERT INTO answer(name,email,number,branch,q1,q2,q3,q4,q5,q6,comment) VALUES ('$name','$email','$number','$branch','$q1','$q2','$q3','$q4','$q5','$q6','$comment')";
$results = mysqli_query($conn, $sql);
      if($results){
         header('location:final.php');
      }else{
        echo "failed";
       }
    }
?>