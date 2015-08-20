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
	'ABOUT_USER'			=> 'Profiili',
	'ACTIVE_IN_FORUM'		=> 'Aktiivisin alueella',
	'ACTIVE_IN_TOPIC'		=> 'Aktiivisin viestiketjussa',
	'ADD_FOE'				=> 'Lisää vihamieheksi',
	'ADD_FRIEND'			=> 'Lisää kaveriksi',
	'AFTER'					=> 'Jälkeen',

	'ALL'					=> 'Kaikki',

	'BEFORE'				=> 'Ennen',

	'CC_SENDER'				=> 'Lähetä kopio itselleni',
	'CONTACT_ADMIN'			=> 'Yhteystiedot käyttäjälle',

	'DEST_LANG'				=> 'Kieli',
	'DEST_LANG_EXPLAIN'		=> 'Valitse vastaanottajan kieli. (Jos saatavilla)',

	'EDIT_PROFILE'			=> 'Muuta tietoja',

	'EMAIL_BODY_EXPLAIN'	=> 'Tämä viesti lähetetään pelkkänä tekstinä. Älä käytä HTML:ää tai BBCode:a. Palautusosoitteeksi laitetaan sinun sähköpostiosoite.',
	'EMAIL_DISABLED'		=> 'Pahoittelut, mutta kaikki sähköpostiin liittyvät toiminnot ovat poissa käytöstä.',
	'EMAIL_SENT'			=> 'Sähköposti on lähetetty.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Tämä viesti lähetetään pelkkänä tekstinä. Älä käytä HTML:ää tai BBCode:a. Huomaa, että viestiketjun tiedot on jo lisätty viestiin. Palautusosoitteeksi laitetaan sinun sähköpostiosoitteesi.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Anna toimiva vastaanottajan sähköpostiosoite.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Kirjoita viesti.',
	'EMPTY_MESSAGE_IM'		=> 'Kirjoita viesti.',
	'EMPTY_NAME_EMAIL'		=> 'Anna vastaanottajan oikea nimi.',
	'EMPTY_SENDER_EMAIL'	=> 'Anna voimassa oleva email osoite.',
	'EMPTY_SENDER_NAME'		=> 'Anna lähettäjän nimi.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Anna sähköpostille otsikko.',
	'EQUAL_TO'				=> 'Saman arvoinen',

	'FIND_USERNAME_EXPLAIN'	=> 'Käytä tätä lomaketta etsiäksesi käyttäjiä. Sinun ei tarvitse täyttää kaikkia kenttiä ja voit hakea myös osittaisia vastaavuuksia käyttämällä tähtimerkkiä (*) jokerimerkkinä. Käytä päivämäärissä <kbd>VVVV-KK-PP</kbd>-muotoa, esim. <samp>2002-01-01</samp> tarkoittamaan vuoden 2002 tammikuun ensimmäistä päivää. Voit käyttää valintaruutuja valitaksesi yhden tai useamman käyttäjätunnuksen (riippuen lomakkeesta, voit mahdollisesti laittaa usean käyttäjätunnuksen kerralla). Vaihtoehtoisesti voit valita haluamasi käyttäjät laittamalla rastin ruutuun ja napsauttamalla "Valitse merkityt" nappulaa.',
	'FLOOD_EMAIL_LIMIT'		=> 'Et voi lähettää uutta sähköpostia näin pian edellisen jälkeen. Yritä hetken päästä uudelleen.',

	'GROUP_LEADER'			=> 'Ryhmänvalvoja',

	'HIDE_MEMBER_SEARCH'	=> 'Piilota jäsenhaku',

	'IM_ADD_CONTACT'		=> 'Lisää yhteystieto',
	'IM_DOWNLOAD_APP'		=> 'Lataa sovellus',
	'IM_JABBER'				=> 'Huomaa, että käyttäjät voivat estää kutsumattomat yhteydenotot pikaviestimillä.',
	'IM_JABBER_SUBJECT'		=> 'Tämä on automaattinen viesti. Älä vastaa! Viesti käyttäjältä %1$s missä %2$s',
	'IM_MESSAGE'			=> 'Viestisi',		
	'IM_NAME'				=> 'Nimesi',
	'IM_NO_DATA'			=> 'Tälle käyttäjälle ei ole kontakti-informaatiota.',
	'IM_NO_JABBER'			=> 'Pahoittelut, mutta suora viestintä Jabber käyttäjien kanssa ei ole tuettuna tällä palvelimella. Sinulla täytyy olla Jabber-ohjelma asennettuna ottaaksesi yhteyttä yläpuolella olevaan henkilöön.',
	'IM_RECIPIENT'			=> 'Vastaanottaja',
	'IM_SEND'				=> 'Lähetä viesti',
	'IM_SEND_MESSAGE'		=> 'Lähetä viesti',
	'IM_SENT_JABBER'		=> 'Viestisi %1$s on lähetetty.',
	'IM_USER'				=> 'Lähetä pikaviesti',
	
	'LAST_ACTIVE'				=> 'Viimeisin käynti',
	'LESS_THAN'					=> 'Vähemmän kuin',
	'LIST_USERS'				=> array(
		1	=> '%d käyttäjä',
		2	=> '%d käyttäjää',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Kirjaudu sisään katsoaksesi henkilökunnan tietoja.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Kirjaudu sisään katsoaksesi jäsenluetteloa.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Kirjaudu sisään etsiäksesi käyttäjien tietoja.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Kirjaudu sisään katsoaksesi tätä profiilia.',

	'MORE_THAN'				=> 'Enemmän kuin',

	'NO_CONTACT_FORM'		=> 'Ylläpidon yhteyslomake ei ole käytössä.',
	'NO_CONTACT_PAGE'		=> 'Ylläpidon yhteyssivu ei ole käytössä.',
	'NO_EMAIL'				=> 'Et voi lähettää sähköpostia tälle käyttäjälle.',
	'NO_VIEW_USERS'			=> 'Sinulla ei ole oikeuksia katsoa käyttäjälistaa tai profiileja.',

	'ORDER'					=> 'Järjestys',
	'OTHER'					=> 'Muu',

	'POST_IP'				=> 'Lähetetty IP-osoitteesta/domain-alueelta',

	'REAL_NAME'				=> 'Vastaanottajan nimi',
	'RECIPIENT'				=> 'Vastaanottaja',
	'REMOVE_FOE'			=> 'Poista vihamies',
	'REMOVE_FRIEND'			=> 'Poista ystävä',

	'SELECT_MARKED'			=> 'Valitse merkityt',
	'SELECT_SORT_METHOD'	=> 'Lajittele:',
	'SENDER_EMAIL_ADDRESS'	=> 'Anna lähettäjän sähköpostiosoite',
	'SENDER_NAME'			=> 'Anna lähettäjän nimi',
	'SEND_ICQ_MESSAGE'		=> 'Lähetä ICQ-viesti',
	'SEND_IM'				=> 'Pikaviestintä',
	'SEND_JABBER_MESSAGE'	=> 'Lähetä Jabber-viesti',
	'SEND_MESSAGE'			=> 'Viesti',
	'SEND_YIM_MESSAGE'		=> 'Lähetä YIM-viesti',
	'SORT_EMAIL'			=> 'Sähköposti',
	'SORT_LAST_ACTIVE'		=> 'Viimeisin käynti',
	'SORT_POST_COUNT'		=> 'Viestien lukumäärä',

	'USERNAME_BEGINS_WITH'	=> 'Käyttäjätunnuksen ensimmäinen kirjain',
	'USER_ADMIN'			=> 'Hallinnoi käyttäjää',
	'USER_BAN'				=> 'Porttikielto',
	'USER_FORUM'			=> 'Tilastot',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ei lähetettyjä muistutuksia',
		1		=> '%1$d muistutus lähetetty<br />» %2$s',
		2		=> '%1$d muistutusta lähetetty<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Paikalla',
	'USER_PRESENCE'			=> 'Läsnäolo alueella',
	'USERS_PER_PAGE'		=> 'Käyttäjiä sivulla',

	'VIEWING_PROFILE'		=> '%s - Profiili',
	'VIEW_FACEBOOK_PROFILE'	=> 'Katso Facebook tietoja',
	'VIEW_SKYPE_PROFILE'	=> 'Katso Skype tietoja',
	'VIEW_TWITTER_PROFILE'	=> 'Katso Twitter tietoja',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Katso YouTube tietoja',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Katso Google+ tietoja',
));
