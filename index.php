<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$content = $_POST["content"];
 
	$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Error: " . mysqli_error($conn));
	
	// host name, db user name, db pwd default(null),db name

	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,content) VALUES ('" . $name. "', '" . $email. "','" . $content. "')");

	$insert_id = mysqli_insert_id($conn);
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
}
require_once "contact-view.php";
?>