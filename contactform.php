<?php

    $message_sent = false;
    if(isset($_POST['Email']) && $_POST['Email'] != ''){

     if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){

       $userName = $_POST['Name'];
       $userEmail = $_POST['Email'];
       $Message = $_POST['Message'];

       $to = "plattjr@appstate.edu";
       $body = "";

       $body .= "From: ".$userName. "\r\n";
       $body .= "Email: ".$userEmail. "\r\n";
       $body .= "Message: ".$Message. "\r\n";

    mail($to,$body);

    $message_sent = true;

  }

}

?>
