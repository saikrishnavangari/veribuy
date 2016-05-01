<?php

$errorMSG = "";
$success =false;

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "subject is required ";
} else {
    $Subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "saikrishna1345@gmail.com";


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email id: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject : ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
if($errorMSG == ""){
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
}
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo "Please ensure all the fields are filled correctly";
    }
}

?>