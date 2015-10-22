<?php ob_start() ?>

<h2>Добавить</h2>
<form method="POST">
<table>
	<tr>
		<td>Автор:</td>
		<td><input type="text" name="add_author"></td>
	</tr>
	<tr>
		<td>Дата:</td>
		<td><input type="text" name="add_time" value="<?php echo date("Y-m-d H:i:s"); ?>"></td>
	</tr>
	<tr>
		<td>Заголовок: <b>*</b></td>
		<td><input type="text" name="add_title"></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><textarea rows="10" cols="45" name="add_content"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Добавить"> <input type="reset" name=""  reset="" value="Очистить"></td>
	</tr>
</table>
</form>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";