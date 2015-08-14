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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Täältä voit lähettää sähköpostia kaikille käyttäjille, tai vain tietylle käyttäjäryhmälle, <strong>jotka ovat valinneet haluavansa vastaanottaa sähköposteja</strong>. Sähköpostiviesti lähetetään käyttäen ylläpitäjän sähköpostiosoitetta lähettäjänä ja lähettämällä jokainen viesti piilokopiona (BCC). Oletuksena viestiin sisällytetään vain 20 vastaanottajaa ja mikäli vastaanottajia on enemmän, lähetetään useampi sähköposti. Mikäli lähetät viestin käyttäjäryhmälle, jossa on paljon jäseniä, odota rauhassa äläkä keskeytä toimintoa ennen kuin se on valmis. On aivan normaalia, että sähköpostin lähetykseen kuluu aikaa. Saat ilmoituksen, kun viestit ovat lähetetyt.',
	'ALL_USERS'						=> 'Kaikki käyttäjät',

	'COMPOSE'				=> 'Luo uusi',

	'EMAIL_SEND_ERROR'		=> 'Viestin lähetyksessä tapahtui yksi tai useampi virhe. Ole hyvä ja tarkista %sVirhelokista%s tarkemmat virheilmoitukset.',
	'EMAIL_SENT'			=> 'Viestisi on lähetetty.',
	'EMAIL_SENT_QUEUE'		=> 'Viestisi odottaa lähetystä.',

	'LOG_SESSION'			=> 'Kirjaa sähköpostin tapahtumat kriittiseen lokiin',

	'SEND_IMMEDIATELY'		=> 'Lähetä heti',
	'SEND_TO_GROUP'			=> 'Lähetä ryhmälle',
	'SEND_TO_USERS'			=> 'Lähetä käyttäjille',
	'SEND_TO_USERS_EXPLAIN'	=> 'Tähän laitetut nimet ohittavat mahdolliset käyttäjäryhmien valinnat. Laita jokainen käyttäjätunnus omalle riville.',

	'MAIL_BANNED'			=> 'Lähetä viesti porttikiellossa oleville käyttäjille',
	'MAIL_BANNED_EXPLAIN'	=> 'Voit valita ryhmäviestin lähetyksen yhteydessä saavatko myös porttikiellossa olevat käyttäjät postia.',	
	'MAIL_HIGH_PRIORITY'	=> 'Korkea',
	'MAIL_LOW_PRIORITY'		=> 'Pieni',
	'MAIL_NORMAL_PRIORITY'	=> 'Normaali',
	'MAIL_PRIORITY'			=> 'Sähköpostin tärkeys',
	'MASS_MESSAGE'			=> 'Viestisi',
	'MASS_MESSAGE_EXPLAIN'	=> 'Huomaa, että voit lähettää vain tekstiä. Kaikki muotoilut poistetaan ennen lähetystä.',

	'NO_EMAIL_MESSAGE'		=> 'Kirjoita viesti.',
	'NO_EMAIL_SUBJECT'		=> 'Anna viestille otsikko.',
));
