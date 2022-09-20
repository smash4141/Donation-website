<?php
session_start();
 $conn= mysqli_connect("localhost","root","");
 $db= mysqli_select_db($conn,'waste');

 if(isset($_POST['email']))
 {
 	$email=$_POST['email'];
 	$myinput=$_POST['myinput'];
 	$sql="select * from dregister where email='".$email."' AND myinput='".$myinput."'";
 	$result= mysqli_query($conn,$sql);

  $num = mysqli_num_rows($result);

 	if($num ==1){
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['myinput'];
    $_SESSION['fname']= $email_pass['fname'];
    $_SESSION['lname']= $email_pass['lname'];
    $_SESSION['gender'] = $email_pass['gender'];
    $_SESSION['phone'] = $email_pass['phone'];
    $_SESSION['addr'] = $email_pass['addr'];
    $_SESSION['email'] = $email_pass['email'];
       
 		header('Location: donor/index.php');
 		echo "successfully logged in";
 	}
 	else{
 		echo "invalid email or password";
 	}
 }
?>

