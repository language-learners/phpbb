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
	'EXTENSION'					=> 'Laajennus',
	'EXTENSIONS'				=> 'Laajennukset',
	'EXTENSIONS_ADMIN'			=> 'Laajennusten hallinta',
	'EXTENSIONS_EXPLAIN'		=> 'Laajennusten hallinat on phpBB palstan työkalu minkä avulla palstan laajennuksia hallita ja valvoa niiden tilatietoja.',
	'EXTENSION_INVALID_LIST'	=> 'Haluttu “%s” laajennus ei löydy.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Haluttua laajennusta ei ole tälle forumille, tarkista phpBB ja PHP ohjelmaversioiden sopivuus (katso yksityiskohtia sivu).',
	'EXTENSION_DIR_INVALID'		=> 'Halutun laajennuksen kirjastopolku ei voimassa ja laajennusta ei voi aktivoida.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Haluttua laajennusta ei voi aktivoida, tarkista laajennuksen vaatimukset.',

	'DETAILS'				=> 'Yksityiskohdat',

	'EXTENSIONS_DISABLED'	=> 'Estetyt laajennukset',
	'EXTENSIONS_ENABLED'	=> 'Sallitut laajennukset',

	'EXTENSION_DELETE_DATA'	=> 'Nollaa tieto',
	'EXTENSION_DISABLE'		=> 'Estä',
	'EXTENSION_ENABLE'		=> 'Salli/aktivoi',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Laajennuksen tietojan nollaus poistaa sen datan ja asetukset. Laajennuksen tiedostot säilyvät ja se voidaan aktivoida uudestaan',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Laajennuksen estäminen säilyttää kaikki sen tiedostot, asetukset ja datan mutta estää sen toiminnan.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Laajennus sallimalla voit käyttää sitä palstallasi.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Laajennuksen datan nollaus kesken. Älä vaihda sivua tai virkistä sitä enenkuin tehtävä on valmis.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Laajennuksen esto kesken. Älä vaihda sivua tai virkistä sitä enenkuin tehtävä on valmis..',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Laajennuksen aktivointi kesken. Älä vaihda sivua tai virkistä sitä enenkuin tehtävä on valmis.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Laajennuksen data nollattu onnistuneesti',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Laajennus estetty onnistuneesti',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Laajennus aktivoitu onnistuneesti',

	'EXTENSION_NAME'			=> 'Laajennuksen nimi',
	'EXTENSION_ACTIONS'			=> 'Toiminta',
	'EXTENSION_OPTIONS'			=> 'Vaihtoehdot',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Laajennuksen päivitys',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Laajennuksen esto</li>
			<li>Nollaa laajennuksen tiedostot tiedostojärjestelmästä</li>
			<li>Lataa uudet tiedostot</li>
			<li>Laajennuksen aktivointi</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Laajennuksen täydellinen poisto palstalta',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Laajennuksen esto</li>
			<li>Laajennuksen datan nollaus</li>
			<li>Poista laajennuksen tiedostot tiedostojärjestelmästä</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Haluatko varmasti nollata datan joka liittyy “%s”?<br /><br />Tämä poistaa kaikki laajennuksen datan ja asetukset eikä niitä voi palauttaa!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Haluatko varmasti estää “%s” laajennuksen?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Haluatko varmasti aktivoida “%s” laajennuksen?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Haluatko varmasti ottaa epävakaan version käyttöön?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Paluu laajennusten luetteloon',

	'EXT_DETAILS'			=> 'Laajennuksen yksityiskohtia',
	'DISPLAY_NAME'			=> 'Naytä Nimi',
	'CLEAN_NAME'			=> 'Tyhjennä Nimi',
	'TYPE'					=> 'Tyyppi',
	'DESCRIPTION'			=> 'Kuvaus',
	'VERSION'				=> 'Versio',
	'HOMEPAGE'				=> 'Kotisivu',
	'PATH'					=> 'Polku',
	'TIME'					=> 'Julkaisu Aika',
	'LICENSE'				=> 'Lisenssi',

	'REQUIREMENTS'			=> 'Vaatimukset',
	'PHPBB_VERSION'			=> 'phpBB Versio',
	'PHP_VERSION'			=> 'PHP Version',
	'AUTHOR_INFORMATION'	=> 'Julkaisjan Tiedot',
	'AUTHOR_NAME'			=> 'Nimi',
	'AUTHOR_EMAIL'			=> 'Sähköposti',
	'AUTHOR_HOMEPAGE'		=> 'Kotisivu',
	'AUTHOR_ROLE'			=> 'Rooli',

	'NOT_UP_TO_DATE'		=> '%s ei ole ajantasalla',
	'UP_TO_DATE'			=> '%s on ajantasalla',
	'ANNOUNCEMENT_TOPIC'	=> 'Julkaisu Ilmoitus',
	'DOWNLOAD_LATEST'		=> 'Ladattava versio',
	'NO_VERSIONCHECK'		=> 'Ei version tarkistus tietoa.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Tarkista versiot uudestaan',
	'FORCE_UNSTABLE'					=> 'Tarkista aina epävakaat versiot',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Versiotarkistuksen asetukset',

	'META_FIELD_NOT_SET'	=> 'Vaadittavaa meta kenttää %s ei ole asetettu.',
	'META_FIELD_INVALID'	=> 'Meta kenttä %s ei käytössä.',
));
