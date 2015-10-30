<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Добавить</h2>
<hr>
<div class="col-xs-12 col-sm-6 col-md-8">
<form method="POST">
	<div class="form-group">
	 	<label for="add_author">Автор</label>
	 	<input type="text" class="form-control" name="add_author">
	</div>
	<div class="form-group">
	 	<label for="add_time">Время</label>
	 	<input type="text" class="form-control" name="add_time" value='<?php echo date("Y-m-d H:i:s"); ?>'>
	</div>
	<div class="form-group">
	 	<label for="add_title">Заголовок *</label>
	 	<input type="text" class="form-control" name="add_title">
	</div>
	<div class="form-group">
	 	<label for="add_content">Текст</label>
	 	<textarea rows="10" cols="45" name="add_content" class="form-control"></textarea>
	</div>
	<button type="submit" id="submit" name="submit" class="btn btn-default"><i class="fa fa-plus"></i>
 Добавить</button> 
	<button type="reset" reset="" name="" class="btn btn-default"><i class="fa fa-eraser"></i>
 Очистить</button>
</form>
</div>


<!--
<form method="POST">
<table>
	<tr>
		<td>Автор:</td>
		<td><input type="text" name="add_author"></td>
	</tr>
	<tr>
		<td>Дата:</td>
		<td><input type="text" name="add_time" value=""></td>
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
-->

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";