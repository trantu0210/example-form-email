<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailheader = "From:".$name."<".$email.">\r\n";

$recipient = "bichtram02101986@gmail.com";
mail($recipient, $subject, $message, $emailheader)
or die("ERROR!"):
echo '



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/bootstrap.min.css">
</head>
<body>
  <div class="container">

  
    <h1> thank you for contacting me. i will reply later</h1>
    <p class="back" >Go back to the <a href="./form-email.html">Homepage</a>.</p>

  </div>

      <script src="./lib/bootstrap/bootstrap.bundle.min.js"></script>     
      <script src="./lib/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
</body>
</html>



';




?>