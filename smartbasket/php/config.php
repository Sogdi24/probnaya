<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'smtp.mail.ru';
		 const LOGIN = 'di.riz@mail.ru';
		 const PASS = '98mvE1dM4Lw8AsHSsLnV';
		 const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'mr.smokimo620@mail.ru';
    const CATCHER = 'di.riz@mail.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
