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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Tästä paneelista voita hallita kaikkia käyttäjäryhmiä. Voit poistaa, luoda tai muokata olemassa olevia ryhmiä. Voit valita valvojia, muuttaa avoimen/suljetun ryhmän tilaa ja muuttaa ryhmän nimeä ja kuvausta.',
	'ADD_GROUP_CATEGORY'			=> 'Lisää ryhmä',
	'ADD_USERS'						=> 'Lisää käyttäjiä',
	'ADD_USERS_EXPLAIN'				=> 'Täällä voit lisätä uusia käyttäjiä ryhmään. Voit asettaa tämän ryhmän myös oletusryhmäksi valitsemillesi käyttäjille. Voit myös lisätä ryhmälle valvojia. Lisää jokainen käyttäjä uudelle riville.',

	'COPY_PERMISSIONS'				=> 'Kopioi oikeudet',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Kun ryhmä on luotu. Sillä on samat oikeudet kuin valitsemallasi ryhmällä.',
	'CREATE_GROUP'					=> 'Luo uusi ryhmä',

	'GROUPS_NO_MEMBERS'				=> 'Tässä ryhmässä ei ole jäseniä',
	'GROUPS_NO_MODS'				=> 'Ryhmän valvojia ei ole määritelty',

	'GROUP_APPROVE'					=> 'Hyväksy',
	'GROUP_APPROVED'				=> 'Hyväksytyt käyttäjät',
	'GROUP_AVATAR'					=> 'Ryhmän avatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tämä kuva näytetään ryhmän hallintapaneelissa.',
	'GROUP_CATEGORY_NAME'			=> 'Luokka',
	'GROUP_CLOSED'					=> 'Suljettu',
	'GROUP_COLOR'					=> 'Ryhmän väri',
	'GROUP_COLOR_EXPLAIN'			=> 'Määrittää millä värillä käyttäjätunnus näkyy. Nimimerkki näytetään tällä värillä, jos ryhmä on käyttäjän oletusryhmä. Jätä tyhjäksi käyttääksesi oletusväriä.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Haluatko varmasti lisätä käyttäjän %2$s ryhmään?',
		2	=> 'Haluatko varmasti lisätä käyttäjät %2$s ryhmään?',
	),
	'GROUP_CREATED'					=> 'Ryhmä on luotu',
	'GROUP_DEFAULT'					=> 'Oletus',
	'GROUP_DEFS_UPDATED'			=> 'Oletusryhmä on asetettu kaikille valituille jäsenille',
	'GROUP_DELETE'					=> 'Poista',
	'GROUP_DELETED'					=> 'Ryhmä on poistettu ja oletusryhmät ovat asetettu',
	'GROUP_DEMOTE'					=> 'Alenna',
	'GROUP_DESC'					=> 'Ryhmän kuvaus',
	'GROUP_DETAILS'					=> 'Ryhmän tiedot',
	'GROUP_EDIT_EXPLAIN'			=> 'Täällä voit muokata jo olemassaolevaa ryhmää. Voit muokata sen nimeä, kuvausta ja tyyppiä (avoin, suljettu, jne.). Voit myös asettaa joitain ryhmälle yhteisiä asetuksia, kuten väritystä, arvoa, jne. Täällä tehdyt asetukset ohittavat käyttäjän omat asetukset. Huomaa, että ryhmän jäsenet voivat muuttaa avatariaan, ellet aseta oikeuksia estääksesi tämän.',
	'GROUP_ERR_USERS_EXIST'			=> 'Antamasi käyttäjät ovat jo tämän ryhmän jäseniä',
	'GROUP_FOUNDER_MANAGE'			=> 'Vain perustaja voi muokata',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Sallii ryhmän muokkauksen vain perustajan arvon omaaville käyttäjille.',
	'GROUP_HIDDEN'					=> 'Piilotettu',
	'GROUP_LANG'					=> 'Ryhmän kieli',
	'GROUP_LEAD'					=> 'Ryhmän valvojat',
	'GROUP_LEADERS_ADDED'			=> 'Ryhmälle on annettu uudet valvojat.',
	'GROUP_LEGEND'					=> 'Näytä ryhmä selitteessä',
	'GROUP_LIST'					=> 'Nykyiset jäsenet',
	'GROUP_LIST_EXPLAIN'			=> 'Tässä on täydellinen lista tähän ryhmään kuuluvista käyttäjistä. Voit poistaa käyttäjiä (paitsi joistain tietyistä ryhmistä) tai tarvittaessa lisätä uusia.',
	'GROUP_MEMBERS'					=> 'Ryhmän jäsenet',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Tässä on täydellinen lista tähän ryhmään kuuluvista käyttäjistä. valvojat, odottavat ja hyväksyty käyttäjät. Täällä voi muokata ryhmän jäsenyyksiä ja heidän rooliaan. Poistaaksesi ryhmältä valvojan, mutta pitääksesi hänet silti ryhmässä. Valitse Alenna, älä Poista. Samaten voit valita Ylennä, antaaksesi jollekin jäsenelle valvojan oikeudet ryhmään.',
	'GROUP_MESSAGE_LIMIT'			=> 'Ryhmän yksityisviestien rajoitus per kansio',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Tämä asetus ohittaa käyttäjän rajoituksen yksityisviesteissä. Arvo 0 tarkoittaa, että käyttäjän oletusasetus on käytössä.',
	'GROUP_MODS_ADDED'				=> 'Uudet ryhmän valvojat on määritelty.',
	'GROUP_MODS_DEMOTED'			=> 'Ryhmän valvojat on alennettu',
	'GROUP_MODS_PROMOTED'			=> 'Ryhmän jäsenet on ylennetty',
	'GROUP_NAME'					=> 'Ryhmän nimi',
	'GROUP_NAME_TAKEN'				=> 'Antamasi ryhmän nimi on jo käytössä. Ole hyvä ja valitse toinen nimi.',
	'GROUP_OPEN'					=> 'Avoin',
	'GROUP_PENDING'					=> 'Odottavat jäsenet',
	'GROUP_MAX_RECIPIENTS'          => 'Yksityisviestien vastaanottajien enimmäismäärä',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'  => 'Kuinka monta vastaanottajaa yksityisviestillä voi olla. Nolla ottaa käyttöön foorumin oletusasetuksen.',
	'GROUP_OPTIONS_SAVE'			=> 'Ryhmänlaajuiset vaihtoehdot',
	'GROUP_PROMOTE'					=> 'Ylennä',
	'GROUP_RANK'					=> 'Ryhmän arvonimi',
	'GROUP_RECEIVE_PM'				=> 'Ryhmälle voi lähettää yksityisviestejä',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Huomaa, että piilotetuille ryhmille ei voi lähettää viestejä, vaikka tämä asetus sen sallisikin.',
	'GROUP_REQUEST'					=> 'Pyydä',
	'GROUP_SETTINGS_SAVE'			=> 'Ryhmänlaajuiset asetukset',
	'GROUP_SKIP_AUTH'				=> 'Poista ryhmän johtajan oikeudet',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Jos asetettu, ryhmän johtaja ei enää peri oikeuksia ryhmältä.',
	'GROUP_SPECIAL'					=> 'Esi-asetettu',
	'GROUP_TEAMPAGE'				=> 'Näytä ryhmä tiimin sivulla',
	'GROUP_TYPE'					=> 'Ryhmän tyyppi',
	'GROUP_TYPE_EXPLAIN'			=> 'Tämä määrittelee, mitkä käyttäjät voivat nähdä ja liittyä tähän ryhmään.',
	'GROUP_UPDATED'					=> 'Ryhmän asetukset on päivitetty.',

	'GROUP_USERS_ADDED'				=> 'Uudet käyttäjät ovat lisätty.',
	'GROUP_USERS_EXIST'				=> 'Valitut käyttäjät ovat jo jäseniä.',
	'GROUP_USERS_REMOVE'			=> 'Käyttäjät ovat poistettu ryhmästä ja oletukset on asetettu',

	'LEGEND_EXPLAIN'				=> 'Nämä ryhmät näkyvät ryhmän luettelossa:',
	'LEGEND_SETTINGS'				=> 'Luettelon asetukset',
	'LEGEND_SORT_GROUPNAME'			=> 'lajittele luettelo nimen mukaan',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Allaoleva järjestys ei ole voimassa kun tämä asetus on päällä.',

	'MANAGE_LEGEND'			=> 'Hallinnoi ryhmäluetteloa',
	'MANAGE_TEAMPAGE'		=> 'Hallinnoi teampage',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Luo tästä ryhmästä käyttäjien oletusryhmä',
	'MEMBERS'				=> 'Jäsenet',

	'NO_GROUP'					=> 'Ryhmää ei ole määritelty',
	'NO_GROUPS_ADDED'			=> 'Ei ryhmiä lisätty.',
	'NO_GROUPS_CREATED'			=> 'Käyttäjäryhmiä ei ole vielä luotu.',
	'NO_PERMISSIONS'			=> 'Älä kopioi oikeuksia',
	'NO_USERS'					=> 'Et antanut yhtään käyttäjää.',
	'NO_USERS_ADDED'			=> 'Yhtään käyttäjää ei lisätty ryhmään.',
	'NO_VALID_USERS'			=> 'Et ole antanut yhtään soveliasta käyttäjää tälle toiminnolle.',

	'SELECT_GROUP'				=> 'Valitse ryhmä',
	'SPECIAL_GROUPS'			=> 'Alustavasti määritellyt ryhmät',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Alustavasti määritellyt ryhmät ovat erityisiä ryhmiä, niitä ei voi poistaa tai muokata suoraan. Voit kuitenkin lisätä jäseniä ja muuttaa perusasetuksia. Valitsemalla "Oletus" voit asettaa ryhmän kaikkien jäsenien oletusryhmäksi.',

	'TEAMPAGE'					=> 'Tiimi sivu',
	'TEAMPAGE_DISP_ALL'			=> 'Kaikki jäsenet',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Käyttäjän oletus ryhmä',
	'TEAMPAGE_DISP_FIRST'		=> 'Näytä ensimmäinen jäsen',
	'TEAMPAGE_EXPLAIN'			=> 'Nämä ryhmät näytetään tiimisivuilla:',
	'TEAMPAGE_FORUMS'			=> 'Näytä tukiryhmän forum',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Kun ON, tukihenkilöt saavat listan kaikista forumeista missä tukihenkilön oikeudet. Isolla forumilla tämä tarvitsee paljon DB-resursseja.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Näytä käyttäjän jäsenyydet',
	'TEAMPAGE_SETTINGS'			=> 'Tiimi sivun asetukset',
	'TOTAL_MEMBERS'				=> 'Jäsenet',

	'USERS_APPROVED'				=> 'Käyttäjät on hyväksytty.',
	'USER_DEFAULT'					=> 'Käyttäjän oletus',
	'USER_DEF_GROUPS'				=> 'Käyttäjän määrittelemät ryhmät',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Nämä ovat sinun, tai jonkun muun luomia ryhmiä. Voit muokata ryhmän asetuksia tai poistaa sen kokonaan. Valitsemalla "Oletus" voit asettaa ryhmän kaikkien jäsenien oletusryhmäksi.',
	'USER_GROUP_DEFAULT'			=> 'Aseta oletusryhmäksi',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Jos vastaat kyllä, tämä ryhmä laitetaan jäseniensä oletusryhmäksi',
	'USER_GROUP_LEADER'				=> 'Aseta ryhmän valvojaksi',
));
