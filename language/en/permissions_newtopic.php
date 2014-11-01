<?php
/**
*
* newtopic [English]
*
* @package newtopic
* @copyright (c) 2014 William Jacoby (bonelifer)
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
	'ACP_NEWTOPIC'					=> 'Insert button New Topic',
	'ACP_BOARD_NEWTOPIC'			=> 'Insert button New Topic',
	'ACP_NEWTOPIC_EXPLAIN'		    => 'Insert button New Topic',
));
