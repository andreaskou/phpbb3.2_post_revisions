<?php
/** 
* 
* @package Prime Post Revisions
* @copyright (c) 2016 BruninoIt
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace bruninoit\ppr\migrations;
class release_0_1_0_perm extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}
	public function update_data()
	{
	return array(
	array('permission.add', array('u_ppr_view', true)),
	array('permission.add', array('u_ppr_restore', true)),
	array('permission.add', array('u_ppr_delete', true)),


	array('permission.permission_set', array('ROLE_ADMIN_FULL', 'u_ppr_view', 'rule', true)),
	array('permission.permission_set', array('ROLE_ADMIN_FULL', 'u_ppr_delete', 'rule', true)),
	array('permission.permission_set', array('ROLE_ADMIN_FULL', 'u_ppr_restore', 'rule', true)),
  );
}
}
