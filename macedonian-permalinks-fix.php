<?php
/**
 * Plugin Name: Translate Permalink from Cyrilic to Latin
 * Plugin URI: #
 * Description: There is problem when writing Cyrilic MKD, the permalinks show as: "%s%s3", and this plugin will automaticly fix it by converting the URL to latin from cyrilic.
 * Version: 1.0
 * Author: Tomislav Balabanov
 * Author URI: https://tomislavbalabanov.me
 */


function macedonian_permalinks_title($text) {
	
	$expressions = array(
		'/[аА]/u' => 'a',
		'/[бБ]/u' => 'b',
		'/[вВ]/u' => 'v',
		'/[гГ]/u' => 'g',
		'/[дД]/u' => 'd',
		'/[ѓЃ]/u' => 'gj',
		'/[еЕ]/u' => 'e',
		'/[жЖ]/u' => 'zh',
		'/[зЗ]/u' => 'z',
		'/[иИ]/u' => 'i',
		'/[јЈ]/u' => 'j',
		'/[ѕЅ]/u' => 'dz',
		'/[кК]/u' => 'k',
		'/[лЛ]/u' => 'l',
		'/[љЉ]/u' => 'lj',
		'/[мМ]/u' => 'm',
		'/[нН]/u' => 'n',
		'/[њЊ]/u' => 'nj',
		'/[оО]/u' => 'o',
		'/[пП]/u' => 'p',
		'/[рР]/u' => 'r',
		'/[сС]/u' => 's',
		'/[тТ]/u' => 't',
		'/[ќЌ]/u' => 'kj',
		'/[уУ]/u' => 'u',
		'/[фФ]/u' => 'f',
		'/[хХ]/u' => 'h',
		'/[цЦ]/u' => 'c',
		'/[чЧ]/u' => 'ch',
		'/[џЏ]/u' => 'dzh',
		'/[шШ]/u' => 'sh',		
	);
	
	$text = preg_replace( array_keys($expressions), array_values($expressions), $text );
	return $text;
}
add_filter('sanitize_title', 'macedonian_permalinks_title', 1);

?>
