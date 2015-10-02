<?php

function open_database_connection () 
{
	$link = mysql_connect('localhost', 'sergei', '123');
	mysql_select_db ('novitskov', $link);
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
function get_posts($id) 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM post WHERE id='$id'";
	$result = mysql_query($sql, $link);
	$post = mysql_fetch_assoc($result);
	close_database_connection($link);
	return $post;
}

// Моя разработка
function add_new_posts($title, $author, $content)
{
	$link = open_database_connection();

	$query = "INSERT INTO `novitskov`.`post` (`id`, `author`, `time`, `title`, `content`) 
			  VALUES (NULL, '$author', CURRENT_TIMESTAMP, '$title', '$content');";
	
	mysql_query($query, $link);

	close_database_connection($link);
}
?>