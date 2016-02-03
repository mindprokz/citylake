<?php
$options = array(
	array( // первый метабокс
		'id'	=>	'meta1', // ID метабокса, а также префикс названия произвольного поля
		'name'	=>	'Описание для поста', // заголовок метабокса
		'post'	=>	array('post'), // типы постов для которых нужно отобразить метабокс
		'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
		'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
		'cap'	=>	'edit_posts', // какие права должны быть у пользователя
		'args'	=>	array(
			array(
				'id'			=>	'textfield',
				'title'			=>	'Текстовое поле',
				'type'			=>	'textarea', // большое текстовое поле
				'placeholder'	=>	'Это поле должно быть заполнено обязательно ',
				'desc'			=>	'',
				'cap'			=>	'edit_posts'
			),
		)
	),
);
 
foreach ($options as $option) {
	$truemetabox = new trueMetaBox($option);
}
?>