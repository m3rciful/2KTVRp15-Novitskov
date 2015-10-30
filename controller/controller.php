<?php
// ------------------------------------------------
function render_template($path, array $args)
{
	extract($args);
	ob_start();
	require $path;
	$html = ob_get_clean();
	return $html;
}
// ------------------------------------------------
// Загрузка постов
function list_action()
{
	$posts = get_all_posts();
	$html = render_template('view/templates/list.php', array('posts' => $posts));
	return $html;
}
// Добавление поста
function admin_action()
{
	$html = render_template('view/templates/admin.php', array());

	if (isset($_POST['submit']) && !empty($_POST['add_title']))
	{
    	add_post();
    	header("location: ../index.php");
	}

	return $html;
}
// Просмотр поста
function show_action($id)
{
	$post = get_post($id);
	$html = render_template('view/templates/show.php', array('post' => $post));
	return $html;
}
// Редактирование
function edit_action($id)
{
	$post = get_post($id);
	$html = render_template('view/templates/edit.php', array('post' => $post));

	if (isset($_POST['edit_post']))
	{
    	edit_post($id);
    	header("location: ../index.php/show?id=".$id);
	}

	return $html;
}
// Удаление
function remove_action($id)
{
	$post = remove_post($id);
	header('Location: ../index.php');
}
// ------------------------------------------------
// 		ДОПОЛНИТЕЛЬНЫЕ СТРАНИЦЫ
// ------------------------------------------------
function about_action()
{
	$html = render_template('view/templates/about.php', array());
	return $html;
}
?>