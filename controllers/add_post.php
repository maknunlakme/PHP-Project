<?php

App::get('database')->insert('post',
	[
		'username' => $_POST['username'],
		'title'=> $_POST['title'],
		'description' => $_POST['description'],
		'date' => $_POST['date']
	]

);

header('Location: /');

?>