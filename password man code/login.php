<!DOCTYPE html>
<html lang="en" dir="ltr">
    <title>Login</title>
      <div class="navbar">
        <div class="ul">
          <div class="li">
            <div class="a">
              <div class="li a:hover">
      <nav>
        <a href="home.html"><h4 width;"50px" length":30px">Home</a>
        <a href="">SignUp</a>
        <a href="Contactus.html">Contact Us</h4></a>
      </nav>
    </div>
    </div>
  </div>
  </div>
  <style>
body {font-family: serif;}
form {
  border: 4px solid:black;
  height: 400px;
  background: linear-gradient(to top, #660033 0%, #ffffff 100%)

}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border:2px  solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#990066;
  color: #FF9966;
  padding: 12px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  visibility: visible;
}

.cancelbtn {
  width: auto;
  padding: 8px 16px;
  background-color:#CC0000;
}

.imgcontainer {
  text-align-last: center;
  margin: 16px 0 8px 0;
}

img.avatar {
  width: 40%
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.pass {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.pass{
     display: block;
     float: none;
  }
  .cancelbutton {
     width: 40%;
  }
}
</style>
</head>
<body>

<h2 style="background: linear-gradient(to bottom, #33ccff 0%, #ffff66 100%);font-style: italic;text-align: center">Log in to PassZip</h2>

<form  action="loi.php" method="post">
<!--<div class="imgcontainer">
  <img src="images/purpleballons.png" alt="purpleballons" width="50px" length="40px" class="avatar">
</div>-->

<div class="container">
  <label for="uname"><b>Email</b></label>
  <input type="text" placeholder="email" name="email" id="Email" required>
  <br>

  <label for="pass"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="Password" id="pass" required>

  <button type="submit">Login</button><br>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember details
  </label>
</div>

<div class="container" style="background-color:#660033>
  <button type="button" class="cancelbutton">Cancel</button>
  <span class="pass">Forgot <a href="#">password?</a></span>
</div>
</form>

</body>

</html>
