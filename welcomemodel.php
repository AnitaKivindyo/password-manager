<?php
class welcomemodel extends CI_Model
{
	function signup($name,$email,$password)
	{
	$query="INSERT INTO details(`Name`, `Email`, `Prime_password`) VALUES ('$name','$email','$password')";
	$this->db->query($query);
	}
	function addsite($url,$name,$username,$password)
	{
		$query="INSERT INTO `library`(`url`, `name`, `username`, `password`) VALUES ('$url','$name','$username','$password')";
		$this->db->query($query);
	}
}
?>
