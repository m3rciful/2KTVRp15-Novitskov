<?php ob_start() ?>

<h2>Обо мне</h2>
<ul>
	<li>Меня зовут: Сергей</li>
	<li>Вот и все</li>
</ul>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";