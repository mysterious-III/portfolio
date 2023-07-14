<?php
 if(isset($_POST["send"])){
    $email=$_POST['email'];
    $name=$_POST['name';]
    $subject=$_POST['subject'];
    $message= $_POST['message'];
    //mail function to send email with the details provided by user.
    mail($to,$subjeect, $body,"From: ".$from);
    echo "Email sent successfully";
?>