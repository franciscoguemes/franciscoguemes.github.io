<?php

// Define constant "TO" in order to send the email to that address
define("TO", "francisco@franciscoguemes.com");

// define variables and set to empty values
$name = $email = $subject = $message = "";
$valid_data = TRUE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);

  if( empty($name) || empty($email) || empty($subject) || empty($message)){
      echo "There are empty fields. Please ensure that there are no empty fields in the form." . "<br>";
      echo "The supplied values are:" . "<br>";
      echo "Name: " . $email . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Subject: " . $subject . "<br>";
      echo "Message: " . $message . "<br>";
      echo "<br>";
      $valid_data = FALSE;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "The supplied email:" . $email . " is not valid!!!";
      echo "<br>";
      $valid_data = FALSE;
  }

  if( $valid_data ){

    $headers = 'From:' . $email . "\r\n" .
    'Reply-To:' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $email_message = $name . " is sending you a message through the contact form at franciscoguemes.com" . "\r\n" .
    "Here is the message:" . "\r\n" . "\r\n" . $message;

    $outcome = mail(TO,$subject,$email_message,$headers);
    mail("francisco.jose.guemes.sevilla@gmail.com",$subject,$email_message,$headers);
    // mail("francisco.jose.guemes.sevilla@gmail.com",$subject,$message);

    if($outcome){
        echo "Your message has been successfully sent";
        echo "<br>";
    }else{
        echo "There was a problem and the message was not sent. Please try again!";
        echo "<br>";
        http_response_code(500);
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/*

// the message
$msg = "This is a test!!! First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("francisco@franciscoguemes.com","My subject",$msg);
mail("francisco.jose.guemes.sevilla@gmail.com","My subject",$msg);

*/

?>




