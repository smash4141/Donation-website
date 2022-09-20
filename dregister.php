<?php 
error_reporting(0);
 ?>
<?php include('head.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/Register.css">
	<title>Register</title>
</head>
<body>
	<div class="Register"> 
			<form  action="#" method="post"><t>
				<h2>Donor Registration</h2>
					<h4><u>Personal Information:</u></h4>
			    	<label for="First Name">First Name</label>
  					<input type="text" id="fname" name="fname" placeholder="Please Enter First Name.." maxlength="10" /required><br>
  					<label for="Middle Name">Middle Name</label>
  					<input type="text" id="mname" name="mname" placeholder="Please Enter Middle Name.." maxlength="10" /required><br>
 					<label for="Last Name">Last Name</label>
  					<input type="text" id="lname" name="lname" placeholder="Please Enter Last Name.." maxlength="10" /required><br>
 					<label for="gender">Select the gender</label>
 					<select name="gender" id="gender">
 						<option value="None"selected>Gender</option>
 						<option value="male">Male</option>
 						<option value="female">Female</option>
 						<option value="others">Others</option>
 					</select>
 					<br>
 					<label for="Age">Age</label>
  					<input type="number" id="age" name="age" placeholder="Please Enter Age.." maxlength="2" min="18" max="99" /required><br>
 					<br><h4><u>Contact Information:</u></h4>
  					<label for="Phone">Phone Number</label>
  					<input type="number" id="phone" name="phone" placeholder="Please Enter Phone No.." min="0000000000" max="9999999999"/required><br>
  					<label for="Address">Address</label>
  					<input type="text" id="addr" name="addr" placeholder="Please Enter Address.."  maxlength="100" /required><br>
 					<label for="email">Email</label>
  					<input type="email" id="email" name="email" placeholder="Please Enter Email id.."  maxlength="20" /required><br>
  					Password: <input type="password"  id="myinput" name="myinput" placeholder="Please Enter Password.."   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="20" /required><br><br>
					<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script><br>
     				

					<input type="submit" value="Submit" onclick="myalert()"><br>
 			 </form>
	</div>
</body>
</html>

<?php include('footer.php'); ?>
<script type="text/javascript">
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks!for registration"); 
            }
</script>
<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}
if(isset($_POST['age'])){$age = $_POST['age'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['myinput'])){$myinput = $_POST['myinput'];}



$conn = new mysqli('localhost','root','','waste') ;
if($conn->connect_error){
      die('connection failed :' .$conn->connect_error);
}
else
{
      $stmt = $conn->prepare("INSERT INTO dregister(fname,mname,lname,gender,age,phone,addr,email,myinput)
            values(?,?,?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("ssssiisss", $fname, $mname, $lname, $gender, $age, $phone, $addr, $email, $myinput);
			echo "Record saved";
            header('Location: waste/dlogin.php');
            $stmt->execute();
            $stmt->close();
            $conn->close();
}

 ?>
