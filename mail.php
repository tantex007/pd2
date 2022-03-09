<?php
$name= $_POST['First-Name'];
$lname= $_POST['Last-Name'];
$email= $_POST['Email-Address'];
$message= $_POST['Message'];
$to="tanmay@startuped.net"
$subject="Mail from Property Dealer";
$txt="Name =".$name. "\r\n lname = ".$lname.  "\r\n Email-Address=".$email. "\r\n Message=".$message;
$headers= "From: noreply@startuped.net";. "\r\n". "CC: tanmay@startuped.net"
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:home.html");
?>