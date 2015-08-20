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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Bottien hallinta',
	'BOTS_EXPLAIN'		=> '&quot;Botit&quot;, &quot;spiderit&quot; ja &quot;ryömijät&quot; ovat automaattisia ohjelmia, jotka vierailevat sivustollasi. Näitä käytetään yleensä hakukoneiden toimesta omien tietokantojensa päivittämiseen. Botit eivät välttämättä osaa käyttää istuntoja oikein, joten ne voivat vääristää käyttäjien määrää, kuormittaa palvelinta ja joissain tapauksissa jopa epäonnistua sivuston lukemisessa hakukoneita varten. Täällä voit asettaa erityisen käyttäjän näille korjataksesi aiheutuneita ongelmia.',
	'BOT_ACTIVATE'		=> 'Aktivoi',
	'BOT_ACTIVE'		=> 'Botti on aktiivinen',
	'BOT_ADD'			=> 'Lisää botti',
	'BOT_ADDED'			=> 'Uusi botti on lisätty',
	'BOT_AGENT'			=> 'Agentin vastaavuus',
	'BOT_AGENT_EXPLAIN'	=> 'Merkkijono, joka täsmää botin selaimen agenttiin; osittaiset vastaavuudet ovat sallittu.',
	'BOT_DEACTIVATE'	=> 'Poista käytöstä',
	'BOT_DELETED'		=> 'Botti on poistettu',
	'BOT_EDIT'			=> 'Muokkaa botteja',
	'BOT_EDIT_EXPLAIN'	=> 'Täällä voit lisätä tai muokata olemassaolevan botin tietoja. Voit määrittää agentin merkkijonon ja/tai yhden tai useamman IP-osoitteen (tai osoitealueen) josta haetaan vastaavuutta. Ole varovainen, kun määrittelet agentin merkkijonoja tai osoitteita. Voit myös valita boteille näytettävän kielen ja tyylin. Voit mahdollisesti pienentää kaistasi käyttöä antamalla boteille jonkin yksinkertaisen tyylin. Muista myös asettaa botien oikeudet omassa ryhmässään.',
	'BOT_LANG'			=> 'Botin kieli',
	'BOT_LANG_EXPLAIN'	=> 'Botillle näytettävä kieli.',
	'BOT_LAST_VISIT'	=> 'Vieraillut viimeksi',
	'BOT_IP'			=> 'Botin IP-osoite',
	'BOT_IP_EXPLAIN'	=> 'Osittaiset vastaavuudet ovat sallittuja, erota osoitteet toisistaan puolipisteellä.',
	'BOT_NAME'			=> 'Botin nimi',
	'BOT_NAME_EXPLAIN'	=> 'Käytetään vain omaan tietoosi.',
	'BOT_NAME_TAKEN'	=> 'Tämä nimi on jo käytössä, joten sitä ei voi antaa botille.',
	'BOT_NEVER'			=> 'Ei koskaan',
	'BOT_STYLE'			=> 'Botin tyyli',
	'BOT_STYLE_EXPLAIN'	=> 'Botille näytettävä tyyli.',
	'BOT_UPDATED'		=> 'Olemassaoleva botti on päivitetty.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Antamasi botin agentti on samankaltainen, kuin jo käytössäsi oleva. Ole hyvä ja muokkaa tätä agenttia.',
	'ERR_BOT_NO_IP'				=> 'Antamasi IP-osoite on epäkelpo tai isäntänimeä ei saatu selville.',
	'ERR_BOT_NO_MATCHES'		=> 'Anna ainakin yksi IP tai merkkijono, josta botti voidaan tunnistaa.',

	'NO_BOT'		=> 'Antamallasi tunnisteella ei löytynyt botteja',
	'NO_BOT_GROUP'	=> 'Bottien käyttäjäryhmää ei löytynyt.',
));
