<?php require 'partials/head.php'; ?>

<h1> POSTS </h1>


	<?php $plength=sizeof($posts); ?>
	<?php for($i=0;$i<$plength;$i++): ?>
		<div class="divone">
			<?php echo "<h2>".$posts[$i]->title."</h2>","<br/>\n"; ?>
			<?php echo $posts[$i]->username,"<br/>\n"; ?>
			<?php echo $posts[$i]->description,"<br/>\n"; ?>
			<?php echo $posts[$i]->date,"<br/>\n"; ?>
			<?php $rlength=sizeof($replies); ?>

			<form method="POST" action='/replying'>
				<button type="submit">Reply</button>
				<input type="hidden" name="id" value="<?php echo $posts[$i]->postid; ?>">
			</form>
			<div class="divtwo">
			<?php echo "<h4> All Replies </h4>","<br/>\n"; ?>
				<?php for($j=0;$j<$rlength;$j++): ?>
					<?php if($posts[$i]->postid==$replies[$j]->postid): ?>
						<?php echo $replies[$j]->username,"<br/>\n"; ?>
						<?php echo $replies[$j]->description,"<br/>\n"; ?>
						<?php echo $replies[$j]->date,"<br/>\n"; ?>
					<?php endif ?>
				<?php endfor ?>
			</div>
		</div>
	<?Php endfor ?>

<?php require 'partials/footer.php'; ?>