<?php
/**
*
* Prime Post Revision extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 BruninoIt
* @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACL_U_PPR_VIEW'		=> 'Can see the story of posts’ edits',
	'ACL_U_PPR_DELETE'		=> 'Can delete edits of posts',
	'ACL_U_PPR_RESTORE'		=> 'Can restore old version of posts',
	'EXTENSION_BY'		=> 'Extension by',
	'PPR_REVISION'		=> 'Post Revision',
	'PPR_RETURN'		=> 'Return to Post Revision',
	'PPR_TITLE'		=> 'Post Revision',
'PPR_POST' => 'Post Edits',
	'PPR_ORIGINAL' => 'Original post version',
	'PPR_RESTORED'		=> 'Post restored',
	'PPR_DELETED'		=> 'Post revision deleted',
	'PPR_POST_RESTORED' => 'Post restored',
));
