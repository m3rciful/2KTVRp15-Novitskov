<?php ob_start() ?>

<h2>Список постов</h2>
	<ul>  <?php foreach ($posts as $post): ?>
		<li><a href="#">
				<?php echo $post['id']. ' . ' .$post['title']; ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>

<?php $content = ob_get_clean(); ?>

<?php include "view/Templates/layout.php";