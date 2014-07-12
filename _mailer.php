<?php

$EmailFrom = Trim(stripslashes($_POST['from']));
$EmailTo = "rritchie1989@gmail.com";
$Subject = "Enquiry from the website";
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['from']));
$Tel = Trim(stripslashes($_POST['tel']));
$Message = Trim(stripslashes($_POST['budget']));
$Budget = Trim(stripslashes($_POST['details']));
// validation
$validationOK=true;
if (!$validationOK) {
  echo "please check your details";
  header("Location: http://yourdommain.co.uk/contact.php");
  exit;
}

// prepare email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=thanks\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=hire\">";
}
?>
