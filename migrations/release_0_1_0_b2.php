<?php
/**
 *
 * @package Prime Post Revision
 * @copyright (c) 2016 Bruninoit
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
*/

namespace bruninoit\ppr\migrations;

class release_0_1_0_b2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\phpbb\db\migration\data\v310\gold',
			'\bruinoit\ppr\migrations\release_0_1_0',
		);
	}

	public function update_schema()
	{
return array(
			'add_columns' => array(
				$this->table_prefix . 'ppr' => array(
					'post_edit_reason' => array('VCHAR:255', ''),
				),
			),
		);

	}


}
