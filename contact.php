<?php
$name= $_POST['"Your Name'];
$email= $_POST['email Id'];
$phone= $_POST['phone no.'];
$message= $_POST['How can we help you?'];

$to = "pathakshivi2003@gmail.com"
$subject = "Mail from pathakshalu2005"
$txt ="Name = ".$Your_name . "\r\n 
 Email =  " . $email_Id. "\r\n 
 phone = ". $phone_no . "\r\n
 Message =" . $How_can_we_help_you?;
$headers = "From: pathakshalu2005@gmail.com"; . "\r\n".
"CC: vinod123pathak@gmail.com";
if($email!=NULl){
	mail($to, $subject, $txt,$headers);
}
header("Location:thankyou.html");
?>

