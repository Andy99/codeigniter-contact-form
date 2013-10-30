<h1>Contact Me</h1>

	<?php echo validation_errors(); ?>
	
<?php
	echo form_open("contact");

	echo '<span>';
		echo form_label("Name: ", "name");
		$data = array(
			'name' => 'name',
			'id' => 'name',
			'value' => set_value("name")
		);
		echo form_input($data);
		echo form_error("name", '<p class="error">', '</p>');
	echo '</span>';

	echo '<span>';
		echo form_label("Email: ", "email");
		$data = array(
			'name' => 'email',
			'id' => 'email',
			'value' => set_value("email")
		);
		echo form_input($data);
		echo form_error("email",'<p class="error">', '</p>');
	echo '</span>';

	echo '<span>';
		echo form_label("Subject: ", "subject");
		$data = array(
			'name' => 'subject',
			'id' => 'subject',
			'value' => set_value("subject")
		);
		echo form_input($data);
		echo form_error("subject", '<p class="error">', '</p>');
	echo '</span>';

	echo '<span>';
		echo form_label("Message: ", "message");
		$data = array(
			'name' => 'message',
			'id' => 'message',
			'value' => set_value("message")
		);
		echo form_textarea($data);
		echo form_error("message", '<p class="error">', '</p>');
	echo '</span>';

	echo '<br>';

	$data = array(
		'name' => 'contactSubmit',
		'id' => 'contactSubmit',
		'value' => 'Send',
		'class' => 'form_button'
	);
	echo form_submit($data, "");

	echo form_close();
?>
