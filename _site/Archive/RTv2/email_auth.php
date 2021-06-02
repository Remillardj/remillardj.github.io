<?php

//if submit is set
if(isset($_POST['submit'])) {

    //get information
    $name = strip_tags($_POST['name']);
    $customer_email = strip_tags($_POST['email']);
    $phone_num = strip_tags($_POST['phone']);
    $service = $_POST['service'];
    $message = "NAME: $name\nPHONE NUMBER: $phone_num\nSERVICE TYPE: $service\n" . strip_tags(wordwrap($_POST['message']));

    //set personal info
    $email_to = "contact@remillardtech.com";
    $email_subject = "[CONTACT FROM]: " + $name;

    //set header information
    $header = "From: noreply@remillardtech.com\r\n"; 
    $header.= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n"; 

    //send mail

    $retv = mail($email_to, $email_subject, $message, $header);

    if ($retv == true) {
        ?>
        <script>
        alert("Successfully sent!");
        window.location.replace("index.html");
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Something went wrong!");
        window.location.replace("index.html");
        </script>
        <?php
    }

} else {
    header ('Location: index.html');
}


?>