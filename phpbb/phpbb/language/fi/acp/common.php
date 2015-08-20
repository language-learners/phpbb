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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Ylläpitäjät',
	'ACP_ADMIN_LOGS'			=> 'Ylläpitäjien loki',
	'ACP_ADMIN_ROLES'			=> 'Ylläpitäjän rooli',
	'ACP_ATTACHMENTS'			=> 'Liitetiedostot',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Liitetiedostojen asetukset',
	'ACP_AUTH_SETTINGS'			=> 'Tunnistautuminen',
	'ACP_AUTOMATION'			=> 'Automaatio',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar-asetukset',

	'ACP_BACKUP'				=> 'Varmuuskopio',
	'ACP_BAN'					=> 'Porttikielto',
	'ACP_BAN_EMAILS'			=> 'Porttikielto sähköpostin mukaan',
	'ACP_BAN_IPS'				=> 'Porttikielto IP:n mukaan',
	'ACP_BAN_USERNAMES'			=> 'Porttikielto käyttäjätunnusten mukaan ',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Keskustelufoorumin asetukset',
	'ACP_BOARD_FEATURES'		=> 'Yleiset toiminnot',
	'ACP_BOARD_MANAGEMENT'		=> 'Hallinta',
	'ACP_BOARD_SETTINGS'		=> 'Yleiset asetukset',
	'ACP_BOTS'					=> 'Spiderit/Robotit',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Asetuksia',
	'ACP_CAT_DATABASE'			=> 'Tietokanta',
	'ACP_CAT_DOT_MODS'			=> 'Laajennokset',
	'ACP_CAT_FORUMS'			=> 'Alueet',
	'ACP_CAT_GENERAL'			=> 'Yleinen',
	'ACP_CAT_MAINTENANCE'		=> 'Huolto',
	'ACP_CAT_PERMISSIONS'		=> 'Oikeudet',
	'ACP_CAT_POSTING'			=> 'Viestien lähetys',
	'ACP_CAT_STYLES'			=> 'Tyylit',
	'ACP_CAT_SYSTEM'			=> 'Järjestelmä',
	'ACP_CAT_USERGROUP'			=> 'Käyttäjät ja ryhmät',
	'ACP_CAT_USERS'				=> 'Käyttäjät',
	'ACP_CLIENT_COMMUNICATION'	=> 'Asiakasohjelman kommunikointi',
	'ACP_COOKIE_SETTINGS'		=> 'Evästeiden asetukset',
	'ACP_CONTACT'				=> 'Kontakti sivu',
	'ACP_CONTACT_SETTINGS'		=> 'Kontakti sivun asetuksia',
	'ACP_CRITICAL_LOGS'			=> 'Virheiden loki',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Mukautetut profiilikentät',

	'ACP_DATABASE'				=> 'Tietokannan hallinta',
	'ACP_DISALLOW'				=> 'Kiellä',
	'ACP_DISALLOW_USERNAMES'	=> 'Kiellä käyttäjätunnukset',

	'ACP_EMAIL_SETTINGS'		=> 'Sähköpostiasetukset',
	'ACP_EXTENSION_GROUPS'		=> 'Liitetiedostojen tunnisteryhmien asetukset',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Laajennusten hallinta',
	'ACP_EXTENSIONS'			=> 'Hallinnoi laajennuksia',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Alueeseen perustuvat oikeudet',
	'ACP_FORUM_LOGS'				=> 'Alueen lokit',
	'ACP_FORUM_MANAGEMENT'			=> 'Alueen hallinta',
	'ACP_FORUM_MODERATORS'			=> 'Alueen valvojat',
	'ACP_FORUM_PERMISSIONS'			=> 'Alueen oikeudet',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopioi alueen oikeudet',
	'ACP_FORUM_ROLES'				=> 'Alueen roolit',

	'ACP_GENERAL_CONFIGURATION'		=> 'Yleisasetukset',
	'ACP_GENERAL_TASKS'				=> 'Yleiset tehtävät',
	'ACP_GLOBAL_MODERATORS'			=> 'Valvojat',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Yleiset oikeudet',
	'ACP_GROUPS'					=> 'Ryhmät',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Ryhmien oikeudet alueilla',
	'ACP_GROUPS_MANAGE'				=> 'Hallitse ryhmiä',
	'ACP_GROUPS_MANAGEMENT'			=> 'Ryhmän hallinta',
	'ACP_GROUPS_PERMISSIONS'		=> 'Ryhmän oikeudet',
	'ACP_GROUPS_POSITION'			=> 'Hallitse ryhmän asetuksia',

	'ACP_ICONS'					=> 'Viestiketjujen kuvakkeet',
	'ACP_ICONS_SMILIES'			=> 'Viestiketjujen kuvakkeet/hymiöt',
	'ACP_INACTIVE_USERS'		=> 'Käyttäjä poissa',
	'ACP_INDEX'					=> 'Ylläpidon etusivu',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-asetukset',

	'ACP_LANGUAGE'				=> 'Kielten hallinta',
	'ACP_LANGUAGE_PACKS'		=> 'Kielipaketit',
	'ACP_LOAD_SETTINGS'			=> 'Kuormituksen asetukset',
	'ACP_LOGGING'				=> 'Kirjaa lokiin',

	'ACP_MAIN'					=> 'Ylläpidon etusivu',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Hallitse liitteitä',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Tässä voit katsoa ja poistaa viestien liitetiedostot',

	'ACP_MANAGE_EXTENSIONS'		=> 'Liitetiedostojen tunnisteiden hallinta',
	'ACP_MANAGE_FORUMS'			=> 'Alueiden hallinta',
	'ACP_MANAGE_RANKS'			=> 'Arvonimien hallinta',
	'ACP_MANAGE_REASONS'		=> 'Hallitse ilmoituksia/hylkäyksen syitä',
	'ACP_MANAGE_USERS'			=> 'Hallitse käyttäjiä',
	'ACP_MASS_EMAIL'			=> 'Joukkopostitus',
	'ACP_MESSAGES'				=> 'Viestit',
	'ACP_MESSAGE_SETTINGS'		=> 'Yksityisviestien asetukset',
	'ACP_MODULE_MANAGEMENT'		=> 'Moduulien hallinta',
	'ACP_MOD_LOGS'				=> 'Valvojien lokitiedot',
	'ACP_MOD_ROLES'				=> 'Valvojien roolit',

	'ACP_NO_ITEMS'				=> 'Ei kohteita.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Orvot liitetiedostot',

	'ACP_PERMISSIONS'			=> 'Oikeudet',
	'ACP_PERMISSION_MASKS'		=> 'Oikeuksien maskit',
	'ACP_PERMISSION_ROLES'		=> 'Oikeuksien roolit',
	'ACP_PERMISSION_TRACE'		=> 'Oikeuksien jäljitys',
	'ACP_PHP_INFO'				=> 'PHP:n tiedot',
	'ACP_POST_SETTINGS'			=> 'Viestien lähetyksen asetukset',
	'ACP_PRUNE_FORUMS'			=> 'Automaattinen siivous',
	'ACP_PRUNE_USERS'			=> 'Käyttäjien siivoaminen',
	'ACP_PRUNING'				=> 'Siivoaminen',

	'ACP_QUICK_ACCESS'			=> 'Pikalinkit',

	'ACP_RANKS'					=> 'Arvonimet',
	'ACP_REASONS'				=> 'Ilmoitus/hylkäyksen syy',
	'ACP_REGISTER_SETTINGS'		=> 'Rekisteröitymisen asetukset',

	'ACP_RESTORE'				=> 'Palauta',

	'ACP_FEED'					=> 'Syötteiden hallinta',
	'ACP_FEED_SETTINGS'			=> 'Syötteiden asetukset',

	'ACP_SEARCH'				=> 'Hakutoiminnon asetukset',
	'ACP_SEARCH_INDEX'			=> 'Hakutoiminnon sisällysluettelo',
	'ACP_SEARCH_SETTINGS'		=> 'Hakutoiminnon asetukset',

	'ACP_SECURITY_SETTINGS'		=> 'Tietoturva-asetukset',
	'ACP_SEND_STATISTICS'		=> 'Lähetä tilastotiedot',
	'ACP_SERVER_CONFIGURATION'	=> 'Palvelimen konfiguraatio',
	'ACP_SERVER_SETTINGS'		=> 'Palvelimen asetukset',
	'ACP_SIGNATURE_SETTINGS'	=> 'Allekirjoituksen asetukset',
	'ACP_SMILIES'				=> 'Hymiöt',
	'ACP_STYLE_MANAGEMENT'		=> 'Tyylien hallinta',
	'ACP_STYLES'				=> 'Tyylit',
	'ACP_STYLES_CACHE'			=> 'Nollaa välimuisti',
	'ACP_STYLES_INSTALL'		=> 'Asenna tyyli',

	'ACP_SUBMIT_CHANGES'		=> 'Lähetä muutokset',

	'ACP_TEMPLATES'				=> 'Mallineet',
	'ACP_THEMES'				=> 'Teemat',

	'ACP_UPDATE'					=> 'Päivittää',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Käyttäjien oikeudet alueittain',
	'ACP_USERS_LOGS'				=> 'Käyttäjien lokitiedot',
	'ACP_USERS_PERMISSIONS'			=> 'Käyttäjien oikeudet',
	'ACP_USER_ATTACH'				=> 'Liitetiedostot',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Muistiinpanot',
	'ACP_USER_GROUPS'				=> 'Ryhmät',
	'ACP_USER_MANAGEMENT'			=> 'Käyttäjien hallinta',
	'ACP_USER_OVERVIEW'				=> 'Yleiset',
	'ACP_USER_PERM'					=> 'Oikeudet',
	'ACP_USER_PREFS'				=> 'Asetukset',
	'ACP_USER_PROFILE'				=> 'Profiili',
	'ACP_USER_RANK'					=> 'Arvonimi',
	'ACP_USER_ROLES'				=> 'Käyttäjän roolit',
	'ACP_USER_SECURITY'				=> 'Käyttäjän tietoturva',
	'ACP_USER_SIG'					=> 'Allekirjoitus',
	'ACP_USER_WARNINGS'				=> 'Varoitukset',

	'ACP_VC_SETTINGS'					=> 'Roskapostituksen esto',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA-kuvan esikatselu',
	'ACP_VERSION_CHECK'					=> 'Tarkista päivitysten saatavuus',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Katso ylläpitäjän oikeuksia',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Katso alueen valvojien oikeuksia',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Katso alueen oikeuksia',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Katso valvojien oikeuksia',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Katso käyttäjien oikeuksia',

	'ACP_WORDS'					=> 'Sanasensuuri',

	'ACTION'				=> 'Toimenpide',
	'ACTIONS'				=> 'Toimenpiteet',
	'ACTIVATE'				=> 'Aktivoi',
	'ADD'					=> 'Lisää',
	'ADMIN'					=> 'Ylläpito',
	'ADMIN_INDEX'			=> 'Ylläpidon etusivu',
	'ADMIN_PANEL'			=> 'Ylläpidon hallintapaneeli',

	'ADM_LOGOUT'			=> 'Uloskirjaus&nbsp;ylläpidosta',
	'ADM_LOGGED_OUT'		=> 'Kirjautuminen ulos ylläpidosta onnistui',

	'BACK'					=> 'Takaisin',

	'COLOUR_SWATCH'			=> 'Web-turvalliset värit',
	'CONFIG_UPDATED'		=> 'Asetukset on päivitetty',
	'CRON_LOCK_ERROR'		=> 'cron lukitus virhe.',
	'CRON_NO_SUCH_TASK'		=> 'Ei löydy cron tehtävää “%s”.',
	'CRON_NO_TASK'			=> 'Ei cron tehtäviä tällä hetkellä.',
	'CRON_NO_TASKS'			=> 'Ei löydy cron tehtäviä.',

	'DEACTIVATE'				=> 'Sulje',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Polkua “%s” ei ole olemassa.',
	'DIRECTORY_NOT_DIR'			=> 'Antamasi polku “%s” ei ole hakemisto.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Antamaasi polkuun “%s” ei voi kirjoittaa.',
	'DISABLE'					=> 'Poista käytöstä',
	'DOWNLOAD'					=> 'Lataa koneellesi',
	'DOWNLOAD_AS'				=> 'Lataa muodossa',
	'DOWNLOAD_STORE'			=> 'Lataa tai tallenna tiedosto',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Voit ladata tiedoston tai tallentaa sen <samp>store/</samp>-hakemistoon.',
	'DOWNLOADS'					=> 'Lataukset',

	'EDIT'					=> 'Muokkaa',
	'ENABLE'				=> 'Ota käyttöön',
	'EXPORT_DOWNLOAD'		=> 'Lataa',
	'EXPORT_STORE'			=> 'Tallenna',

	'GENERAL_OPTIONS'		=> 'Yleiset vaihtoehdot',
	'GENERAL_SETTINGS'		=> 'Yleiset asetukset',
	'GLOBAL_MASK'			=> 'Yleinen oikeuksien maski',

	'INSTALL'				=> 'Asenna',
	'IP'					=> 'Käyttäjän IP-osoite',
	'IP_HOSTNAME'			=> 'IP-osoite tai isäntänimi',

	'LOAD_NOTIFICATIONS'			=> 'Näytä ilmoitukset',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Näytä ilmoitukset joka sivulla (sivun headerissa).',
	'LOGGED_IN_AS'			=> 'Kirjattu sisään käyttäjätunnuksella:',
	'LOGIN_ADMIN'			=> 'Sinun tulee olla tunnistettu käyttäjä hallinnoidaksesi keskustelufoorumia.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Kirjaudu sisään uudelleen hallinnoidaksesi keskustelufoorumia.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Olet tunnistettu ylläpitäjäksi. Pääset hetken kuluttua ylläpitoon.',
	'LOOK_UP_FORUM'			=> 'Valitse keskustelualue',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Voit valita useamman kuin yhden alueen',

	'MANAGE'				=> 'Hallitse',
	'MENU_TOGGLE'			=> 'Näytä tai piilota sivupaneeli',
	'MORE'					=> 'Lisää',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Lisätietoja »',
	'MOVE_DOWN'				=> 'Siirrä alas',
	'MOVE_UP'				=> 'Siirrä ylös',

	'NOTIFY'				=> 'Ilmoitus',
	'NO_ADMIN'				=> 'Oikeutesi eivät riitä muokkaamaan tämän keskustelufoorumin asetuksia.',
	'NO_EMAILS_DEFINED'		=> 'Sopivaa sähköpostiosoitetta ei löytynyt',
	'NO_FILES_TO_DELETE'	=> 'Liitteitä ei löydy.',
	'NO_PASSWORD_SUPPLIED'	=> 'Anna salasanasi, ennen kuin jatkat ylläpidon asetuksiin.',	

	'OFF'					=> 'Pois käytöstä',
	'ON'					=> 'Käytössä',

	'PARSE_BBCODE'						=> 'Käsittele BBCode',
	'PARSE_SMILIES'						=> 'Käsittele hymiöt',
	'PARSE_URLS'						=> 'Käsittele linkit',
	'PERMISSIONS_TRANSFERRED'			=> 'Oikeudet on siirretty',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Selaat keskustelufoorumia samoilla oikeuksilla, kuin käyttäjä %1$s. Näet keskustelufoorumin sellaisena, kuin tämä käyttäjä sen näkee. Et pääse ylläpidon asetuksiin, sillä näitä oikeuksia ei ole siirretty. Voit palauttaa <a href="%2$s"><strong>omat oikeutesi</strong></a> koska tahansa.',
	'PROCEED_TO_ACP'					=> '%sJatka hallintapaneeliin%s',

	'REMIND'							=> 'Muistuta',
	'RESYNC'							=> 'Synkronoi',

	'RUNNING_TASK'			=> 'Tehtävä %s. käynnissä',
	'SELECT_ANONYMOUS'		=> 'Valitse vierailijan tunnus',
	'SELECT_OPTION'			=> 'Valitse vaihtoehto',

	'SETTING_TOO_LOW'		=> 'Antamasi arvo asetukselle “%1$s” on liian pieni. Vähimmäisarvo on %2$d.',
	'SETTING_TOO_BIG'		=> 'Antamasi arvo asetukselle “%1$s” on liian suuri. Enimmäisarvo on %2$d.',	
	'SETTING_TOO_LONG'		=> 'Antamasi arvo asetukselle “%1$s” on liian pitkä. Suurin sallittu pituus on %2$d.',
	'SETTING_TOO_SHORT'		=> 'Antamasi arvo asetukselle “%1$s” ei ole tarpeeksi pitkä. Pienin sallittu pituus on %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Näytä kaikki toimenpiteet',

	'TASKS_NOT_READY'			=> 'Tehtävä kesken:',
	'TASKS_READY'			=> 'Tehtävä valmis:',
	'TOTAL_SIZE'			=> 'koko yhteensä',

	'UCP'					=> 'Käyttäjien hallintapaneeli',
	'USERNAMES_EXPLAIN'		=> 'Laita jokainen käyttäjätunnus omalle rivillensä',
	'USER_CONTROL_PANEL'	=> 'Käyttäjien hallintapaneeli',

	'WARNING'				=> 'Varoitus',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tällä sivulla on tietoa palvelimelle asennetusta PHP-versiosta. Tietoa löytyy ladatuista moduuleista, ympäristömuuttujista ja asetuksista. Näistä tiedoista voi olla hyötyä virhetilanteita ratkottaessa. Huomaa, että jotkut palveluntarjoajat saattavat rajoittaa tällä sivulla näkyviä tietoja tietoturvasyistä. Näitä tietoja ei pidä levittää julkisesti, paitsi jos phpBB:n <a href="https://www.phpbb.com/about/team/">virallinen tiimin jäsen</a> sitä kysyy tukifoorumilla.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP-informaatiota ei voitu hakea. Phpinfo() on poistettu käytöstä tietoturvasyistä.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tässä on listattuna ylläpidon suorittamat toimenpiteet. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Voit poistaa yksittäisiä tapahtumia tai koko lokin, mikäli sinulla on tarvittavat oikeudet käytössäsi.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tässä on listattuna keskustelufoorumin suorittamat toimenpiteet. Tässä listassa olevista tiedoista voi olla hyötyä jäljittäessä, esimerkiksi sähköpostiin liittyviä ongelmia. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Voit poistaa yksittäisiä tapahtumia tai koko lokin, mikäli sinulla on tarvittavat oikeudet käytössäsi.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tässä on listattuna valvojien suoritamat toimenpiteet. Valitse keskustelualue alasvetovalikosta. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Voit poistaa yksittäisiä tapahtumia tai koko lokin, mikäli sinulla on tarvittavat oikeudet käytössäsi.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Tässä on listattuna käyttäjään tai käyttäjiin kohdistuvat toimenpiteet.',
	'ALL_ENTRIES'				=> 'Kaikki tapahtumat',

	'DISPLAY_LOG'	=> 'Näytä tapahtumat edelliseltä',

	'NO_ENTRIES'	=> 'Tältä aikaväliltä ei ole tapahtumia',

	'SORT_IP'		=> 'IP-osoite',
	'SORT_DATE'		=> 'Päivämäärä',
	'SORT_ACTION'	=> 'Tapahtuma',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Kiitos, että valitsit phpBB:n keskustelufoorumiksesi. Tällä sivulla näet pikaisen silmäyksen erilaisista tilastoinneista. Vasemmalla puolella olevilla linkeillä voit muokata kaikkia foorumiin liittyviä asetuksia auttaen saamaan kaiken irti foorumikokemuksistasi. Jokaisella sivulla on ohjeet kuinka työkalua käytetään.',
	'ADMIN_LOG'					=> 'Ylläpidon suorittamat toimenpiteet',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tässä on viisi viimeisintä ylläpidon suorittamaa toimenpidettä. Voit katsoa täydelliset lokitiedot tietyillä asetuksilla seuraamalla alapuolella olevaa linkkiä.',
	'AVATAR_DIR_SIZE'			=> 'Avatar-hakemiston koko',

	'BOARD_STARTED'		=> 'Keskustelufoorumi käynnistyi',
	'BOARD_VERSION'		=> 'Keskustelufoorumin versio',

	'DATABASE_SERVER_INFO'	=> 'Tietokantapalvelin',
	'DATABASE_SIZE'			=> 'Tietokannan koko',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Function overload ei ole asetettu oikein',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> arvon tulee olla asetettu joko 0 tai 4. Voit tarkistaa nykyisen arvon <samp>PHP informaatio</samp> -sivulta.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Läpinäkyvä merkistönkoodaus ei ole asetettu oikein',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> arvon tulee olla 0. Voit tarkistaa nykyisen arvon <samp>PHP informaatio</samp> -sivulta.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP-input-merkistön muuntaminen ei ole asetettu oikein',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> arvon tulee olla <samp>pass</samp>. Voit tarkistaa nykyisen arvon <samp>PHP informaatio</samp> -sivulta.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP-output-merkistön muuntaminen ei ole asetettu oikein',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> arvon tulee olla <samp>pass</samp>. Voit tarkistaa nykyisen arvon <samp>PHP informaatio</samp> -sivulta.',

	'FILES_PER_DAY'		=> 'Liitetiedostoja päivässä',
	'FORUM_STATS'		=> 'Keskustelufoorumin tilastot',

	'GZIP_COMPRESSION'	=> 'Gzip-pakkaus',

	'NO_SEARCH_INDEX'	=> 'Haluttu kohde ei ole haku indeksissä.<br />Muodosta index uudestaan “%1$s”  %2$s haku index %3$s kohdassa.',
	'NOT_AVAILABLE'		=> 'Ei saatavilla',
	'NUMBER_FILES'		=> 'Liitetiedostojen lukumäärä',
	'NUMBER_POSTS'		=> 'Viestien lukumäärä',
	'NUMBER_TOPICS'		=> 'Viestiketjujen lukumäärä',
	'NUMBER_USERS'		=> 'Käyttäjät',
	'NUMBER_ORPHAN'		=> 'Orvot liitetiedostot',

	'PHP_VERSION_OLD'	=> 'Palvelimen käyttämä PHP-versio ei ole tuettu tulevien phpBB-versioiden käyttämiseen. %sLisätietoja%s',

	'POSTS_PER_DAY'		=> 'Viestiä päivässä',

	'PURGE_CACHE'			=> 'Tyhjennä välimuisti',
	'PURGE_CACHE_CONFIRM'	=> 'Haluatko varmasti tyhjentää välimuistin?',
	'PURGE_CACHE_EXPLAIN'	=> 'Tyhjennä kaikki välimuistiin liittyvät asiat. Tähän kuuluu mallineet ja suoritetut kyselyt',
	'PURGE_CACHE_SUCCESS'	=> 'Välimuistin nollaus onnistui.',

	'PURGE_SESSIONS'			=> 'Tyhjennä istunnot',
	'PURGE_SESSIONS_CONFIRM'	=> 'Haluatko varmasti tyhjentää istunnot? Tämä kirjaa kaikki käyttäjät ulos.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Tyhjennä istunnot. Tämä tyhjentää istuntoihin käytettävän taulun tietokannasta',
	'PURGE_SESSIONS_SUCCESS'	=> 'Istuntojen nollaus onnistui.',

	'RESET_DATE'					=> 'Muuta keskustelufoorumin aloituspäivämäärä',
	'RESET_DATE_CONFIRM'			=> 'Haluatko varmasti asettaa aloituspäivämäärän uudestaan?',
	'RESET_DATE_SUCCESS'				=> 'Palstan käynnistys pvm. nollaus',
	'RESET_ONLINE'					=> 'Muuta vierailleiden käyttäjien määrää',
	'RESET_ONLINE_CONFIRM'			=> 'Haluatko varmasti muuttaa vierailleiden käyttäjien määrää?',
	'RESET_ONLINE_SUCCESS'				=> 'Käyttäjiä eniten reset',
	'RESYNC_POSTCOUNTS'				=> 'Synkronoi viestien lukumäärä',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Vain olemassaolevat viestit lasketaan. Siivottuja viestejä ei huomioida.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Haluatko varmasti laskea viestien lukumäärän uudelleen?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Viestien synkronointi onnistui',
	'RESYNC_POST_MARKING'			=> 'Synkronoi omien vastausten näyttö',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Haluatko varmasti synkronoida omat vastaukset?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Poistaa ensin merkinnän kaikista viesteistä ja laskee sen jälkeen uusiksi kaikki viestit, joissa on ollut toimintaa viimeisen puolen vuoden aikana.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Synkronoitu . merkityt aiheet',
	'RESYNC_STATS'					=> 'Synkronoi tilastot',
	'RESYNC_STATS_CONFIRM'			=> 'Haluatko varmasti synkronoida tilastot?',
	'RESYNC_STATS_EXPLAIN'			=> 'Laskee viestit, viestiketjut, käyttäjät ja tiedostot uudelleen.',
	'RESYNC_STATS_SUCCESS'			=> 'Synkronoinnin tilatietoja',
	'RUN'							=> 'Suorita',

	'STATISTIC'					=> 'Tilastot',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synkronoi tai nollaa tilastot',

	'TIMEZONE_INVALID'	=> 'Haluttu aikavyöhyke ei mahdollinen.',
	'TIMEZONE_SELECTED'	=> '(valittu aikavyöhyke)',
	'TOPICS_PER_DAY'	=> 'Viestiketjuja päivässä',

	'UPLOAD_DIR_SIZE'	=> 'Liitetiedostojen hakemiston koko',
	'USERS_PER_DAY'		=> 'Käyttäjiä päivässä',

	'VALUE'					=> 'Arvo',
	'VERSIONCHECK_FAIL'			=> 'Versio-informaation haku epäonnistui.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Tarkista versio uudelleen',
	'VIEW_ADMIN_LOG'		=> 'Katso ylläpidon lokitietoja',
	'VIEW_INACTIVE_USERS'	=> 'Näytä vahvistamattomat käyttäjät',

	'WELCOME_PHPBB'			=> 'Tervetuloa phpBB:hen',
	'WRITABLE_CONFIG'		=> 'Asetustiedostosi (config.php) on kirjoitettavissa. Suosittelemme, että muutat tiedoston oikeudet muotoon 640 tai ainakin 644 (esimerkiksi: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Tunnukset sulkeutuivat',
	'INACTIVE_REASON'				=> 'Syy',
	'INACTIVE_REASON_MANUAL'		=> 'Ylläpitäjä sulki tunnukset',
	'INACTIVE_REASON_PROFILE'		=> 'Profiilin tietoja muokattiin',
	'INACTIVE_REASON_REGISTER'		=> 'Uusi käyttäjätunnus',
	'INACTIVE_REASON_REMIND'		=> 'Käyttäjä on pakotettu vahvistamaan tunnuksensa',
	'INACTIVE_REASON_UNKNOWN'		=> 'Tuntematon',
	'INACTIVE_USERS'				=> 'Vahvistamattomat käyttäjät',
	'INACTIVE_USERS_EXPLAIN'		=> 'Tässä on lista juuri rekisteröityneistä käyttäjistä, joiden käyttäjätunnukset vaativat vielä vahvistuksen. Voit halutessasi aktivoida, poistaa tai muistuttaa käyttäjää (lähettämällä sähköpostia).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Tässä listassa on kymmenen uusinta käyttäjää, joiden tunnukset ovat suljetut. Käyttäjätunnukset ovat suljetut, koska rekisteröitymisen asetuksissa on asetettu tunnusten aktivointi päälle tai käyttäjätunnus on suljettu ylläpitäjien toimesta. Alapuolella on linkki täyteen listaan ja sivulle, josta voit lähettää muistutuksen käyttäjille aktivoinnista tai poistaa tunnukset.',

	'NO_INACTIVE_USERS'	=> 'Ei vahvistamattomia käyttäjiä',

	'SORT_INACTIVE'		=> 'Päiväys',
	'SORT_LAST_VISIT'	=> 'Viimeksi vieraillut',
	'SORT_REASON'		=> 'Syy',
	'SORT_REG_DATE'		=> 'Rekisteröitymispäivämäärä',
	'SORT_LAST_REMINDER'=> 'Viimeksi muistutettu',
	'SORT_REMINDER'		=> 'Muistutus lähetetty',

	'USER_IS_INACTIVE'		=> 'Käyttäjätunnus ei ole aktiivinen',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Ole ystävällinen ja lähetä tilastotietoa palvelimesta phpBB:lle analysointia varten. Kaikki tiedot joista voi tunnistaa nettisivustosi on poistettu - lähetettävä tieto on täysin <strong>anonyymiä</strong>. Käytämme tätä tietoa kehittääksemme phpBB:tä. Tilastotiedot ovat julkisia ja me jaamme tämän tiedon myös PHP-projektin kanssa, jonka kehittämällä kielellä phpBB on luotu.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Käytä alapuolella olevaa nappulaa nähdäksesi lähetettävät tiedot.',
	'DONT_SEND_STATISTICS'		=> 'Palaa ylläpitoon, mikäli et halua lähettää tilastotietoja.',
	'GO_ACP_MAIN'				=> 'Mene ylläpidon aloitussivulle',
	'HIDE_STATISTICS'			=> 'Piilota yksityiskohdat',
	'SEND_STATISTICS'			=> 'Lähetä tilastotiedot',
	'SHOW_STATISTICS'			=> 'Näytä yksityiskohdat',
	'THANKS_SEND_STATISTICS'	=> 'Kiitämme tietojen lähetyksestä.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Lisäsi tai muokkasi käyttäjän käyttäjäoikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Lisäsi tai muokkasi ryhmän käyttäjäoikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Lisäsi tai muokkasi käyttäjän valvojan oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Lisäsi tai muokkasi ryhmän valvojan oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi käyttäjän ylläpitäjän oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi ryhmän ylläpitäjän oikeuksia</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi ylläpitäjiä</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Lisäsi tai muokkasi valvojia</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Lisäsi tai muokkasi käyttäjän pääsyä alueelle</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Lisäsi tai muokkasi käyttäjän valvojan oikeutta</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Lisäsi tai muokkasi ryhmän pääsyä alueelle</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Lisäsi tai muokkasi ryhmän valvojien oikeutta</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Lisäsi tai muokkasi valvojia</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Lisäsi tai muokkasi keskustelualueen oikeuksia</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Poisti ylläpitäjiä</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Poisti valvojia</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Poisti valvojia</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Poisti käyttäjän/ryhmän oikeudet keskustelualueella</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Siirsi oikeudet käyttäjältä</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Palautti omat oikeutensa testattuaan käyttäjää</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Epäonnistunut kirjautuminen ylläpitoon</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Onnistunut kirjautuminen ylläpitoon</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Poisti liitetiedostot käyttäjältä</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Lisäsi tai muokkasi Liitetiedostojen tunnisteita</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Poisti liitetiedoston tunnisteen</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Päivitti liitetiedoston tunnisteen</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Lisäsi tunnisteiden ryhmän</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Muokkasi tunnisteiden ryhmää</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Poisti tunnisteiden ryhmän</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orpo tiedosto liitetty viestiin</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orvot tiedostot poistettu</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Jätti huomioimatta porttikiellon käyttäjältä</strong> syy "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Jätti huomioimatta IP-osoitteen porttikiellosta</strong> syy "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Jätti huomioimatta sähköpostiosoitteen porttikiellosta</strong> syy "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Antoi porttikiellon käyttäjälle</strong> syy "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Antoi porttikiellon IP-osoitteella</strong> syy "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Antoi porttikiellon sähköpostiosoitteelle</strong> syy "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Poisti porttikiellon käyttäjältä</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Poisti porttikiellon IP-osoitteelta</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Poisti porttikiellon sähköpostiosoitteelta</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Lisäsi uuden BBCoden</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Muokkasi BBCodea</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Poisti BBCoden</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Uusi botti lisätty</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Poisti botin</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Päivitti olemassa olevan otin</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Tyhjensi ylläpidon lokin</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Tyhjensi virhelokin</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Tyhjensi valvojien lokin</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Tyhjensi käyttäjä lokin</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Tyhjensi käyttäjien lokin</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Muutti liitetiedostojen asetuksia</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Muutti tunnistautumisen asetuksia</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Muutti avatar-asetuksia</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Muutti evästeiden asetuksia</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Muutti sähköpostiasetuksia</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Muutti foorumin ominaisuuksia</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Muutti kuormituksen asetuksia</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Muutti yksityisviestien asetuksia</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Muutti viestien lähettämisen asetuksia</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Muutti rekisteröitymisen asetuksia</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Muutti syötteiden asetuksia</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Muutti hakutoiminnon asetuksia</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Muutti tietoturva asetuksia</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Muutti palvelimen asetuksia</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Muutti foorumin asetuksia</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Muutti allekirjoituksen asetuksia</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Muutti roskapostituksen eston asetuksia</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Hyväksyi viestiketjun</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Käyttäjä tönäisi omaa viestiketjuaan</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Poisti viestin “%1$s” jonka lähettäjä oli “%2$s” syyllä</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Poisti varjoketjun</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Poisti viestiketjun “%1$s” jonka oli kirjoittanut “%2$s” seuraavan syyn vuoksi</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Kopioi viestiketjun</strong><br />» alueelta %s',
	'LOG_LOCK'					=> '<strong>Lukitsi viestiketjun</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Lukitsi viestin</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>yhdisti viestiketjun</strong> viestiketjuun<br />»%s',
	'LOG_MOVE'					=> '<strong>Siirsi viestiketjun</strong><br />» alueelta %1$s alueelle %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Siirretty viestiketju</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Sulki YV-ilmoituksen</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Poisti YV-ilmoituksen</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Hyväksyi viestin</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Hylkäsi viestin “%1$s”, jonka oli kirjoittanut “%2$s” ja antoi syyn</strong><br />» %3$s',
	'LOG_POST_EDITED'			=> '<strong>Muokkasi viestiä “%1$s”, jonka oli kirjoittanut “%2$s” ja antoi syyn </strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Palautettu viesti</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Sulki ilmoituksen</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Poisti ilmoituksen</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Palautettu aihe “%1$s” kirjoittaja</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Poistettu viesti “%1$s” kirjoittaja “%2$s” seuraavasta syystä</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Poistettu aihe “%1$s” kirjoittaja “%2$s” seuraavasta syystä</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Siirsi jaetut viestit</strong><br />» alueelle %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Jakoi viestit</strong><br />» from %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Hyväksyi viestiketjun</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Palautettu aiha</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Hylkäsi viestiketjun “%1$s”, jonka oli kirjoittanut “%3$s” ja antoi syyn</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Synkronoi viestien laskurit</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Vaihtoi viestiketjun tyyppiä</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Avasi viestiketjun </strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Avasi viestin</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Lisäsi sallimattoman käyttäjätunnuksen</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Poisti sallimattoman käyttäjätunnuksen</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Tietokannan varmuuskopio</strong>',
	'LOG_DB_DELETE'			=> '<strong>Poisti tietokannan varmuuskopion</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Tietokannan palautus</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Jätti huomioimatta IP:n/isäntänimen latauslistasta</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Lisäsi IP:n/isäntänimen latauslistaan</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Poisti IP:n/isäntänimen latauslistasta</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-virhe</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Sähköposti-virhe</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Loi uuden alueen</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Kopioi alueen oikeudet</strong> alueelta %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Poisti alueen</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Poisti alueen ja sisäalueen</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Poisti alueen ja siirsi sisäalueet</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Poisti alueen ja siirsi viestit </strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Poisti alueen ja sen sisäalueet, viestit siirretty</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Poisti alueen ja siirsi viestit</strong> alueelle %1$s <strong>ja sisäalueet</strong> alueelle %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'		=> '<strong>Poisti alueen ja kaikki viestit</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'		=> '<strong>Poisti alueen, viestit ja sisäalueet</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Poisti alueen ja viestit. Sisäalueet siirretty</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Muokkasi alueen yksityiskohtia</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Siirsi alueen</strong> %1$s <strong>alas</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Siirsi alueen</strong> %1$s <strong>ylös</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Synkronoi alueen</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Yleinen virhe</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Loi uuden käyttäjäryhmän</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Ryhmä “%1$s” tehtiin oletusryhmäksi</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Poisti käyttäjäryhmät</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Ryhmänvalvojia alennettu</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Tavallinen käyttäjä ylennetty ryhmän valvojaksi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Käyttäjiä poistettu ryhmästä</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Käyttäjäryhmän tiedot päivitetty</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>lisäsi valvojia käyttäjäryhmään</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Lisäsi uusia jäseniä käyttäjäryhmään</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Hyväksyi käyttäjiä ryhmään</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Käyttäjä pyysi liittymistä ryhmään “%1$s” ja tarvitsee hyväksynnän</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Kuvan luonnissa tapahtui virhe</strong><br />» Virhe tiedostossa %1$s rivillä %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivoi aktivoimattomat käyttäjät</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Poisti aktivoimattomat käyttäjät</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Lähetti muistutuksen aktivoimattomille käyttäjille</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertoi %1$s ohjelmasta phpBB:hen %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Asensi phpBB %s ohjelman</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Istunnon IP/selain/X_FORWARDED_FOR-tarkistus epäonnistui</strong><br />»Käyttäjän IP "<em>%1$s</em>" Tarkistettiin istunnon IP:tä vasten "<em>%2$s</em>", käyttäjän selaimen merkkijono "<em>%3$s</em>" tarkistettiin käyttäjän istunnon selaimen merkkijonoa vasten "<em>%4$s</em>" ja käyttäjän X_FORWARDED_FOR merkkijono "<em>%5$s</em>" tarkistettiin käyttäjän istunnon X_FORWARDED_FOR merkkijonoa vasten "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber-tiliä muutettu</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber-salasana muutettu</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber-tili rekisteröity</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber-asetuksia muutettu</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Poisti kielipaketin</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Asensi kielipaketin</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Päivitti kielipaketin tiedot</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Vaihtoi kielitiedoston</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Lähetti kielitiedoston muokkauksen ja laittoi muutokset store-hakemistoon</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Lähetti joukkopostia</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Vaihtoi viestin kirjoittajaa viestiketjussa "%1$s"</strong><br />» käyttäjästä %2$s käyttäjäksi %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Moduuli on poistettu käytöstä</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Moduuli otettu käyttöön</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Moduuli on siirretty alaspäin</strong><br />» %1$s alle %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Moduuli on siirretty ylöspäin</strong><br />» %1$s yläpuolelle %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Poisti moduulin</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Lisäsi moduulin</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Muokkasi moduulia</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Lisäsi ylläpitäjän roolin</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Muokkasi ylläpitäjän roolia</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Poisti ylläpitäjän roolin</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Lisäsi alueen roolin</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Muokkasi alueen roolia</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Poisti alueen roolin</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Lisäsi valvojan roolin</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Muokkasi valvojan roolia</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Poisti valvojan roolin</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Lisäsi käyttäjän roolin</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Muokkasi käyttäjän roolia</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Poisti käyttäjän roolin</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Ei voi avata %1$s järjestelyyn, tarkista oikeudet.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivoi profiilikentän</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Lisäsi profiilikentän</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Poisti profiilikentän käytöstä</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Muutti profiilikenttää</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Poisti profiilikentän</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Siivosi keskustelualueet</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Siivosi keskustelualueet automaattisesti</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Tiivistetyt varjo aiheet</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Suljetut käyttäjät</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Käyttäjiä siivottu ja viestejä poistettu</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Käyttäjiä siivottu ja viestit jätetty</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Tyhjensi välimuistin</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Tyhjensi istunnot</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Lisäsi uuden arvonimen</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Poisti arvonimen</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Päivitti arvonimen</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Jätti ilmoituksen/hylkäyksen syyn</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Poisti ilmoituksen/hylkäyksen syyn</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Päivitti ilmoituksen/hylkäyksen syyn</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Viittaajan varmennus epäonnistui</strong><br />»Viittaaja oli “<em>%1$s</em>”. Pyyntö hylättiin ja istunto lopetettiin.',
	'LOG_RESET_DATE'			=> '<strong>Muutti keskustelufoorumin aloituspäivää</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Muutti käyttäjäennätyksen määrää</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>File statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Synkronoi käyttäjien viestien määrän</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Synkronoi pisteistetyt viestiketjut</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Päivitti viestin, viestiketjun ja käyttäjien tilastot</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Loi sisällysluettelon</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Poisti sisällysluettelon</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Lisäsi uuden tyylin</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Poisti tyylin</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Muokkasi tyyliä</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Vei tyylin</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Lisäsi uuden mallinepaketin tietokantaan</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Lisäsi uuden mallinepaketin tiedostojärjestelmään</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Poisti mallinepaketin tiedostot välimuistista <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Poisti mallinepaketin</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Muokkasi mallinepakettia <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Muokkasi mallineen tietoja</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Vei mallinepaketin</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Virkisti mallinepaketin</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Lisäsi uuden teeman tietokantaan</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Lisäsi uuden teeman tiedostojärjestelmään</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Poisti teeman</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Muokkasi teeman tietoja</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Muokkasi teemaa <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Muokkasi teemaa <em>%1$s</em></strong><br />» Muokkasi tiedostoa <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Vei teeman</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Virkisti teeman</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Päivitti tietokannan versiosta %1$s versioon %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Päivitti phpBB:n versiosta %1$s versioon %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Aktivoi käyttäjätunnukset</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Antoi porttikeillon käyttäjälle käyttäjien hallinnasta</strong> syy "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Antoi porttikiellon IP-osoitteelle</strong> syy "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Antoi porttikiellon sähköpostiosoitteelle käyttäjien hallinnasta</strong> syy "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Poisti käyttäjän</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Poisti kaikki käyttäjän lähettämät liitetiedostot</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Poisti avatarin</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Tyhjensi lähetettävät-kansion</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Poisti kaikki käyttäjän tekemät viestit</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Poisti allekirjoituksen</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Sulki käyttäjätunnukset</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Siirsi käyttäjän viestit</strong><br />» kirjoittanut "%1$s" , alueelle "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>vaihtoi salasanan käyttäjälle</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Pakotti käyttäjän varmistamaan tunnuksensa</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Poisti uuden käyttäjän statuksen</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Käyttäjä "%1$s" vaihtoi sähköpostiosoitetta</strong><br />» osoitteesta "%2$s" osoitteeksi "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Vaihtoi käyttäjätunnusta</strong><br />» vanha "%1$s" uusi "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Päivitti käyttäjän tiedot</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktivoi käyttäjätunnukset</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Poisti avatarin</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Poisti allekirjoituksen</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Lisäsi muistiinpanoja käyttäjästä</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Lisäsi viitteen:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Käyttäjätunnukset sulkeutuivat</strong>',
	'LOG_USER_LOCK'				=> '<strong>Käyttäjä sulki oman viestiketjunsa</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Siirsi kaikki viestit alueelle “%s”</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Pakotti käyttäjätunnusten uudelleen aktivoinnin</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Käyttäjä avasi oman viestiketjunsa</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Lisäsi varoituksen käyttäjälle</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Tämä varoitus annettiin käyttäjälle</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Käyttäjä vaihtoi oletusryhmäänsä</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Käyttäjä on alennettu ryhmän valvojasta</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Käyttäjä liittyi ryhmään</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Käyttäjä liittyi ryhmään, mutta tarvitsee hyväksynnän</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Käyttäjä erosi ryhmästä</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Poisti varoituksen</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Käyttäjän varoitus poistettu</strong><br />» %1$s',
		2 => '<strong>Poistettu %2$d käyttäjän varoitusta</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Poisti kaikki varoitukset</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Lisäsi sensuroitavan sanan</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Poisti sensuroitavan sanan</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Muokkasi sanojen sensurointia</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Laajennus sallittu</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Laajennus estetty</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Laajennuksen tiedot nollattu</strong><br />» %s',
));
