<?php 
	

// define variables and set to empty values
$name_error = $email_error = $phone_error = $message_error = "";
$name = $email = $phone = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Please Enter Your Name ";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Please Your Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "Please Your Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number"; 
    }
  }

  if (empty($_POST["message"])) {
    $message_error = "Please leave Your Message";
  } 
  
  if ($name_error == '' and $email_error == '' and $phone_error == '' and $message_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'selemani@selianordgroup.co.za';
      $subject = 'Contact Form Submit';
      $name = "name : $name";
      $message = "message : $message";
      $email = "email";
      if (mail($to, $subject, $message)){
          $success = "<p>Thank you for taking the time to contact SELIANORD GROUP ,  A representative will be in contact with you shortly.</p><p>If you need immediate assistancee or would like to speak to someone now, please feel free to contact us at <strong>+27(0)833951342</strong></p>";
          $name = $email = $phone = $message = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}