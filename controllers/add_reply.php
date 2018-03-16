<?php

App::get('database')->insert('reply',
	[
		'postid' => $_POST['postid'],
		'username' => $_POST['username'],
		'description' => $_POST['description'],
		'date' => $_POST['date']
	]

);

header('Location: /');

?>