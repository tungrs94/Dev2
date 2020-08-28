
<a href="index_controller.php">
	<button id='back'>back</button>
</a>


<?php
	foreach ($postList as $post) {
		$title = $post['title'];
		$image = $post['image'];
		$descriptions = $post['descriptions'];
		echo '<h1>'.$title.'</h1>';
		echo '<img src="'.$image.'" alt="">
			<p>'.$descriptions.'</p>';
	}
?>