<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Пост #<?php echo $post['id'];?> <b>Редактирование</b></h2>
<hr>
<div class="col-xs-12 col-sm-6 col-md-8">
<form method="POST">
	<table class='table-condensed'>
		<tr>
			<td><b>Автор:</b></td>
			<td><input type="text" class="form-control" name="add_author" value="<?php echo $post['author'];?>"></td>
		</tr>
		<tr>
			<td><b>Дата:</b></td>
			<td>
				<input type="text" class="form-control" name="add_time" value="<?php echo $post['time'];?>">
			</td>
		</tr>
		<tr>
			<td><b>Заголовок:</b></td>
			<td><input type="text" class="form-control" name="add_title" value="<?php echo $post['title'];?>"></td>
		</tr>
		<tr>
			<td style="vertical-align: top;"><b>Текст:</b></td>
			<td><textarea rows="10" cols="45" class="form-control" name="add_content"><?php echo $post['content'];?></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" name="edit_post" class="btn btn-default"><i class="fa fa-floppy-o"></i> Сохранить</button> <a class="btn btn-default" href="../index.php/show?id=<?php echo $post['id'];?>" role="button"><i class="fa fa-ban"></i> Отмена</a>
			</td>
		</tr>
	</table>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>