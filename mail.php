<?php
echo var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"};]
$message = $_POST["message"];
 
$EmailTo = "emailaddress@test.com";
$Subject = "New Message Received";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);

echo $Body . "\n";

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>
