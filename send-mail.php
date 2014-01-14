<?php
	$mail_to = 'youremail@yourawesomesaucewebsite.com'; // <---specify the email 

	$mail_from = $_POST['sender_email'];

	$additional_options = implode(' | ', $_POST['checkbox_group_1']);
	
	// subject of the email
	$subject = 'A new subscriber to our Newsletter! ' . $name;

	// email body
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Newsletter options selected: ' . $additional_options . "\r\n";

	//  headers email
	$headers = 'From: ' . $mail_from . "\r\n";
	$headers .= 'Reply-To: ' . $mail_from . "\r\n";

	$mail_sent = mail($mail_to, $subject, $body_message, $headers);
	//  Sucess message
	if ($mail_sent == true){ ?>
		<script language="javascript" type="text/javascript">
		alert('Thank you for the subscribing!');
		</script>
	<?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message was not able to be sent at this time.');
        window.location.replace("index.html");
    </script>
	<?php
	}
?>