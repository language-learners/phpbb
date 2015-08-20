<?php
/**
 *
 * This file is part of the Finnish language pack
 *
 * @copyright (c) phpBB Suomi <https://www.phpbbsuomi.com>
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Aktiiviset viestiketjut',
	'ANNOUNCEMENTS'			=> 'Tiedotteet',

	'FORUM_PERMISSIONS'		=> 'Keskustelualueen oikeudet',

	'ICON_ANNOUNCEMENT'		=> 'Tiedote',
	'ICON_STICKY'			=> 'Pysyvä',

	'LOGIN_NOTIFY_FORUM'	=> 'Teille on kerrottu tästä keskustelufoorumista. Kirjaudu sisään nähdäksesi sen.',

	'MARK_TOPICS_READ'		=> 'Merkitse viestit luetuiksi',

	'NEW_POSTS_HOT'			=> 'Uusia viestejä [ Suosittu ]', // ei käytössä
	'NEW_POSTS_LOCKED'		=> 'Uusia viestejä [ Lukittu ]', // ei käytössä
	'NO_NEW_POSTS_HOT'		=> 'Ei uusia viestejä [ Suosittu ]', // ei käytössä
	'NO_NEW_POSTS_LOCKED'	=> 'Ei uusia viestejä [ Lukittu ]', // ei käytössä
	'NO_READ_ACCESS'			=> 'Käytössäsi olevat oikeudet eivät salli tämän alueen viestien lukemista.',
	'NO_UNREAD_POSTS_HOT'		=> 'Ei lukemattomia viestejä [ Suosittu ]',
	'NO_UNREAD_POSTS_LOCKED'		=> 'Ei lukemattomia viestejä [ Lukittu ]',

	'POST_FORUM_LOCKED'		=> 'Alue on lukittu',

	'TOPICS_MARKED'			=> 'Tämän alueen viestit ovat merkitty luetuiksi.',

	'UNREAD_POSTS_HOT'			=> 'Lukemattomia viestejä [ Suosittu ]',
	'UNREAD_POSTS_LOCKED'		=> 'Lukemattomia viestejä [ Lukittu ]',

	'VIEW_FORUM'			=> 'Näytä alue',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d viestiketju',
		2	=> '%d viestiketjua',
	),
));
