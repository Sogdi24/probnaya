<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . './smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . './smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'smtp.yandex.ru';
		 const LOGIN = 'rizaevasogdiana@yandex.ru';
		 const PASS = 'qtvubxzcookjlgcd';
		 const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'rizaevasogdiana@yandex.ru';
    const CATCHER = 'rizaevasogdiana@yandex.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
