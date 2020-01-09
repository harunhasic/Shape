<?php
session_start();
include('connection.php');
$message="";
if (isset($_POST['login_user'])) {
  if (empty($_POST["email"]) || empty($_POST["password"])){
      $message='<label>All fields are required!</label>';
  }
else{
  $query= "SELECT * FROM users WHERE email=:email AND password=:password";
  $statement= $db->prepare($query);
  $statement->execute(
    array(
      'email' => $_POST["email"],
      'password' => $_POST["password"]
    )
  );
  $count=$statement->rowCount();
    if($count>0)
    {
      $_SESSION["email"] = $_POST["email"];
      header("location:mainpage.php");
    }
    else{
      $message="Wrong data";
    }

}
 /* if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }*/
}
