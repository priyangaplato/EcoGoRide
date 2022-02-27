<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="ecogoride@gmail.com";
$subject="Message from ECOGO";
$txt="Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;

$headers= "From: noreply@ecogoride@gmail.com" . "\r\n" ;

if($email!=NULL){
mail($to,$subject,$txt,$headers);
}
?>