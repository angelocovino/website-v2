<?php
$get="?form=";
if(
	isset($_POST["email"]) && !empty($_POST["email"]) &&
	isset($_POST["text"]) && !empty($_POST["text"])
){
	$to="angelo_covino@hotmail.com";
	$subject="AC WebSite Contact Form";
	$message="{$_POST[text]}";
	$headers = "From:".$to."\r\n" .
		//'CC: esempio2@gmail.com' . "\r\n" .
		//'Reply-To: esempio@gmail.com' . "\r\n" .
		"X-Mailer: PHP/".phpversion();
	if(mail($to, $subject, $message, $headers)){ $get.="ok"; }
	else{ $get.="err"; }
}else{
	$get.="inc";
}
header("location: index.php".$get."#contacts");
?>