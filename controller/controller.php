<?php
function list_action()
{
	$posts = get_all_posts();
	require "view/templates/list.php";
}
function admin_action()
{
	require "view/templates/admin.php";
}
function show_action($id)
{
	$post = get_post($id);
	require "view/templates/show.php";
}
function add_action()
{
	if (isset($_POST['submit']) && !empty($_POST['add_title']))
	{
    	add_post();
	}
}
function about_action()
{
	require "view/templates/about.php";
}
function remove_action($id)
{
	$post = remove_post($id);
	header('Location: ../index.php');
}
?>