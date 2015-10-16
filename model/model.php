<?php
/*
function open_database_connection () 
{
	$host = 'localhost';
	$dbname = 'sergeiDB';
	$user = 'pupil';
	$pass = '123';

	try  # подключаемся к базе данных  
	{  
  		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  
  		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
  
		# Черт! Набрал DELECT вместо SELECT!  
		$DBH->prepare('DELECT name FROM people')->execute();  
	}  
	catch(PDOException $e) 
	{  
		echo "Хьюстон, у нас проблемы.";  
    	file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	}
}
*/

function open_database_connection () 
{
	$link = mysql_connect('localhost', 'pupil', '123');
	mysql_select_db ('sergeiDB', $link);
	mysql_query('SET NAMES utf8');
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}

function get_all_posts() 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM post";
	$result = mysql_query($sql, $link);
	$posts = array();
	while($row = mysql_fetch_assoc($result))
	{
		$posts[] = $row;
	}
	close_database_connection($link);

	return $posts;
}
function get_post($id) 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM post WHERE id='$id'";
	$result = mysql_query($sql, $link);
	$post = mysql_fetch_assoc($result);
	close_database_connection($link);
	return $post;
}
function add_post()
{
	$author = $_REQUEST ['add_author'];
	$title = $_REQUEST['add_title'];
	$content = $_REQUEST['add_content'];

	$link = open_database_connection();

	$query = "INSERT INTO `post` (`id`, `author`, `time`, `title`, `content`) 
			  VALUES (NULL, '$author', CURRENT_TIMESTAMP, '$title', '$content');";
	
	mysql_query($query, $link);

	close_database_connection($link);
}
function remove_post($id) 
{
	$link = open_database_connection();
	$sql = "DELETE FROM `post` WHERE `post`.`id` = $id";
	$result = mysql_query($sql, $link);
	$post = mysql_fetch_assoc($result);
	close_database_connection($link);
	return $post;
}
?>