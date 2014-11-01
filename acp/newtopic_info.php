<?php
/**
*
* @package newtopic
* @copyright (c) 2014 Borisba
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace borisba\newtopic\acp;

class newtopic_info
{
	function module()
	{
		return array(
			'filename'	=> '\borisba\newtopic\acp\usernotice_module',
			'title'		=> 'ACP_NEWTOPIC',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'config_newtopic'		=> array('title' => 'ACP_NTP_CONFIG', 'auth' => 'ext_borisba/newtopic && acl_a_newtopic', 'cat' => array('ACP_NTP_CONFIG')),
			),
		);
	}
}
