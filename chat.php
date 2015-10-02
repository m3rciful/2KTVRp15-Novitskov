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
	$sql = "SELECT * FROM chat";
	$result = mysql_query($sql, $link);
	$posts = array();
	while($row = mysql_fetch_assoc($result))
	{
		$posts[] = $row;
	}
	close_database_connection($link);

	return $posts;
}

function add_msg()
{
	$link = open_database_connection();

	$msg= $_POST['msg'];
	$ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	$query = "INSERT INTO `novitskov`.`chat` (`id`, `date`, `msg`, `ip`) 
			  VALUES (NULL, CURRENT_TIMESTAMP, '$msg', '$ip');";
	
	mysql_query($query, $link);

	close_database_connection($link);
}

if(isset($_POST['add']))
{
    $query = add_msg();

    header("location: chat.php");
}
$posts = get_all_posts();

?>

<form method="POST">
	Message <input type="text" name="msg"> 
	<input type="submit" value="add msg" name="add">
</form> 

<h2>Chat Beta</h2>
	<?php foreach ($posts as $post): ?>
				<?php echo $post['date']. ' <a href=http:// ' .$post['ip']. '>' .$post['ip']. '</a>: '  .$post['msg']; ?><br>
	<?php endforeach ?>