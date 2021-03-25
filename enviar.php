<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))){

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'giovanna.moretti16@gmail.com';
	$mail->Password = 'gnsm2810';
	$mail->Port = 587;
	$mail->setFrom('giovanna.moretti16@gmail.com');
	$mail->addAddress('giovanna.moretti16@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
	
	if($mail->send()) {
		echo 'E-mail enviado com sucesso';
	} else {
		echo 'E-mail não enviado';
	}
	} else {
		echo 'Não enviado: informar e-mail e mensagem';
	}