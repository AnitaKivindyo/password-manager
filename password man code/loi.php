<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "password manager");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$Email = $mysqli->real_escape_string($_REQUEST['Email']);
$Password = $mysqli->real_escape_string($_REQUEST['Password']);

// attempt insert query execution
$sql = "INSERT INTO details (Email,Password) VALUES ('$Email','$Password')";

if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
