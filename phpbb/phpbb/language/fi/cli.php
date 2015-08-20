<?php
/**
 *
 * This file is part of the Finnish language pack
 *
 * @copyright (c) phpBB Suomi <https://www.phpbbsuomi.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Valitse tämä asetus jos konfigurointi muuttuu niin nopeasti ettei sitä ole cache muistissa.',
	'CLI_CONFIG_CURRENT'				=> 'Nykyinen asetusarvo, käytä 0 tai 1 (boolean luku) sen tilalla',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Asetus poistettu onnistuneesti: %s.',
	'CLI_CONFIG_NEW'					=> 'Uusi asetusarvo, käytä 0 tai 1 lukua',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Asetusarvoa %s ei ole määritelty',
	'CLI_CONFIG_OPTION_NAME'			=> 'Asetusarvon muuttujan nimi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Valitse tämä asetus jos haluat tulostaa luvun ilman rivinsiirtoa.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Luku jonka arvoa kasvatetaan',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Asetusarvon %s muutos suoritettu',
	'CLI_CONFIG_SET_FAILURE'			=> 'Asetusarvon %s muutos epäonnistui',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Asetusarvon %s muutos onnistui',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Tulosta luettelo cron-job tehtävistä.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Suorita kaikki cron-job tehtävät.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Anna suoritettavan cron-job tehtävän nimi',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Tietokannan päivitys (migration).',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Nollaa asetusarvo',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Pysäytä määrätty laajennus.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Salli määrätty laajennus.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Etsi muutokset joilla ei ole riippuvuuksia.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Hae asetusarvo',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Kasvata asetusarvon muuttujaa',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Näytä kaikki tietokannan ja tiedostojärjestelmän laajennukset.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Huolto tila (Safe Mode, without extensions).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Aukaise komento ikkuna (shell).',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Poista määrätty laajennus.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Laske uusi user_email_hash sarake käyttäjätaulukkoon.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Aseta uusi asetusarvo vain jos se vastaa vanhaa asetusarvoa',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Aseta uusi asetusarvo',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ei voi pysäyttää laajennusta %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Pysäytetty onnistuneesti laajennus %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ei voi aktivoida laajennusta %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Onnistunut aktivointi laajennukselle %s',
	'CLI_EXTENSION_NAME'				=> 'Laajennuksen nimi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ei voi poistaa laajennusta %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Onnistuneesti poistettu laajennus %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ei laajennuksia käytössä.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Käytettävissä',
	'CLI_EXTENSIONS_DISABLED'			=> 'Estetty',
	'CLI_EXTENSIONS_ENABLED'			=> 'Sallittu',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Kaikki email-hash kentät laskettu uudestaan.',
));
