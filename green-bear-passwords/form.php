<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

function custom_mail($to, $subject, $message, $additionalHeaders = '', $attachFile = '')
{
	$mail = new PHPMailer;
	$mail->isSMTP();
        $mail->Host = "ssl://smtp.gmail.com:465";
        $mail->Username = "kasperskylabma@gmail.com";
        $mail->Password = "Rfcgthcrbq17";
	$from = "kasperskylabma@gmail.com";
        $fromName = "Kaspersky Lab";
        $mail->Port = 465;
        $mail->ssl = true;

	$mail->SMTPDebug = false;
	$mail->Debugoutput = 'html';
	$mail->Timeout = 10;
	$mail->CharSet = 'utf-8';
	$mail->SMTPAuth = true;
	$mail->setFrom($from,$fromName);
	//$mail->addReplyTo($from);
	$mail->addAddress($to);
	$mail->Subject = $subject;

	$needle = 'Content-Transfer-Encoding: 8bit';
	$pos = stripos($message, $needle );
	if( $pos !== false ){
		$message = substr ( $message, $pos + strlen($needle) );
	}
	$mail->msgHTML($message );
	//$mail->Body = $message;

	if ($attachFile) {
		$mail->addAttachment($attachFile);
	}

	if (!$mail->send()) {
			return false;
	} else {
		return true;
	}
}

if (!empty($_POST)) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://p8tre.emv3.com/D2UTF8');
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS,
		'emv_tag='.$_POST['emv_tag'].
		'&emv_ref='.$_POST['emv_ref'].
		'&LOCALE_FIELD='.$_POST['LOCALE_FIELD'].
		'&SEGMENT_FIELD='.$_POST['SEGMENT_FIELD'].
		'&OPT_IN_EMAIL_IND_FIELD='.$_POST['OPT_IN_EMAIL_IND_FIELD'].
		'&EMAIL_FIELD='.$_POST['EMAIL_FIELD']
	);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); 
    curl_setopt ($curl, CURLOPT_REFERER, $_SERVER["HTTP_REFERER"]); 
    $res = curl_exec($curl);

    if(!$res) {
        $error = curl_error($curl).'('.curl_errno($curl).')';
        //echo $error;
    }
    else {
		//print_r($res);
    }
    curl_close($curl);
}

$to  = $_POST['EMAIL_FIELD'];
if (!filter_var($to, FILTER_VALIDATE_EMAIL)) 
	die('Watchout!');

include("mailTemplate.php");

$subject  = 'New message';
if($hFile) {
	fwrite($hFile, date('c').' '.$to.PHP_EOL);
	fclose($hFile);
}
// custom_mail($to, $subject, $postText, '', __DIR__.'/books/SURVIVAL_GUIDE_AR.pdf');
echo json_encode(array('message'=>'sent'));
?>