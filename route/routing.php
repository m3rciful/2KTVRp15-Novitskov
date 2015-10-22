<?php

//echo  $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
$u = explode('?', $uri);
$uri=$u[0];
//echo "<br>newUri=".$uri;


if ($uri == '/2KTVRp15/' OR $uri == '/2KTVRp15/index.php') 
{
	//list_action();
	$response = list_action();
}
elseif ($uri == '/2KTVRp15/index.php/admin') 
{
	$response = admin_action();
}
elseif ($uri == '/2KTVRp15/index.php/show')
{
	$response = show_action($_REQUEST['id']);
}
elseif ($uri == '/2KTVRp15/index.php/add')
{
	$response = add_action();
}
elseif ($uri == '/2KTVRp15/index.php/about')
{
	$response = about_action();
}
elseif ($uri == '/2KTVRp15/index.php/remove')
{
	$response = remove_action($_REQUEST['id']);
}
elseif ($uri == '/2KTVRp15/index.php/edit')
{
	$response = edit_action($_REQUEST['id']);
}
?>
