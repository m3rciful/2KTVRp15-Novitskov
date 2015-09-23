<?php
include_once 'model/model.php';

$posts = get_all_posts();

require "view/Templates/list.php";
?>
