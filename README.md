yii2-datetimepicker
===================

Виджет datetimepicker ( http://xdsoft.net/jqplugins/datetimepicker ) для yii2

Использование:

use vakorovin\datetimepicker\Datetimepicker;

<?php
	echo $form->field($model, 'created')->widget(Datetimepicker::className(),[
		'options' => [
			'lang'=>'en',
		]]);
?>

Список доступных пареметров находится на сайте автора плагина datetimepicker: http://xdsoft.net/jqplugins/datetimepicker
