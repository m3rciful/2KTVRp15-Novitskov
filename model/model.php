<?php
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

	if (empty($content))
		$content = random_lipsum(1, 'paras', 0);

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
// Random Text from Lorem Ipsum
function random_lipsum($amount, $what, $start)
{
    return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
}
?>