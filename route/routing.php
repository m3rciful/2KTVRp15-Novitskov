<?php

echo  $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
$u = explode('?', $uri);
$uri=$u[0];
echo "<br>newUri=".$uri;

if ($uri == '/2KTVRp15/' OR $uri == '/2KTVRp15/index.php') 
{
	list_action();
}
elseif ($uri == '/2KTVRp15/index.php/admin') 
{
	admin_action();
}
elseif ($uri == '/2KTVRp15/index.php/show')
{
	show_action($_REQUEST['id']);
}
elseif ($uri == '/2KTVRp15/index.php/add')
{
	add_action();
	header("location: ../index.php");
}
?>
