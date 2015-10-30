<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Пост #<?php echo $post['id'];?></h2>
<hr>
<div class="col-xs-12 col-sm-6 col-md-8">
	<table class='table-condensed'>
		<tr>
			<td><b>Автор:</b></td>
			<td><?php echo $post['author'];?></td>
		</tr>
		<tr>
			<td><b>Дата:</b></td>
			<td><?php echo $post['time'];?></td>
		</tr>
		<tr>
			<td><b>Заголовок:</b></td>
			<td><?php echo $post['title'];?></td>
		</tr>
		<tr>
			<td style="vertical-align: top;"><b>Текст:</b></td>
			<td><textarea rows="10" cols="45" class="form-control" name="add_content" readonly="readonly"><?php echo $post['content'];?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<a class="btn btn-default" href="../index.php/edit?id=<?php echo $post['id'];?>" role="button"><i class="fa fa-pencil"></i> Изменить</a> <a class="btn btn-danger" href="../index.php/remove?id=<?php echo $post['id'];?>" role="button"><i class="fa fa-trash-o"></i> Удалить</a>
			</td>
		</tr>
	</table>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>