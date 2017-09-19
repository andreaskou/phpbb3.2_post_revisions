<?php
/** 
* 
* @package Prime Post Revision
* @copyright (c) 2016 Bruninoit
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace bruninoit\ppr\migrations;
class release_0_1_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}
	public function update_schema()
	{
return array(
			'add_tables'	=> array(
				$this->table_prefix . 'ppr'	=> array(
					'COLUMNS'	=> array(
						'revision_id'						=> array('UINT', null, 'auto_increment'),
						'post_id'						=> array('UINT', 0),
						'post_subject'						=> array('VCHAR', ''),
						'post_text'						=> array('TEXT', ''),
						'bbcode_uid'						=> array('VCHAR:8', ''),
						'bbcode_bitfield'						=> array('VCHAR:255', ''),
						'post_edit_time'							=> array('TIMESTAMP', 0),
						'post_edit_user'						=> array('UINT', 0),
					),
					'PRIMARY_KEY'	=> 'revision_id',
				),
			),
		);

	}
	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'ppr'
			),
		);
	}

}
