<?php
session_start();
 $conn= mysqli_connect("localhost","root","");
 $db= mysqli_select_db($conn,'waste');

 if(isset($_POST['email']))
 {
  $email=$_POST['email'];
  $myinput=$_POST['myinput'];
  $sql="select * from nregister where email='".$email."' AND myinput='".$myinput."'";
  $result= mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

  if($num ==1){
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['myinput'];
    $_SESSION['name']= $email_pass['name'];
    $_SESSION['ngoname']= $email_pass['ngoname'];
    $_SESSION['phone'] = $email_pass['phone'];
    $_SESSION['email'] = $email_pass['email'];
    $_SESSION['ngoid']= $email_pass['ngoid'];
    header('Location:ngo/index.php');
    echo "successfully logged in";
  }
  else{
    echo "invalid email or password";
  }
 }
?>
