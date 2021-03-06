<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #c0c0c0;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form method="post">
  <div class="container">
    <h1>Add site</h1>
    <p>Please fill in this form to add sites.</p>
    <hr>

    <label for="url"><b>url</b></label>
    <input type="text" placeholder="Add url" name="url" required>

   <p><label for="name"><b>Name</b></label></p>
    <input type="name" placeholder="Enter name of library" name="name" required><hr>

  <p><label for="username"><b>Enter user name</b></label></p>
    <input type="username" placeholder="Enter username" name="username" required><hr>

    <label for="password"><b>password</b></label>
    <input type="text" placeholder="Enter password" name="password" required>

    <hr>
    <input type="checkbox" name="terms" value="terms">Agree to the Terms & Privacy<br>
    <br>
    <input type="submit" name="save" class="add site">
  </div>

  <!--<div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>-->
</form>

</body>
</html>
