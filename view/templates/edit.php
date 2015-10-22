<?php ob_start() ?>

<h2>Редактирование</h2>
<form method="POST">
<table>
	<tr>
		<td>Автор:</td>
		<td><input type="text" name="add_author" value="<?php echo $post['author'];?>"></td>
	</tr>
	<tr>
		<td>Дата:</td>
		<td><input type="text" name="add_time" value="<?php echo $post['time'];?>"></td>
	</tr>
	<tr>
		<td>Заголовок: <b>*</b></td>
		<td><input type="text" name="add_title" value="<?php echo $post['title'];?>"></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><textarea rows="10" cols="45" name="add_content"><?php echo $post['content'];?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Изменить">
	</tr>
</table>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>