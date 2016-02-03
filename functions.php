<?php
remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте

include_once('metabox_create.php');
include_once('metabox_add.php');
?>