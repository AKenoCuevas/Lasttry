<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "keno.a.cuevas@outlook.com"; 
	$headers = "From: ".$mailFrom;
	$txt= "You have an email from ".$name."\r\n".$message;
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsent");
}