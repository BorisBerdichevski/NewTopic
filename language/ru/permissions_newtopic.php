<?php
/**
*
* newtopic [Russian]
*
* @package newtopic
* @copyright (c) 2014 Borisba
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_NEWTOPIC'					=> 'Вставка кнопки New Topic',
	'ACP_BOARD_NEWTOPIC'			=> 'Вставка кнопки New Topic',
	'ACP_NEWTOPIC_EXPLAIN'		    => 'Вставка кнопки New Topic',

	'ACL_A_NEWTOPIC'			=> 'Может изменять настройки',
	'ACL_F_NOT_CHANGE_SUBJECT'	=> 'Может изменять заголовок',
));
