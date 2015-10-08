

<?php ob_start() ?>

<?php echo "test"; ?>
<h2><?php echo $post['title'];?></h2>

<div>Дата: <?php echo $post['time'];?></div>
<div>Автор: <?php echo $post['author'];?></div>
<div>Текст: <?php echo $post['content'];?></div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>