<?php
if(isset($_POST['add']))
{
	$title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['text'];

    $query = add_new_posts($title, $author, $content);

    header("location: index.php");
}
?>

<form method="POST">
	Title <input type="text" name="title"> 
	<select name="author">
  		<option>admin</option>
  		<option>pupil</option>
  		<option>sergei</option>
	</select>
	<br><br>Content<br>
	<textarea rows="10" cols="40" name="text"></textarea><br>
	<input type="submit" value="Add content" name="add">
</form> 