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
	'ACP_FILES'						=> 'Ylläpidon kielitiedostot',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Täällä voit hallita kielipaketteja. Oletuskieli on merkitty tähtimerkillä (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Haluatko varmasti poistaa “%s”?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Asennetut kielipaketit',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Kielen asetukset on päivitetty',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tämä kielipaketti on jo asennettu.',
	'LANGUAGE_PACK_DELETED'				=> 'Kielipaketti “%s” on poistettu. Tätä pakettia käyttäneet käyttäjät on asetettu käyttämään keskustelufoorumin oletuskieltä.',
	'LANGUAGE_PACK_DETAILS'				=> 'Kielipaketin tiedot',
	'LANGUAGE_PACK_INSTALLED'			=> 'Kielipaketti “%s” on asennettu onnistuneesti.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Mukautettujen profiilikenttien tekstit ovat kopioitu oletuskielestä. Voit muuttaa niitä tarvittaessa.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Paikallinen nimi',
	'LANGUAGE_PACK_NAME'				=> 'Nimi',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valitsemaasi kielipakettia ei ole olemassa.',
	'LANGUAGE_PACK_USED_BY'				=> 'Käyttäjät (sisältäen robotit)',
	'LANGUAGE_VARIABLE'					=> 'Kielen muuttuja',
	'LANG_AUTHOR'						=> 'Kielipaketin kirjoittaja',
	'LANG_ENGLISH_NAME'					=> 'Englanninkielinen nimi',
	'LANG_ISO_CODE'						=> 'ISO-koodi',
	'LANG_LOCAL_NAME'					=> 'Paikallinen nimi',

	'MISSING_LANG_FILES'		=> 'Puuttuvat kielitiedostot',
	'MISSING_LANG_VARIABLES'	=> 'Puuttuvat muuttujat',

	'NO_FILE_SELECTED'				=> 'Et ole määritellyt kielitiedostoa.',
	'NO_LANG_ID'					=> 'Et ole määritellyt kielipakettia',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Et voi poistaa oletuskieltä.<br />Jos haluat poistaa tämän kielipaketin, vaihda oletuskieli ensin.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ei poistettuja kielipaketteja',

	'THOSE_MISSING_LANG_FILES'			=> 'Nämä kielipaketin tarvitsemat tiedostot puuttuvat kielen “%s” hakemistosta',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Nämä kielitiedoston muuttujat puuttuvat “%s” kielipaketista',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Poistetut kielipaketit',
));
