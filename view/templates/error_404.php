<?php $title = '404 ошибка'; ?>

<?php ob_start() ?>

<h2><a href="../index.php" class="fa fa-chevron-left"></a> Страница не найдена</h2>
<hr>
<div class="col-xs-12 col-sm-6 col-md-8">
	<h3>404 ошибка - что это такое?</h3>
	Когда человек хочет перейти на новую страницу, браузер обращается к серверу чтобы тот передал ему её содержимое. Если сайт работает, но по запрашиваемому URL страница не найдена, то сервер сообщает о 404 ошибке.
</div>


<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";