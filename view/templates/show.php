

<?php ob_start() ?>

<?php echo "test"; ?>
<h2><?php echo $post['title'];?></h2>

<div><b>Дата:</b> <?php echo $post['time'];?></div>
<div><b>Автор:</b> <?php echo $post['author'];?></div>
<div><b>Текст:</b> <?php echo $post['content'];?></div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>