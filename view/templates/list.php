<?php ob_start() ?>

<h2>Список постов</h2>
	<ul>  <?php foreach ($posts as $post): ?>
		<li>
			<a href="index.php/remove?id=<?php echo $post['id'];?>">[x]</a>
			<a href="index.php/show?id=<?php echo $post['id'];?>">	
				<?php echo $post['id']. ' . ' .$post['title']; ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";