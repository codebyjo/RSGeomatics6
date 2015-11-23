<?php
if(isset($_POST['email'])) {
    // CHANGE THE TWO LINES BELOW
    $email_to = "codebyjo@gmail.com";
    $email_subject = "message submission";
    function died($error) {
        // your error code can go here
        echo "Apologies for the error.";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['tel']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $name = $_POST['name']; // required
    $tel = $_POST['tel']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
    $error_message = "";
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
  if(!preg_match($telephone_exp, $tel)) {
    $error_message .= 'The Telephone you entered does not appear to be valid.<br />';
  }
  if($error_message) {
    died($error_message);
  }
    $email_message = "Form details below.nn";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_string($name)."n";
    $email_message .= "Email: ".clean_string($email_from)."n";
    $email_message .= "Message: ".clean_string($message)."n";
// create email headers
$headers = 'From: '.$email_from."rn".
'Reply-To: '.$email_from."rn" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

//**HTML goes here.**//

<?php
}
die();
?>