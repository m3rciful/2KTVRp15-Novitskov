<?php
include_once 'model/model.php';
$posts = get_all_posts();
?>

<!DOCTYPE html>
<html>
<head>
	<title>2KTVRp - Novitskov</title>
</head>
<body>

<h2>Список постов</h2>
	<ul>  <?php foreach ($posts as $post): ?>
		<li><a href="#">
				<?php echo $post['id']. ' . ' .$post['title']; ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>

</body>
</html>
