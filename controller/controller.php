<?php
/*
function list_action()
{
	$posts = get_all_posts();
	require "view/templates/list.php";
}
*/
function list_action()
{
	$posts = get_all_posts();
	$html = render_template('view/templates/list.php', array('posts' => $posts));
	return $html;
}
function admin_action()
{
	$html = render_template('view/templates/admin.php', array());
	return $html;
}
function show_action($id)
{
	$post = get_post($id);
	$html = render_template('view/templates/show.php', array('post' => $post));
	return $html;
}
function add_action()
{
	if (isset($_POST['submit']) && !empty($_POST['add_title']))
	{
    	add_post();
	}
	header("location: ../index.php");
}
function about_action()
{
	$html = render_template('view/templates/about.php', array());
	return $html;
}
function remove_action($id)
{
	$post = remove_post($id);
	header('Location: ../index.php');
}
function render_template($path, array $args)
{
	extract($args);
	ob_start();
	require $path;
	$html = ob_get_clean();
	return $html;
}
?>