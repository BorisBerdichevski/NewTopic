<?php
/**
*
* @package newtopic
* @copyright (c) 2014 Borisba
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace borisba\newtopic\migrations\v0xx;

class v_0_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['newtopic_version']) && version_compare($this->config['newtopic_version'], '0.0.1', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			// Add configs
			/*array('config.add', array('custom_notice_show', '')),
			array('config.add', array('custom_notice', '')),
			array('config.add', array('custom_notice_2', '')),
			array('config.add', array('custom_notice_style', '')),
			array('config.add', array('custom_notice_url', '')),
			array('config.add', array('custom_notice_url_class', '')),*/

			// Current version
			array('config.add', array('newtopic_version', '0.0.1')),

			/*
			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_BOARD_NEWTOPIC')),
			array('module.add', array('acp', 'ACP_BOARD_NEWTOPIC', array(
					'module_basename'	=> '\borisba\newtopic\acp\newtopic_module',
					'module_langname'	=> 'ACP_NEWTOPIC_EXPLAIN',
					'module_mode'		=> 'config_newtopic',
					'module_auth'		=> 'ext_borisba/newtopic && acl_a_newtopic',
			))),*/

			// Add permissions
			array('permission.add', array('a_newtopic', true)),
			array('permission.add', array('f_not_change_subject', false)),

			// Set permissions
			array('permission.permission_set', array('ROLE_ADMIN_FULL', 'a_newtopic')),
			array('permission.permission_set', array('ROLE_ADMIN_STANDARD', 'a_newtopic')),
			array('permission.permission_set', array('ROLE_FORUM_FULL', 'f_not_change_subject')),
		);
	}
}
