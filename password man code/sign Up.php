<!Doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
</head>

<body style="background-color:#990099;">
	<h2 class="header">SignUp</h2>

<table border="0" align="center">
	<tr>
	<td>
	<nav>
		<a href="Home.html" style="background-color: aquamarine; text-align:center; font:  Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';font-size: 18px" a>Back to login</a>
	</nav>
	</td>
	</tr>
	</table>
<form action="insert.php" method="post"  style="text-align: center;background: linear-gradient(to top, #ccff99 0%, #ff33cc 100%);">
		<fieldset>

      <p>
        <label for="Email"><strong>Email:</strong></label>
       <input type = "text" name= "email" id="Email"><br/><br/>
       </p>

        <p>
          <label for="Password"><strong> Prime Password:</strong></label>
          <input type="password" name="password" id="Prime_password"><br/><br/>
        </p>

        <p>
        <label for="retype"><strong>Confirm Password:</strong></label>
         <input type = "password"  name = "rtpassword" id="Confirm_password"><br/><br/>
  		</p>

			<p>
        <label for="Reminder"><strong>Reminder:</strong></label>
       <input type = "text" name= "Reminder" id="Reminder"><br/><br/>
       </p>
             <br>

       <p>
       	<label for="Gender"><strong>Gender:</strong><br></label>
        <input type="radio" name="gender" id="Gender" value="Male"> Male<br>
        <input type="radio" name="gender" id="Gender" value="Female"> Female<br>
             <br>
              </p>



<input type="checkbox" name="unit" value="sys ana"> Get updates on offers and news by subscribing to our Newsletter.<br>
<input type="checkbox" name="unit" value="sys arc"> Agree to Terms and Conditions. <br><br>



		<input type="submit" value ="Submit">
		<input type="submit" value = "Reset">
	</fieldset>
	</form>
</body>
</html>
