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
	'ACL_U_PPR_VIEW'		=> 'Può vedere lo storiche di modifiche dei post',
	'ACL_U_PPR_DELETE'		=> 'Può eliminare post dallo storico di modifiche',
	'ACL_U_PPR_RESTORE'		=> 'Può ripristinare i post dallo storico di modifiche',
	'EXTENSION_BY'		=> 'Estensione creata da',
	'PPR_REVISION'		=> 'Revisione del post',
	'PPR_RETURN'		=> 'Ritorna alla revisione del post',
	'PPR_TITLE'		=> 'Revisione Post',
	'PPR_POST' => 'Modifiche al post',
	'PPR_ORIGINAL' => 'Versione originale del post',
	'PPR_RESTORED'		=> 'Post ripristinato',
	'PPR_DELETED'		=> 'Post eliminato',
	'PPR_POST_RESTORED' => 'Post ripristinato',
));
