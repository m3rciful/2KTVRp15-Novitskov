<?php ob_start() ?>

<h2>Обо мне</h2>
<hr>
<div class="col-xs-12 col-sm-6 col-md-8">
	<ul>
		<li>Меня зовут: Сергей</li>
		<li>Вот и все</li>
	</ul>
</div>


<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";