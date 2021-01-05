<?php
  session_start();
 $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'userregistration');
  $name=$_POST['user'];
  $pass=$_POST['password'];
   $s="select * from usertable where name='$name'";
   $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
  if($num==1){
    echo '<script>alert("username already taken,try by logging in")</script>';
    header('location:login.html');
    }else{
      $reg="insert into usertable(user,password) values('$name','$pass')";
      mysqli_query($con,$reg);
      echo "registration successfull";
      header('location:survey.html');
  }
