<?php
// checar se existe algum campo vazio
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefone']) 		||
   empty($_POST['messagem'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Não foi possível enviar sua mensagem! Preencha todos os campos.";
	return false;
   }
	
$name = $_POST['nome'];
$email_address = $_POST['email'];
$phone = $_POST['telefone'];
$message = $_POST['messagem'];
	
// Criar o email e enviar a mensagem
$para = 'nilton_even@hotmail.com'; // o email para onde irá a mensagem
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($para,$email_subject,$email_body,$headers);
return true;			
?>