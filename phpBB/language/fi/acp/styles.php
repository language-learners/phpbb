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
	'ACP_STYLES_EXPLAIN'	=> 'Täällä voit muokata käytettävissä olevia tyylejä. Voit muokata jo asennettuja tyylejä, poistaa, poistaa käytöstä, ottaa käyttöön asentaa asentaa uusia. Voit katsoa miltä uusi tyyli näyttää käyttämällä esikatselua. Tilasto näyttää myös kuinka monta käyttäjää on asettanut tietyntyylin omaksi tyylikseen. Huomaa, että käyttäjän tyylin ohitus ei näy tässä listassa.',

	'CANNOT_BE_INSTALLED'			=> 'Ei voi asentaa',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Haluatko varmasti poistaa valitsemasi tyylit?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Et voi poistaa oletustyyliä käytöstä.',
	'DELETE_FROM_FS'			=> 'Poista tiedostojärjestelmästä',
	'DELETE_STYLE_FILES_FAILED'	=> 'Virhe style tiedoston poistossa "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Style tiedosto "%s" poistettu.',
	'DETAILS'					=> 'Tiedot',

	'INHERITING_FROM'			=> 'Lainaa komponentteja tyylistä',
	'INSTALL_STYLE'				=> 'Asenna tyyli',
	'INSTALL_STYLES'			=> 'Asenna tyylejä',
	'INSTALL_STYLES_EXPLAIN'	=> 'Täällä voit asentaa uuden tyylin ja mahdollisesti siihen liittyviä elementtejä. Mikäli jotkin elementit ovat jo asennettu. Nitä ei ylikirjoiteta. Jotkut tyylit vaativat tiettyjen elementtien olevan asennettu. Mikäli näitä tyylin vaatimia elementtejä ei ole asennettu. Siitä ilmoitetaan.',
	'INVALID_STYLE_ID'			=> 'Tyyli ID ei kelpaa.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Ei löydy etsimääsi tyyliä.',
	'NO_UNINSTALLED_STYLE'		=> 'En löytänyt asentamattomia tyylejä',

	'PURGED_CACHE'				=> 'Välimuisti tyhjennetty.',

	'REQUIRES_STYLE'			=> 'Tämä tyyli tarvitsee "%s" olla asennettu.',

	'STYLE_ACTIVATE'			=> 'Aktivoi',
	'STYLE_ACTIVE'				=> 'Aktiivinen',
	'STYLE_DEACTIVATE'			=> 'Deaktivoi',
	'STYLE_DEFAULT'				=> 'Aseta oletustyyliksi',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Tyyli pitää ensin aktivoida ja senjälkeen asettaa se oletustyyliksi.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Annettu nimi ei kelpaa.',
	'STYLE_ERR_NAME_EXIST'		=> 'Tämän niminen tyyli on jo olemassa',
	'STYLE_ERR_STYLE_NAME'		=> 'Sinun täytyy antaa nimi tälle tyylille',
	'STYLE_INSTALLED'			=> 'Tyyli "%s" on asennettu.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Palaa asennettujen tyylien listaan',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Asenna lisää tyylejä',
	'STYLE_NAME'				=> 'Tyylin nimi',
	'STYLE_NAME_RESERVED'		=> 'Tyyliä "%s" ei voi asentaa, koska tiedostonimi on jo käytössä.',
	'STYLE_NOT_INSTALLED'		=> 'Tyyli "%s" ei asennettu.',
	'STYLE_PATH'				=> 'Tyylin polku',
	'STYLE_UNINSTALL'			=> 'Poista',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Tyyliä "%s" ei voi poistaa koska sillä on alatyylejä.',
	'STYLE_UNINSTALLED'			=> 'Tyyli "%s" poistettu.',
	'STYLE_USED_BY'				=> 'Käyttäjien lkm',

	'UNINSTALL_DEFAULT'		=> 'Et voi poistaa oletus tyyliä.',
));
