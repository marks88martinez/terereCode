<?php

$errorMSG = "";

// NAME
if (empty($_POST["nombre"])) {
    $errorMSG = "";
} else {
    $name = $_POST["nombre"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject Number
if (empty($_POST["asunto"])) {
    $errorMSG .= "Subject is required ";
} else {
    $tel = $_POST["asunto"];
}

// Tel Number
if (empty($_POST["telefono"])) {
    $errorMSG .= "Tel is required ";
} else {
    $tel = $_POST["telefono"];
}

// MESSAGE
if (empty($_POST["mensaje"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["mensaje"];
}


$EmailTo = "marks88martinez@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $sub;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>