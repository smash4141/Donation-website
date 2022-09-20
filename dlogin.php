<?php error_reporting(0);?>
<?php include('head.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title></title>
</head>
<body>
	<div class="Login"> 
		<h2>Donor's Login</h2>
			<form action= "dlogin2.php" method="post"><t>
 					<label for="email">Email</label>
  					<input type="email" id="email" name="email" id="email" placeholder="Your Email id.."><br>
  				Password: <input type="password"  id="myinput" name="myinput" placeholder="Please Enter Password.."   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" maxlength="20" /required><br><br>
          <style type="text/css">
              input[type=password], select {
              width:100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }    
             input[type=text], select {
              width:100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }  
          </style>
          <input type="checkbox" onclick="myFunction()">Show Password<br>
					<input type="submit" name="submit" value="Submit" onclick="myalert()"><br>
    			
    				<br>
   					<a href="dregister.php">Signup</a>
 			 </form>
	</div>
</body>
</html>
<?php include('footer.php'); ?>
<script type="text/javascript">
   function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks!for Logging in"); 
            }
</script>
