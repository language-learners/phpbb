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
	'APPROVE'								=> 'Hyväksy',
	'ATTACHMENT'						=> 'Liitteet',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Liitetiedostot eivät ole käytettävissä.',

	'BOOKMARK_ADDED'		=> 'Kirjanmerkki on lisätty.',
	'BOOKMARK_ERR'			=> 'Kirjanmerkin lisääminen epäonnistui. Ole hyvä ja yritä uudelleen.',
	'BOOKMARK_REMOVED'		=> 'Kirjanmerkki on poistettu.',
	'BOOKMARK_TOPIC'		=> 'Lisää kirjanmerkki',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Poista kirjanmerkeistä',
	'BUMPED_BY'				=> '%1$s on tönäissyt viestiketjua viimeksi klo %2$s',
	'BUMP_TOPIC'			=> 'Tönäise viestiä',

	'CODE'					=> 'Koodi',

	'DELETE_TOPIC'			=> 'Poista viestiketju',
	'DELETED_INFORMATION'	=> '%1$s poistanut %2$s',
	'DISAPPROVE'					=> 'Hylkäys',
	'DOWNLOAD_NOTICE'		=> 'Sinulla ei ole tarvittavia oikeuksia nähdäksesi tämän viestin liitetiedostoja.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Viimeksi muokannut %2$s, %3$s. Yhteensä muokattu %1$d kertaa.',
		2	=> 'Viimeksi muokannut %2$s, %3$s. Yhteensä muokattu %1$d kertaa.',
	),
	'EMAIL_TOPIC'			=> 'Lähetä kaverille',
	'ERROR_NO_ATTACHMENT'	=> 'Valitsemaasi liitetiedostoa ei ole olemassa',

	'FILE_NOT_FOUND_404'	=> 'Tiedostoa <strong>%s</strong> ei ole.',
	'FORK_TOPIC'			=> 'Kopioi viestiketju',
	'FULL_EDITOR'			=> 'Täysi editori ja esikatselu',

	'LINKAGE_FORBIDDEN'		=> 'Sinulla ei ole oikeuksia nähdä, ladata tai linkittää tältä sivulta.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Teille on ilmoitettu tästä viestistä. Kirjaudu sisään nähdäksesi sen.',
	'LOGIN_VIEWTOPIC'		=> 'Ylläpito on määrännyt, että sinun pitää olla rekisteröitynyt käyttäjä ja kirjautua sisään nähdäksesi tämän viestin.',

	'MAKE_ANNOUNCE'				=> 'Muuta tiedotteeksi',
	'MAKE_GLOBAL'				=> 'Muuta yleistiedotteeksi',
	'MAKE_NORMAL'				=> 'Muuta normaaliksi',
	'MAKE_STICKY'				=> 'Muuta pysyväksi',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Voit valita <strong>%d</strong> vaihtoehdon',
		2	=> 'Voit valita enintään <strong>%d</strong> vaihtoehtoa',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Liitetiedosto <strong>%s</strong> ei ole enää saatavilla',
	'MOVE_TOPIC'				=> 'Siirrä viestiketju',

	'NO_ATTACHMENT_SELECTED'=> 'Et ole valinnut yhtäkään liitetiedostoa nähtäväksi tai ladattavaksi.',
	'NO_NEWER_TOPICS'		=> 'Tällä alueella ei ole uudempia viestejä',
	'NO_OLDER_TOPICS'		=> 'Tällä alueella ei ole vanhempia viestjä',
	'NO_UNREAD_POSTS'		=> 'Tässä viestiketjussa ei ole uusia viestejä.',
	'NO_VOTE_OPTION'		=> 'Anna äänestykselle vaihtoehto.',
	'NO_VOTES'				=> 'Ei ääniä',

	'POLL_ENDED_AT'			=> 'Äänestys päättyi %s',
	'POLL_RUN_TILL'			=> 'Äänestys on voimassa %s asti',
	'POLL_VOTED_OPTION'		=> 'Äänestit tätä vaihtoehtoa',
	'POST_DELETED_RESTORE'	=> 'Tämä viesti on poistettu, se voidaan palauttaa.',
	'PRINT_TOPIC'			=> 'Tulostusnäkymä',

	'QUICK_MOD'				=> 'Valvojan työkalut',
	'QUICKREPLY'			=> 'Pikavastaus',
	'QUOTE'					=> 'Lainaa',

	'REPLY_TO_TOPIC'		=> 'Vastaa viestiin',
	'RESTORE'				=> 'Palauta',
	'RESTORE_TOPIC'			=> 'Palauta aihe',
	'RETURN_POST'			=> '%sPalaa viestiin%s',

	'SUBMIT_VOTE'			=> 'Äänestä',

	'TOPIC_TOOLS'			=> 'Viestiketjun työkalut',
	'TOTAL_VOTES'			=> 'Ääniä yhteensä',

	'UNLOCK_TOPIC'			=> 'Avaa viestiketju',

	'VIEW_INFO'				=> 'Viestin yksityiskohdat',
	'VIEW_NEXT_TOPIC'		=> 'Seuraava viestiketju',
	'VIEW_PREVIOUS_TOPIC'	=> 'Edellinen viestiketju',
	'VIEW_RESULTS'			=> 'Näytä tulokset',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d viesti',
		2	=> '%d viestiä',
	),
	'VIEW_UNREAD_POST'		=> 'Ensimmäinen lukematon viesti',
	'VOTE_SUBMITTED'		=> 'Äänestyksesi on kirjattu.',
	'VOTE_CONVERTED'		=> 'Äänestysvaihtoehdon vaihtaminen ei ole sallittua muunnetussa äänestyksessä.',

));
