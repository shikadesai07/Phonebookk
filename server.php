<?php
session_start();
$username = "";
$name="";
$email="";
$address="";
$contact="";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'phone');
//loginform
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
    $query = "INSERT INTO details (username, password)
  			  VALUES('$username',  '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: contact.php');
  	}else
    {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
//contactentry


$query="SELECT * FROM contact";
$result= mysqli_query($db,$query);


if (isset($_POST['submit'])){
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  if (empty($name)) {
    array_push($errors, "Name is required");
  }
  if (empty($contact)) {
    array_push($errors, "Contact Number is required");
  }
  if (empty($address)) {
    array_push($errors, "Address is required");
  }
  if (empty($email)) {
    array_push($errors, " Email is required");
  }
  if (count($errors) == 0) {
  $username = $_SESSION['username'];
	$query = "SELECT * FROM details WHERE username='$username'";
  	$results=mysqli_query($db, $query);
  $user_id=mysqli_fetch_assoc(	$results)['id'];
  $query = "INSERT INTO contact (name, contact, address, email, userid)   VALUES ('$name', '$contact',  '$address', '$email', '$user_id')";
  mysqli_query($db, $query);

}
}



?>
