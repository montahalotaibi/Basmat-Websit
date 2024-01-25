<?php

$message = $_POST['message'];

$to = "info@basmat.co";
$subject = $_POST['subject'];

$corp_receiver = "
<html>
<body>
<p><b>You have a new message from http://www.basmat.co/ :</b></p>";
$corp_receiver .= "<p><br/>
<b>From : </b>".$_POST['name'];
$corp_receiver .= "<br/>
<b>Email : </b>".$_POST['email'];
$corp_receiver .= "<br/>
<b>Subject : </b>".$subject;
$corp_receiver .= "<br/>
<b>Message : </b>".$message;
$corp_receiver .= "</body>
</html>
";

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <info@basmat.co>' . "\r\n";
$headers .= 'Cc: info@basmat.co' . "\r\n";

$send = mail($to,$subject,$message,$headers);
//mail("yosra@php-attitude.com",$subject,$corp_receiver,$headers);
echo $send;
?>
