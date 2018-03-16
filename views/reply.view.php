<?php require 'partials/head.php'; ?>

<h1>Post a Reply</h1>

<form method="POST" action='/replied'>


	Username:<br>
	<input type="text" name="username"><br>
	Description:<br>
	<textarea rows="25" cols="82" name= "description"></textarea><br>
	Date:<br>
	<input type="date" name="date"><br>
	<button type="submit">Submit</button>
	<button type="reset">Reset</button>
	<input type="hidden" name="postid" value="<?php echo $_POST['id']; ?>">

</form>

<?php require 'partials/footer.php'; ?>