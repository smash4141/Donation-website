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
			<form action="#" method="post"><t>
				<h2>NGO's Registration</h2>
					<h4><u>NGO's Information:</u></h4>
			    	        <label for="Name of head">Name of Head</label>
                    <input type="text" id="name" name="name" placeholder="Name of Head...." maxlength="20"  /required><br>
                    <label for="Name of NGO">Name of NGO</label>
  					        <input type="text" id="ngoname" name="ngoname" placeholder="Please Enter Name of NGO.." maxlength="20" /required><br>
                    <label for="Type of NGO">Type of NGO</label>
                    <select id = "type" name="type">
                            <option value="Type of Organization"selected>Type of Organization</option>
                            <option value="Age care">Age care</option>
                            <option value="Child Education">Child Education</option>
                            <option value="Disaster Management">Disaster Management</option>
                            <option value="Animal Welfare and Rights">Animal Welfare and Rights</option>
                            <option value="Tribal people">Tribal people</option>
                        
                    </select>
 				           	<br>
            <h4><u>Contact Information:</u></h4>
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
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['ngoname'])){$ngoname = $_POST['ngoname'];}
if(isset($_POST['type'])){$type = $_POST['type'];}
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
      $stmt = $conn->prepare("INSERT INTO nregister(name,ngoname,type,phone,addr,email,myinput)
            values(?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("sssisss", $name, $ngoname, $type, $phone, $addr, $email, $myinput);
            echo "Record saved";
            header('Location: waste/nlogin.php');
            $stmt->execute();
            $stmt->close();
            $conn->close();
}

  
 ?>