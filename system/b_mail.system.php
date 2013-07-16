<?php

	if (isset($_POST['submit']))
	{
		$_to 			=  'benjaminbeats@gmail.com';
		$_subject =  'You have a subscription request';

		$_headers = 	'From: '. strip_tags($_POST['email']) . '\r\n'
							.		'Reply-To: '. strip_tags($_POST['email']) . '\r\n'
							.		'MIME-Version: 1.0\r\n'
							. 	'Content-type: text/html; charset=iso-8859-1\r\n';

		$_message =		'<html>'
							.			'<body>'
							.				'<h1>Hey</h1>'
							.				'<p>ATTENTION: '.strip_tags($_POST['email']).' signed up on your website. Make sure you save this information!</p>'
							.			'</body>'
							.		'</html>';

		//var_dump($_to, $_subject, $_message, $_headers);die;
		mail($_to, $_subject, $_message, $_headers);
	}
?>