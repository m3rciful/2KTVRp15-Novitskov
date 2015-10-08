<?php

echo  $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
$u = explode('?', $uri);
$uri=$u[0];
echo "<br>newUri=".$uri;

if ($uri == '/2KTVRp15-Novitskov/' OR $uri == '/2KTVRp15-Novitskov/index.php') 
{
	list_action();
}
elseif ($uri == '/2KTVRp15-Novitskov/index.php/admin') 
{
	admin_action();
}
elseif ($uri == '/2KTVRp15-Novitskov/index.php/show')
{
	show_action($_REQUEST['id']);
}
?>
