<?php ob_start() ?>

<h2>Пост: "<?php echo $post['title'];?>"</h2>

<table>
	<tr>
		<td><b>Дата:</b></td>
		<td><?php echo $post['time'];?></td>
	</tr>
	<tr>
		<td><b>Автор:</b></td>
		<td><?php echo $post['author'];?></td>
	</tr>
	<tr>
		<td><b>Текст:</b></td>
		<td><?php echo $post['content'];?></td>
	</tr>
</table>
<hr>

<div>
действия: <a href="../index.php/edit?id=<?php echo $post['id'];?>">Изменить</a> / <a href="../index.php/remove?id=<?php echo $post['id'];?>">Удалить</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>