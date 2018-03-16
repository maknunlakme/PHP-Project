<?php require 'partials/head.php'; ?>

<h1>Post in Forum</h1>

<form method="POST" action='/posted'>


	Username:<br>
	<input type="text" name="username"><br>
	Title:<br>
	<!--<input type="text" name="title"><br>-->
	<textarea rows="4" cols="82" name= "title"></textarea><br>
	Description:<br>
	<!--<input type="text" name="description"><br>-->
	<textarea rows="25" cols="82" name= "description"></textarea><br>
	Date:<br>
	<input type="date" name="date"><br>
	<button type="submit">Submit</button>
	<button type="reset">Reset</button>

</form>

<?php require 'partials/footer.php'; ?>