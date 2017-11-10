<?php
	if(isset($_POST['email'])) {

	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_from = "webmaster@malkani-abogados.com";
		$email_to = "dmb@malkani-abogados.com";
		$email_subject = "Nuevo contacto PAE desde la web";

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['name'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";


		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

		header("Location: http://www.malkani-abogados.com/gracias");
		die();
	}
?>