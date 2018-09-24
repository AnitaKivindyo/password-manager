<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

{
$mysqli = new mysqli("localhost", "root", "", "password manager");


// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

// Escape user inputs for security
$Email = $mysqli->real_escape_string($_REQUEST['email']);
$Prime_password = $mysqli->real_escape_string($_REQUEST['last_name']);
$Confirm_password = $mysqli->real_escape_string($_REQUEST['email']);
$Reminderr = $mysqli->real_escape_string($_REQUEST['password']);
$gender = $mysqli->real_escape_string($_REQUEST['gender']);

// attempt insert query execution
$sql = "INSERT INTO details (email, prime password, confirm ,Reminder,gender) VALUES ('$Email', '$Prime_password', '$Confirm_password','$gender',)";
if($mysqli->query($sql) === true){
         header("location: signup.php");
}

else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 


// Close connection
$mysqli->close();

}
?>
