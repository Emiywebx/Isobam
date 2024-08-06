<?php 
require 'connection.php';

if(isset($_POST["submit"])){      
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['res'] = "Enter your valid email address";
   header("Location: contact.php");
}else if(strlen($_POST['phone']) < 10){
  $_SESSION['res'] = "Phone number should be greater than 10 Chracters";
  header("Location: contact.php");
}else if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['phone']) || empty($_POST['message'])){
  header("Location: contact.php");
}else{


 /* $error = [];

  if(empty($_POST['name'])){
  $error['name'] = 'Full Name can not be empty';
  }
  if(empty($_POST['email'])){
    $error['email'] = 'Email can not be empty';
    }
    if(empty($_POST['subject'])){
      $error['subject'] = 'subject can not be empty';
      }
      if(empty($_POST['phone'])){
        $error['phone'] = 'Phone number can not be empty';
        }
         if(empty($_POST['message'])){
          $error['message'] = 'message can not be empty';
          }

*/

$query ="INSERT INTO contact_us VALUES('', '$name', '$email', '$subject', '$phone', '$message')";
$result = mysqli_query($conn, $query);
  
header("Location: index.html");
}
}

if(isset($_POST["submit"])){     
  $email = $_POST["email_news"];

  if(!filter_var($_POST['email_news'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['res'] = "Enter your valid email address";
    header("Location: index.html");
 }else {
  $query ="INSERT INTO news_letter VALUES('','$email')";
$result = mysqli_query($conn, $query);
  
header("Location: index.html");

 }


}




?>