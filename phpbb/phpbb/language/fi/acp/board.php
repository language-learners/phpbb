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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Täällä voit määrittää keskustelufoorumisi perusasetukset sivuston nimestä rekisteröitymiseen ja yksityisviestien asetuksiin.',
	'BOARD_INDEX_TEXT'				=> 'Palstan kuvaus',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Tämä teksti näytetään palstan kuvauksessa. Jos sitä ei ole määritelty oletusarvo on “Board index”.',
	'BOARD_STYLE'					=> 'Palstan tyyli',
	'CUSTOM_DATEFORMAT'				=> 'Mukautettu...',
	'DEFAULT_DATE_FORMAT'			=> 'Päivämäärän muoto',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Päivämäärä on yhteneväinen PHP:n <code>date</code>-funktion kanssa.',
	'DEFAULT_LANGUAGE'				=> 'Oletuskieli',
	'DEFAULT_STYLE'					=> 'Oletustyyli',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Oletusarvo tyyli uusille käyttäjille.',
	'DISABLE_BOARD'					=> 'Ota keskustelufoorumi pois käytöstä',
	'DISABLE_BOARD_EXPLAIN'			=> 'Tämä sulkee keskustelufoorumin käyttäjiltä. Voit antaa myös lyhyen (255 merkkiä) viestin näytettäväksi käyttäjille.',
	'DISPLAY_LAST_SUBJECT'			=> 'Näytä viimeksi lisätyn viestin aihe',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Viimeksi lisätyn viestin aihe näkyy forumilla superlinkkinä viestin sisältöön. Suljettujen ja salasanalla suojattujen forumeiden viestit näkyvät vain lukuoikeutetuille.',
	'GUEST_STYLE'					=> 'Vieraan tyyli',
	'GUEST_STYLE_EXPLAIN'			=> 'Forumin tyyli vieraille.',
	'OVERRIDE_STYLE'				=> 'Ohita käyttäjän asettama tyyli',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Vaihtaa käyttäjän asettaman tyylin oletustylillä.',
	'SITE_DESC'						=> 'Sivuston kuvaus',
	'SITE_HOME_TEXT'				=> 'Etusivun kuvaus',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Tämä teksti näytetään linkkinä sinun web-sivuillesi. Jos sitä ei ole määritelty, oletusarvo on  “Home”.',
	'SITE_HOME_URL'					=> 'Etusivun osoite URL',
	'SITE_HOME_URL_EXPLAIN'			=> 'Jos määritelty, linkki tähän osoitteeseen näkyy sinun sivullasi ja palstan logo linkittyy tähän osoitteeseen forumin etusivun sijasta. Tämä vaatii absoluuttisen osoitteen, esim. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Sivuston nimi',
	'SYSTEM_TIMEZONE'		=> 'Vierailijan aikavyöhyke',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Tämä aikavyöhyke on käytössä heille, jotka eivät ole kirjautuneet sisään. Sisäänkirjautuneet käyttäjät voivat muokata aikavyöhykettään omista asetuksistansa.',
	'WARNINGS_EXPIRE'				=> 'Varoitusten kesto',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Kuinka monta päivää annettu varoitus pysyy voimassa ennen kuin se poistetaan käyttäjän tiedoista. Aseta tähän 0 pitääksesi varoitukset pysyvinä',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Täällä voit ottaa käyttöön ja poistaa käytöstä useita keskustelufoorumin ominaisuuksista',

	'ALLOW_ATTACHMENTS'			=> 'Salli liitetiedostot',
	'ALLOW_BIRTHDAYS'			=> 'Salli syntymäpäivät',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Sallii syntymäajan syöttämisen ja syntymäpäivän näyttämisen profiilissa. Huomaa, että keskustelufoorumin etusivulla olevaa syntymäpäivälistaa hallitaan erikseen kuormituksen asetuksilla.',
	'ALLOW_BOOKMARKS'			=> 'Salli kirjanmerkkien lisääminen',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Käyttäjä voi lisätä henkilökohtaisia kirjanmerkkejä',
	'ALLOW_BBCODE'				=> 'Salli BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Salli alueen seuraaminen',
	'ALLOW_NAME_CHANGE'			=> 'Salli käyttäjätunnuksen vaihtaminen',
	'ALLOW_NO_CENSORS'			=> 'Salli sensuroinnin ohittaminen',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Käyttäjä voi ottaa sanojen sensuroinnin pois päältä.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Salli liitetiedostot yksityisviesteissä',
	'ALLOW_PM_REPORT'			=> 'Salli yksityisviestien ilmoittaminen',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Mikäli tämä vaihtoehto on käytössä, käyttäjät voivat ilmoittaa yksityisviesteistä keskustelufoorumin valvojille. Nämä viestit tulevat näkyviin valvojien hallintapaneeliin.',
	'ALLOW_QUICK_REPLY'			=> 'Salli pikavastaus',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Tällä kytkimellä voi ottaa pikavastauksen kokonaan pois käytöstä. Pikavastauksen ollessa käytössä alueen asetukset määrittelevät näytetäänkö vastauslaatikko.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Lähetä ottaaksesi pikavastauksen käyttöön kaikkialla',
	'ALLOW_SIG'					=> 'Salli allekirjoitukset',
	'ALLOW_SIG_BBCODE'			=> 'Salli BBCoden käyttö allekirjoituksissa',
	'ALLOW_SIG_FLASH'			=> 'Salli <code>[FLASH]</code>-BBCode-tagin käyttö allekirjoituksessa',
	'ALLOW_SIG_IMG'				=> 'Salli <code>[IMG]</code>-BBCode-tagin käyttö allekirjoituksessa',
	'ALLOW_SIG_LINKS'			=> 'Salli linkkien käyttö allekirjoituksissa',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Jos tätä ei ole sallittu, <code>[URL]</code>-BBCode-tagi ja automaattiset URLit ovat poissa käytöstä.',
	'ALLOW_SIG_SMILIES'			=> 'Salli hymiöiden käyttö allekirjoituksessa',
	'ALLOW_SMILIES'				=> 'Salli hymiöt',
	'ALLOW_TOPIC_NOTIFY'		=> 'Salli keskusteluketjun seuraaminen',
	'BOARD_PM'					=> 'Yksityisviestit',
	'BOARD_PM_EXPLAIN'			=> 'Ota yksityisviestit käyttöön kaikille käyttäjille.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarit ovat yleensä pieniä ja ainutlaatuisia kuvia, joita käyttäjä voi määritellä itsellensä. Tyylistä riippuen avatarit näytetään yleensä käyttäjätunnuksen alla viestiä luettaessa. Täällä voit määritellä kuinka käyttäjät voivat käyttää avatar-kuvia. Huomaa, että mikäli sallit käyttäjän siirtää avatarin palvelimelle, niitä varten tulee luoda oma hakemisto ja palvelimen on pystyttävä kirjoittamaan siihen. Huomaa myös, että tiedostojen kokorajoitukset toimivat vain tiedostoihin, jotka ovat siirretty palvelimelle. Ne eivät toimi linkitetyissä kuvissa.',

	'ALLOW_AVATARS'					=> 'Salli avatarit',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Salli avatarien yleinen käyttäminen;<br />Mikäli poistat avatarit yleisestä käytöstä tai tietyssä tilassa, nämä käytöstä poistetut avatarit eivät ole näkyvissä. Käyttäjät voivat kuitenkin ladata omat avatarinsa omista asetuksistaan.',
	'ALLOW_GRAVATAR'				=> 'Salli gravatar avatarit',
	'ALLOW_LOCAL'					=> 'Ota avatar-galleria käyttöön',
	'ALLOW_REMOTE'					=> 'Ota linkitetyt avatarit käyttöön',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Toiselta sivustolta linkitetyt avatarit',
	'ALLOW_REMOTE_UPLOAD'			=> 'Salli avatarin lataus linkistä',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Salli avatarin siirto toiselta nettisivulta.',
	'ALLOW_UPLOAD'					=> 'Salli avatarien siirto palvelimelle',
	'AVATAR_GALLERY_PATH'			=> 'Avatar-gallerian polku',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Esiasennettujen kuvien hakemistopolku keskustelufoorumin pääjuuresta, esim, <samp>images/avatars/gallery</samp><br />Tuplapisteet, kuten <samp>../</samp> poistetaan polusta tietoturvasyistä.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarin tallennuspolku',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Polku keskustelufoorumin pääjuuresta, esim. <samp>images/avatars/upload</samp>.<br />Avatarien lataus <strong>ei ole käytettävissä</strong> jos tähän polkuun ei voi kirjoittaa.<br />Tuplapisteet, kuten <samp>../</samp> poistetaan polusta tietoturvasyistä.',
	'MAX_AVATAR_SIZE'				=> 'Avatarin enimmäiskoko',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Leveys x korkeus kuvapisteinä',
	'MAX_FILESIZE'					=> 'Avatar-tiedoston enimmäiskoko',
	'MAX_FILESIZE_EXPLAIN'			=> 'Palvelimelle siirrettyjä avatar-tiedostoja varten. Nolla tarkoittaa rajoittamatonta kokoa tässä ohjelmassa, mutta palvelimen PHP-asetukset asettavat silti omat rajoituksensa tiedoston koolle.',
	'MIN_AVATAR_SIZE'				=> 'Avatar-tiedoston vähimmäiskoko',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Leveys x korkeus kuvapisteinä',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä kaikki yksityisviestien oletusasetukset.',

	'ALLOW_BBCODE_PM'			=> 'Salli BBCoden käyttö yksityisviesteissä',
	'ALLOW_FLASH_PM'			=> 'Salli <code>[FLASH]</code>-BBCode-tagin käyttö',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Huomioi, että mahdollisuus käyttää Flashia yksityisviesteissä, mikäli se on sallittu, riippuu myös oikeuksista.',
	'ALLOW_FORWARD_PM'			=> 'Salli yksityisviestin lähettäminen eteenpäin',
	'ALLOW_IMG_PM'				=> 'Salli <code>[IMG]</code>-BBCode-tagin käyttö',
	'ALLOW_MASS_PM'				=> 'Salli yksityisviestin lähettäminen usealle käyttäjälle ja käyttäjäryhmälle',
    'ALLOW_MASS_PM_EXPLAIN'     => 'Viestien lähetystä ryhmälle voi muuttaa ryhmän asetuksista.',
	'ALLOW_PRINT_PM'			=> 'Salli tulostusnäkymä yksitysiviesteissä',
	'ALLOW_QUOTE_PM'			=> 'Salli viestin lainaaminen yksitysiviesteissä',
	'ALLOW_SIG_PM'				=> 'Salli allekirjoitukset yksityisviesteissä',
	'ALLOW_SMILIES_PM'			=> 'Salli hymiöiden käyttäminen yksityisviesteisä',
	'BOXES_LIMIT'				=> 'Viestien enimmäismäärä laatikkoa kohden',
	'BOXES_LIMIT_EXPLAIN'		=> 'Käyttäjä voi ottaa vastaan vain tämä verran viestejä luomiinsa laatikoihin. Nolla poistaa rajoituksen käytöstä.',
	'BOXES_MAX'					=> 'Enimmäismäärä yksityisviestien kansioita',
	'BOXES_MAX_EXPLAIN'			=> 'Oletuksena käyttäjä voi luoda vain tämän verran henkilökohtaisia kansioita yksityisviesteillensä.',
	'ENABLE_PM_ICONS'			=> 'Ota keskustelukuvakkeet käyttöön yksityisviesteissä',
	'FULL_FOLDER_ACTION'		=> 'Täydessä kansiossa suoritettava oletustoimenpide',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Oletustoimenpide käyttäjän postilaatikon täyttyessä ja mikäli käyttäjän laatikon asetuksia ei voida käyttää. "Lähetetyt"-kansion oletustoimenpide on vanhojen viestien poistaminen.',
	'HOLD_NEW_MESSAGES'			=> 'Pidätä uudet viestit',
	'PM_EDIT_TIME'				=> 'Rajoita muokkausaikaa',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Kuinka pitkän aikaa viesti on vielä lähetyksen jälkeen muokattavissa, mikäli vastaanottaja ei ole sitä lukenut. Nolla poistaa rajoituksen käytöstä',
    'PM_MAX_RECIPIENTS'         => 'Vastaanottajien enimmäismäärä',
    'PM_MAX_RECIPIENTS_EXPLAIN'   => 'Vastaanottajien enimmäismäärä yhdelle yksityisviestille. Nolla sallii rajattoman määrän. Tätä asetusta voi muokata ryhmäkohtaisesti ryhmien asetuksista.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Täällä voit muuttaa viestien lähetyksen oletusasetuksia',
	'ALLOW_POST_LINKS'					=> 'Salli linkkien käyttö viesteissä ja yksityisviesteissä',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Jos tämä ei ole sallittu, <code>[URL]</code>-BBCode-tagi ja automaattiset URLit poistetaan käytöstä.',
	'ALLOW_POST_FLASH'					=> 'Salli <code>[FLASH]</code>-BBCode-tagin käyttö viesteissä',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Mikäli tätä ei ole sallittu, <code>[FLASH]</code>-BBCode-tagin käyttö on estetty viesteissä. Muussa tapauksessa oikeuksien järjestelmä määrittelee, ketkä voivat käyttää <code>[FLASH]</code>-BBCode-tagia.',

	'BUMP_INTERVAL'					=> 'Tönäisyn aikaraja',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Aikaraja minuutteina, tunteina tai päivinä viimeisestä viestistä, jonka jälkeen viestiketjun voi tönäistä. Nolla poistaa asetuksen käytöstä.',
	'CHAR_LIMIT'					=> 'Viestin merkkien enimmäismäärä',
	'CHAR_LIMIT_EXPLAIN'			=> 'Nolla poistaa rajoituksen käytöstä.',
	'DELETE_TIME'					=> 'Rajoita poistoaikaa',
	'DELETE_TIME_EXPLAIN'			=> 'Rajoittaa aikaa, jonka jälkeen kirjoittaja ei voi poistaa lähettämäänsä viestiä. Nolla poistaa asetuksen käytöstä.',
	'DISPLAY_LAST_EDITED'			=> 'Näytä viimeksi muokattu informaatio',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Valitse, näytetäänkö muokkausinformaatio viestin yhteydessä',
	'EDIT_TIME'						=> 'Muokkauksen aikaraja',
	'EDIT_TIME_EXPLAIN'				=> 'Kuinka kauan viesti on lähettäjän muokattavissa lähetyksen jälkeen. Nolla poistaa rajoituksen',
	'FLOOD_INTERVAL'				=> 'Viestin lähetyksen rajoittaminen',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Kuinka monta sekuntia käyttäjän on odotettava ennen kuin voi lähettää uuden viestin. Mikäli haluat käyttäjän ohittavan tämän rajan. Muokkaa heidän oikeuksiansa.',
	'HOT_THRESHOLD'					=> 'Viestien määrä keskusteluketjussa, jonka jälkeen se merkitään suosituksi. Nolla poistaa merkitsemisen suosituksi.',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Kuinka monta viestiä tarvitaan, jotta viesti voidaan merkitä suosituksi. Aseta 0 poistaaksesi toiminnon käytöstä.',
	'MAX_POLL_OPTIONS'				=> 'Äänestysten vaihtoehtojen lukumäärä',
	'MAX_POST_FONT_SIZE'			=> 'Viestissä olevan fontin enimmäiskoko',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_IMG_HEIGHT'			=> 'Viestissä olevan kuvan enimmäiskorkeus',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Viestissä olevan kuvan/Flash-tiedoston enimmäiskorkeus. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_IMG_WIDTH'			=> 'Viestissä olevan kuvan enimmäisleveys',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Viestissä olevan kuvan/Flash-tiedoston enimmäisleveys. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_URLS'					=> 'Viestissä olevien linkkien enimmäismäärä.',
	'MAX_POST_URLS_EXPLAIN'			=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MIN_CHAR_LIMIT'				=> 'Minimimäärä merkkejä viesteissä',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimimäärä merkkejä viesteissä/yksityisviesteissä. Pienin arvo tälle asetukselle on 1',
	'POSTING'						=> 'Viestien lähetys',
	'POSTS_PER_PAGE'				=> 'Viestiä per sivu',
	'QUOTE_DEPTH_LIMIT'				=> 'Viestissä olevien lainauksien enimmäismäärä',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'SMILIES_LIMIT'					=> 'Viestissä olevien hymiöiden enimmäismäärä',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'SMILIES_PER_PAGE'				=> 'Hymiöitä per sivu',
	'TOPICS_PER_PAGE'				=> 'Viestiketjua per sivu',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Täällä voit muuttaa allekirjoitusten oletusasetuksia',

	'MAX_SIG_FONT_SIZE'				=> 'Fontin enimmäiskoko',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Allekirjoituksessa käytettävän fontin enimmäiskoko. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Kuvan enimmäiskoko',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Allekirjoituksessa käytettävän kuva- tai Flash-tiedoston enimmäiskoko. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_IMG_WIDTH'				=> 'Kuvan enimmäisleveys',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Allekirjoituksessa käytettävän kuva- tai Flash-tiedoston enimmäisleveys. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_LENGTH'				=> 'Allekirjoituksen enimmäispituus',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Kuinka monta merkkiä käyttäjä voi kirjoittaa allekirjoitukseensa.',
	'MAX_SIG_SMILIES'				=> 'Hymiöiden enimmäismäärä allekirjoituksessa',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Kuinka monta hymiötä käyttäjä voi lisätä allekirjoitukseensa. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_URLS'					=> 'Allekirjoituksessa olevien linkkien määrä',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Kuinka monta linkkiä käyttäjä voi lisätä allekirjoitukseensa. Aseta nolla poistaaksesi rajoituksen käytöstä.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä rekisteröitymiseen ja profiiliin liittyviä asetuksia.',

	'ACC_ACTIVATION'			=> 'Käyttäjätunnusten aktivointi',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Tämä määrittelee. Pääseekö käyttäjä suoraan keskustelufoorumille vai tarvitseeko käyttäjätunnukset varmentaa ensin. Voit myös poistaa rekisteröitymisen kokonaan käytöstä. <em>Sähköpostitoimintojen tulee olla käytössä, jos aktivoinnin suorittaa käyttäjä tai ylläpitäjä.</em>',
	'ACC_ACTIVATION_WARNING'	=> 'Huomaa että valittu aktivointi edellyttää sähköpostin käyttöä, muutoin rekisteröinti ei ole mahdollista. Käytä joko toisenlaista aktivointitapaa tai salli sähköposti.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Uuden jäsenen viestiraja',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Uudet käyttäjät ovat <em>Uudet jäsenet</em> -ryhmässä siihen asti, kunnes ovat lähettäneet tämän verran viestejä. Tätä ryhmää voi käyttää estämään yksityisviestien lähetys ja vaatia viestien hyväksynnän valvojan toimesta ennen julkaisemista keskustelufoorumilla. <strong>Nolla poistaa asetuksen käytöstä.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Aseta uudet jäsenet -ryhmä oletukseksi',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Mikäli asetus on käytössä ja viestiraja on määritelty, laitetaan <em>uuden käyttäjän ryhmä</em> myös oletusryhmäksi. Tämä voi olla käytännöllinen, jos haluat laittaa ryhmälle avatarin ja muita asetuksia.',

	'ACC_ADMIN'					=> 'Ylläpitäjä',
	'ACC_DISABLE'				=> 'Poista rekisteröityminen käytöstä',
	'ACC_NONE'					=> 'Ei aktivointia (Käyttäjä pääsee heti keskustelufoorumille)',
	'ACC_USER'					=> 'Käyttäjä (sähköpostivarmennus)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Salli sähköpostiosoitteen uudelleenkäyttö',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Sallii eri käyttäjien rekisteröityä käyttämällä samaa sähköpostiosoitetta.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-faksinumero',
	'COPPA_MAIL'				=> 'COPPA-postitusosoite',
	'COPPA_MAIL_EXPLAIN'		=> 'Vanhemmat lähettävät COPPA-rekisteröitymislomakkeen tähän osoitteeseen',
	'ENABLE_COPPA'				=> 'Ota COPPA käyttöön',
	'ENABLE_COPPA_EXPLAIN'		=> 'Tämä vaatii uutta käyttäjää kertomaan onko hän yli- vai alle kolmetoistavuotias. Tämä on yhteensopiva Yhdysvaltain COPPA-lain kanssa. Mikäli tämä on poissa käytöstä, COPPA-käyttäjäryhmiä ei näytetä.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Sopivaa tunnistautumisen liitännäistä ei löytynyt.',
	'PASSWORD_LENGTH'			=> 'Salasanan pituus',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Salasanan merkkien vähimmäis- ja enimmäismäärät.',
	'REG_LIMIT'					=> 'Rekisteröintiyritykset',
	'REG_LIMIT_EXPLAIN'			=> 'Kuinka monta kertaa käyttäjä voi kokeilla varmistuskoodin syöttöä, kunnes hänen istuntonsa lukitaan.',
	'USERNAME_ALPHA_ONLY'		=> 'Vain numeroita ja kirjaimia',
	'USERNAME_ALPHA_SPACERS'	=> 'Vain numeroita, kirjaimia ja välimerkkejä',
	'USERNAME_ASCII'			=> 'ASCII-merkistön kirjaimet (Ei UNICODE-merkintää)',
	'USERNAME_LETTER_NUM'		=> 'Mikä tahansa kirjain tai numero',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Mikä tahansa kirjain, numero tai välimerkki',
	'USERNAME_CHARS'			=> 'Rajoita käyttäjätunnusten pituus',
	'USERNAME_CHARS_ANY'		=> 'Mikä tahansa merkki',
	'USERNAME_CHARS_EXPLAIN'	=> 'Rajoita millaisia merkkejä käyttäjä voi sisällyttää käyttäjätunnuksiinsa. Välimerkkejä ovat: välilyönti, -, +, _, [ ja ]',
	'USERNAME_LENGTH'			=> 'Käyttäjätunnuksen pituus',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Käyttäjätunnuksessa olevien merkkien vähimmäis- ja enimmäismäärät.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Syötteiden asetukset',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Tämä moduuli ottaa ATOM-syötteet käyttöön suorittaen myös kaikki BBCodet viesteistä.',

	'ACP_FEED_GENERAL'					=> 'Yleiset syötteiden asetukset',
	'ACP_FEED_POST_BASED'				=> 'Viestiin perustuvat asetukset',
	'ACP_FEED_TOPIC_BASED'				=> 'Viestiketjuun perustuvat asetukset',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Muut syötteet ja asetukset',

	'ACP_FEED_ENABLE'               	=> 'Salli syötteet',
	'ACP_FEED_ENABLE_EXPLAIN'       	=> 'Asettaa ATOM-syötteet käyttöön ja pois käytöstä keskustelufoorumilla.<br />Asetuksen ottaminen käytöstä poistaa syötteet kokonaan käytöstä, vaikka alapuolella olisikin jotain asetuksia.',
	'ACP_FEED_LIMIT'               		=> 'Kohteiden lukumäärä',
	'ACP_FEED_LIMIT_EXPLAIN'        	=> 'Näytettävien kohteiden lukumäärä.',

	'ACP_FEED_OVERALL'					=> 'Ota syötteet käyttöön',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Kaikki keskustelufoorumin uudet viestit.',
	'ACP_FEED_FORUM'					=> 'Ota syötteet käyttöön aluekohtaisesti',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Yksittäiset alueet ja niiden sisäalueet.',
	'ACP_FEED_TOPIC'					=> 'Ota syötteet käyttöön viestiketjukohtaisesti',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Valitun viestiketjun uudet viestit.',

	'ACP_FEED_TOPICS_NEW'				=> 'Ota uuden viestiketjun syöte käyttöön',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Ottaa käyttöön “Uudet viestiketjut” -syötteen, joka näyttää uusimmat viestiketjut ja niiden ensimmäisen viestin.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Ota aktiivisten viestiketjujen syöte käyttöön',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Ottaa käyttöön “Aktiiviset viestiketjut” -syötteen, joka näyttää viimeisimmät aktiiviset viestiketjut ja niihin tulleet uusimmat viestit.',
	'ACP_FEED_NEWS'						=> 'Uutissyöte',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Hae ensimmäinen viesti näiltä alueilta. Älä valitse yhtään aluetta poistaaksesi toiminnon käytöstä.<br />Voit valita useamman alueen pitämällä pohjassa <samp>CTRL</samp>-näppäintä ja napsauttamalla haluamiasi alueita.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Ota kaikkien alueiden syöte käyttöön',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Ottaa käyttöön “Kaikki alueet” -syötteen, joka näyttää listan alueista.',

	'ACP_FEED_HTTP_AUTH'				=> 'Salli HTTP-tunnistautuminen',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Ottaa käyttöön HTTP-tunnistautumisen, joka sallii käyttäjien katsella sisältöä joka olisi muutoin piilossa lisäämällä <samp>auth=http</samp>-paramterin syötteen URLiin. Huomaa, että jotkin PHP-konfiguraatiot tarvitsevat lisäasetuksia .htaccess-tiedostoon. Ohjeet löytyvät tuosta tiedostosta.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Kohteen tilastot',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Näytä tilastoja kohteen yhteydessä<br />(esim. päiväys, aika, luettu, vastaukset)',
	'ACP_FEED_EXCLUDE_ID'            	=> 'Älä huomioi näitä alueita',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'      	=> 'Näiden alueiden sisältöä <strong>ei sisällytetä syötteisiin</strong>. Älä valitse yhtään aluetta hakeaksesi tiedot kaikilta alueilta<br />Voit valita useamman alueen pitämällä pohjassa <samp>CTRL</samp>-näppäintä ja napsauttamalla haluamiasi kohteita.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Täällä voit muokata visuaalisen varmistuksen oletusasetuksia, sekä <em>CAPTCHA</em>-asetuksia.',
	'ACP_VC_EXT_GET_MORE'			=> 'Lisätietoa ja plugin ohjelmia, katso <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. Lisätietoa haittaohjelmien torjunnasta katso <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Käytössäsi olevat liitännäiset',
	'CAPTCHA_UNAVAILABLE'					=> 'Tätä liitännäistä ei voi valita, koska sen vaatimukset eivät täyty.',
	'CAPTCHA_GD'							=> 'GD-kuva',
	'CAPTCHA_GD_3D'							=> 'Kolmiulotteinen GD-kuva',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Etualan meteli',
	'CAPTCHA_GD_EXPLAIN'					=> 'Käytä GD:tä tehdäksesi vaikeampi kuva',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Käytä etualan meteliä tehdäksesi kuvasta vaikeammin luettavan.',
	'CAPTCHA_GD_X_GRID'						=> 'Taustan meteli x-akselilla',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Käytä pienempää asetusta tehdäksesi kuvasta vaikeammin luettavan. 0 poistaa x-akselilta taustametelin.',
	'CAPTCHA_GD_Y_GRID'						=> 'Taustan meteli y-akselilla',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Käytä pienempää asetusta tehdäksesi kuvasta vaikeammin luettavan. 0 poistaa y-akselilta taustametelin.',
    'CAPTCHA_GD_WAVE'                  		=> 'Aallon vääristymä',
    'CAPTCHA_GD_WAVE_EXPLAIN'           	=> 'Tämä luo aaltomaisen vääristymän kuvaan.',
    'CAPTCHA_GD_3D_NOISE'               	=> 'Lisää meteliä 3D objekteilla',
    'CAPTCHA_GD_3D_NOISE_EXPLAIN'       	=> 'Tämä lisää objekteja kirjaimien päälle.',
    'CAPTCHA_GD_FONTS'                  	=> 'Käytä erilaisia fontteja',
    'CAPTCHA_GD_FONTS_EXPLAIN'          	=> 'Tämä asetus määrittelee kuinka monta erilaista tekstimuotoa on käytettävissä. Voit käyttää oletusmuotoja tai lisätä muunnoksia. Voit myös lisätä pieniä kirjaimia.',
    'CAPTCHA_FONT_DEFAULT'               	=> 'Oletus',
    'CAPTCHA_FONT_NEW'                  	=> 'Uudet muodot',
    'CAPTCHA_FONT_LOWER'               		=> 'Käytä myös pieniä kirjaimia',
	'CAPTCHA_NO_GD'							=> 'Yksinkertainen kuva',
	'CAPTCHA_PREVIEW_MSG'					=> 'Visuaaliseen varmistukseen tekemiäsi muutoksia ei ole tallennettu. Tämä on vain esikatselu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Liitännäisen esikatselu nykyisillä asetuksilla. Käytä esikatselu-painiketta päivittääksesi sivun. Huomaa, että varmistuskuva on satunnainen ja muuttuu jokaisella päivityskerralla.',

	'CAPTCHA_SELECT'						=> 'Asennetut liitännäiset',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Löydät käytössäsi olevat liitännäiset alasvetovalikosta. Harmaana olevat vaihtoehdot eivät ole suoraan käytettävissä, vaan tarvitsevat asetuksia.',
	'CAPTCHA_CONFIGURE'						=> 'Liitännäisen asetukset',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Muuta valitsemasi liitännän asetuksia.',
	'CONFIGURE'								=> 'Muokkaa',
	'CAPTCHA_NO_OPTIONS'					=> 'Tällä liitännäisellä ei ole muokattavia asetuksia.',

	'VISUAL_CONFIRM_POST'					=> 'Ota varmennus käyttöön vierailijoille',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vaatii vierailevaa käyttäjää syöttämään varmistuskoodin estäen näin roskapostitusta.',
	'VISUAL_CONFIRM_REG'					=> 'Ota varmennus käyttöön rekisteröitymiseen',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vaatii käyttäjän syöttämään varmistuskoodin rekisteröitymisen yhteydessä estäen näin automaattisia rekisteröitymisiä.',
    'VISUAL_CONFIRM_REFRESH'            	=> 'Salli varmistuskuvan uusiminen',
    'VISUAL_CONFIRM_REFRESH_EXPLAIN'     	=> 'Sallii rekisteröitymässä olevan käyttäjän pyytää uuden varmistuskuvan, mikäli alkuperäinen oli liian vaikea.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Nämä asetukset määrittävät kuinka evästeet lähetetään käyttäjiesi selaimeen. Useimmissa tapauksissa oletusasetusten pitäisi olla riittävät. Mikäli joudut muuttamaan näitä, ole varovainen, sillä väärät asetukset voivat estää käyttäjiä kirjautumasta sisään.',

	'COOKIE_DOMAIN'				=> 'Evästeiden palvelin',
	'COOKIE_NAME'				=> 'Evästeen nimi',
	'COOKIE_PATH'				=> 'Evästeen polku',
	'COOKIE_SECURE'				=> 'Suojattu eväste',
	'COOKIE_SECURE_EXPLAIN'		=> 'Mikäli palvelimellasi on SSL käytössä, ota tämä käyttöön. Mikäli tämä on käytössä ja palvelin ei tue SSL:ää, se johtaa ongelmiin uudelleenohjausten kanssa.',
	'ONLINE_LENGTH'				=> 'Paikallaolijoiden listan aikaväli',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Kuinka monta minuuttia käyttäjä pysyy paikallaolijoiden listassa. Pieni arvo tarkoittaa vähemmän kuormitusta.',
	'SESSION_LENGTH'			=> 'Istunnon pituus',
	'SESSION_LENGTH_EXPLAIN'	=> 'Istunto kuoleentuu tämän ajan jälkeen (sekunteina)',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'	=> 'Täällä voit hallita kontakti sivun ominaisuuksia ja muuttaa siellä näkyvi tekstejä.',

	'CONTACT_US_ENABLE'				=> 'Salli yhteydenotto sivu',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Tämä sivun avulla voi lähettää viestin palstan ylläpidolle',

	'CONTACT_US_INFO'				=> 'Yhteys tiedot',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Tämä viesti näkyy yhteydenotto sivulla',
	'CONTACT_US_INFO_PREVIEW'		=> 'Yhteydenotto esikatselu',
	'CONTACT_US_INFO_UPDATED'		=> 'Yhteys sivun sisältö päivitetty.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Tässä voit sallia ja estää palstan toimintoja joilla voi vähentää palvelimen kuormitusta. Useimmiten tämä ei ole tarpeellista, kuitenkin joissakin tilanteissa ja jaetussa palvelinkäytössä saattaa olla edullista estää tarpeettomat toiminnot. Voit myös määritellä palvelimen kuorman ja aktiivisten istuntojen määrän minkä jälkeen palsta menee offline tilaan.',

	'ALLOW_CDN'						=> 'Salli kolmannen osapuolen verkkoyhteys',
	'ALLOW_CDN_EXPLAIN'				=> 'Kun tämä asetus on valittu, jotkin tiedostot tulevat ulkoisesta palvelimesta. Tämä vähentää palvelimen tarvitsemaa kaistanleveyttä, mutta voi aiheuttaa yksityisyys ongelmia joillekin palstan ylläpitäjille. Oletus asetus phpBB:lle sisältää “jQuery” ja fontin “Open Sans” Googlen palvelimelta.',
	'ALLOW_LIVE_SEARCHES'			=> 'Salli live haut',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Jos tämä asetu on voimassa, käyttäjille ehdotetaan avainsanoja kun he kirjoittavat teksiä.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Muokatut käyttäjätiedon kentät ',
	'LIMIT_LOAD'					=> 'Palvelimen kuorma raja',
	'LIMIT_LOAD_EXPLAIN'			=> 'Kun palvelimen 1-minuutin keskikuorma ylittää tämän arvon palsta siirtyy automaattisesti offline tilaan. Lukuarvo 1.0 vastaa ~100% kuormaa yhdelle prosessorille. Tämä toiminto on käytössä vain UNIX-pohjaisissa palvelimissa. Lukuarvo resetoituu automaattisesti jos phpBB ei pysty lukemaan kuorma rajan ohjearvoa.',
	'LIMIT_SESSIONS'				=> 'Rajoita istuntoja',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Jos istuntojen lukumäärä/minuutti ylittää tämän lukeman menee palsta automaattisesti offline tilaan . Asetusarvo 0 = rajoittamaton määrä istuntoja.',
	'LOAD_CPF_MEMBERLIST'			=> 'Salli tyylien näyttää henkilötietojen muokkaus kentät jäsenlistassa',
	'LOAD_CPF_PM'					=> 'Näytä henkilötietojen muokkaus kentät yksityisviesteissä',
	'LOAD_CPF_VIEWPROFILE'			=> 'Näytä henkilötietojen muokkaus kentät käyttäjätiedoissa',
	'LOAD_CPF_VIEWTOPIC'			=> 'Näytä henkilötietojen muokkaus kentät viestiketju sivulla',
	'LOAD_USER_ACTIVITY'			=> 'Näytä käyttäjän aktiivisuus',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Näytä aktiivinen aihe/forum käyttäjätiedoissa ja käyttäjätiedon asetus sivuilla asetus. Jos palstalla on yli 1 miljoona kappaletta viestejä, estä tämä ominaisuus.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Lue ilmoituksen vanhenemistieto',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Lukema joka kertoo kuinka monen päivän kuluttua luettu tieto nollautuu automaattisesti. Lukema 0 asettaa ilmoituksen pysyvästi voimaan.',
	'RECOMPILE_STYLES'				=> 'Käännä tyylitiedosto uudestaan',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Tarkista tiedostojärjestelmän tyyli komponentit ja käännnä.',
	'YES_ANON_READ_MARKING'			=> 'Salli viestiketjun aiheiden merkitseminen vieraille',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Muistaa vieraiden luettu/ei_luettu tilatiedot. Kun tämä on estetty, viestit näkyvät aina "luettu" tilaisena vieraille.',
	'YES_BIRTHDAYS'					=> 'Salli syntymäpäivälistan näkyminen',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Jos estetty, syntymäpäivälista ei enää näy. Muista aktivoida syntymäpäivien näkyminen kun haluat ne näkyviin.',
	'YES_JUMPBOX'					=> 'Salli "hyppy"',
	'YES_MODERATORS'				=> 'Salli palstan tukihenkilöiden näkyminen',
	'YES_ONLINE'					=> 'Salli "online" käyttäjien näkyminen',
	'YES_ONLINE_EXPLAIN'			=> 'Näytä "online" käyttäjän tiedot etusivulla, palstalla ja viestiketuissa.',
	'YES_ONLINE_GUESTS'				=> 'Salli "online" vieraiden näkyminen',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Salli vieraiden tilatiedon näkyminen.',
	'YES_ONLINE_TRACK'				=> 'Salli käyttäjän online/offline tilatieto',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Näytä käyttäjän tilatieto asetussiuilla ja viestiketjussa',
	'YES_POST_MARKING'				=> 'Salli . merkityt viestiketjut',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indikoi onko käyttäjä lähettänyt viestin aiheketjuun.',
	'YES_READ_MARKING'				=> 'Salli tilatiedon säilyttämnen palvelimella',
	'YES_READ_MARKING_EXPLAIN'		=> 'Tallentaa luettu/ei_luettu tiedon palvelimen tietokantaan.',
	'YES_UNREAD_SEARCH'				=> 'Salli "ei_luettu" viestien haku',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB tukee tunnistautumisen lisäosia tai moduuleita. Näiden avulla voit määrittää kuinka käyttäjä tunnistetaan hänen saapuessaan keskustelufoorumille. phpBB-paketin mukana on toimitettu neljä erilaista tunnistautumismenetelmää: DB, LDAP, Apache ja OAuth. Kaikkia tietoja ei tarvita, joten täytä vain ne, jotka ovat tarvittavia valitsemassasi tunnistamismenetelmässä.',

	'AUTH_METHOD'				=> 'Valitse tunnistautumismenetelmä',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Sekä avain että koodi  OAuth palveluun pitää olla käytössä. Vain toinen näistä on  annettu OAuth palveluun.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Jokainen OAuth palvelu vaatii sekä koodin että avaimen palvelimelle tunnistautumiseen. Ne molemmat saat OAuth palvelun toimittajalta kun rekisteröit sivustosi heidän palveluunsa - ne molemmat pitää syöttää juuri oikealla tavalla.<br />Jos palveluun ei syötetä haluttuja avaimia eivät ne avaudu käyttäjille. Muista että käyttäjä voi myös rekisteröityä DB tunnistautumisen avulla.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Avain',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Koodi',

	'APACHE_SETUP_BEFORE_USE'	=> 'Apachen tunnistautminen täytyy asentaa ensin ennen kuin voit vaihtaa phpBB:n käyttämään tätä menetelmää. Huomaa, että käyttäjätunnuksen apachen tunnistautumiseen täytyy olla sama, kuin phpBB:n käyttäjätunnuksesi.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Tämä on se erottuva nimi, joka paikallistaa käyttäjän tiedot, esim. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'LDAP-sähköpostin attribuutti',
	'LDAP_EMAIL_EXPLAIN'			=> 'aseta tähän käyttäjän sähköpostiosoite (jos on olemassa) asettaaksesi sähköpostiosoitteen automaattisesti uusille käyttäjille. Jos tämä jätetään tyhjäksi. Ensimmäistä kertaa kirjautuvien käyttäjien sähköpostiosoite jätetään tyhjäksi.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'LDAP-palvelimen sitominen epäonnistui antamallasi käyttäjätunnuksella/salasanalla.',
	'LDAP_NO_EMAIL'					=> 'Määrittämääsi sähköpostia ei ole olemassa.',
	'LDAP_NO_IDENTITY'				=> 'En löytänyt kirjautumisidentiteettiä %s',
	'LDAP_PASSWORD'					=> 'LDAP-salasana',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Jätä tyhjäksi käyttääksesi anonyyminä. Muussa tapauksessa anna tarvittava salasana.<br /><em><strong>VAROITUS:</strong> Tämä salasana tallennetaan tietokantaan tavalisena tekstinä ja on kaikkien luettavissa, joilla on pääsy tietokantaan tai näkevät tämän sivun.</em>',
	'LDAP_PORT'						=> 'LDAP-palvelimen portti',
	'LDAP_PORT_EXPLAIN'				=> 'Vaihtoehtoisesti voit määrittää toisen portin, mikäli palvelin ei käytä oletusporttia 389.',
	'LDAP_SERVER'					=> 'LDAP-palvelimen nimi',
	'LDAP_SERVER_EXPLAIN'			=> 'Mikäli LDAP-todennus on käytössä, tämä on LDAP-palvelimen isäntänimi tai IP-osoite. Vaihtoehtoisesti voit määrittää osoitteen muodossa ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP uid',
	'LDAP_UID_EXPLAIN'				=> 'Tällä avaimella etsitään annettua kirjutmisidentiteettiä, esim. <var>uid</var>, <var>sn</var> jne.',
	'LDAP_USER'						=> 'LDAP-käyttäjä',
	'LDAP_USER_EXPLAIN'				=> 'Jätä tyhjäksi käyttääksesi anonyyminä. Mikäli tämä on annettu, phpBB yrittää kirjautua tällä tunnuksella.',
	'LDAP_USER_FILTER'				=> 'LDAP-käyttäjän suodatus',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Vaihtoehtoisesti voit rajoittaa etsittyjä objekteja lisäsuodattimilla. Esimerkiksi <samp>objectClass=posixGroup</samp> asettaa käyttöön <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Täällä voit määritellä palvelin- ja toimialueriippuvaiset asetukset. Pidä huoli, että antamasi tieto on oikein. Virheet tässä aiheuttavat sähköpostiin virheellisiä tietoja. Toimialueen nimeä antaessasi muista, että siihen kuuluu myös http:// tai joku muu käytössäsi oleva protokolla. Muuta portin arvoa vain, jos tiedät palvelimen käyttävän toista porttia. Portti 80 on yleensä oikea.',

	'ENABLE_GZIP'				=> 'Ota GZip-pakkaus käyttöön',
	'ENABLE_GZIP_EXPLAIN'		=> 'Tämä vaihtoehto pakkaa palvelimen luoman sisällön ennen lähettämistä, mikäli käyttäjän selain tukee tällaista toimintoa. Tämä voi pienentää siirtokaistan käyttöä, mutta se kuormittaa palvelinta ja käyttäjän tietokonetta.',
	'FORCE_SERVER_VARS'			=> 'Pakota URL-asetukset',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Mikäli asetus on käytössä nämä tiedot korvaavat automaattisesti tunnistetut asetukset',
	'ICONS_PATH'				=> 'Viestien kuvakkeiden tallennuspolku',
	'ICONS_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/icons</samp>',
	'MOD_REWRITE_ENABLE'		=> 'Salli URL kirjoitus',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Kun sallittu, URL:t jotka sisältävät tiedostonimen ylikirjoitetaan (i.e. app.php/foo tulee /foo). <strong>Apache serverin mod_rewrite module tarvitaan tähän toimintoon; jos tämä option on valittu ilman mod_rewrite tukea, URL:t sinun sivuillasi voivat lakata toimimasta.</strong>',
	'MOD_REWRITE_DISABLED'		=> '<strong>mod_rewrite</strong> module Apache web serverillä on estetty. Salli mod_rewrite tai ota yhteys ylläpitoon kun tarvitset tätä ominaisuutta.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Palvelimen kykyä ylikirjoittaa URL ei saatu määritettyä. Tämä asetus on mahdollista aktivoida muuta jos URL ylikirjoitus ei toimi , tiedostopolut joita tämä palsta tuottaa saattavat olla rikki (käytössä linkeissä). Ota yhteys web-hosting palveluun jos olet epävarma tämän ominaisuuden toiminnasta.',
	'PATH_SETTINGS'				=> 'Polun asetukset',
	'RANKS_PATH'				=> 'Arvonimen kuvakkeen tallennuspolku',
	'RANKS_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Ohjelman polku',
	'SCRIPT_PATH_EXPLAIN'		=> 'Polku, jossa phpBB-ohjelma sijaitsee suhteessa verkko-osoitteeseen esimerkiksi, <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Toimialueen nimi',
	'SERVER_NAME_EXPLAIN'		=> 'Tämän keskustelufoorumin toimialueen nimi (esimerkiksi: <samp>www.example.com</samp>)',
	'SERVER_PORT'				=> 'Palvelimen portti',
	'SERVER_PORT_EXPLAIN'		=> 'Palvelimen käyttämä portti, yleensä 80. Vaihda tätä vain, jos se ei ole oikein',
	'SERVER_PROTOCOL'			=> 'Palvelimen protokolla',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Tätä protokollaa käytetään, mikäli asetus on pakotettu. Mikäli tämä on tyhjä tai protokollaa ei ole pakotettu, tämä määritellään suojatun evästeen asetuksilla (<samp>http://</samp> tai <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Palvelimen URL-asetukset',
	'SMILIES_PATH'				=> 'Hymiöiden tallennuspolku',
	'SMILIES_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Tunnisteryhmien ikoneiden talennuspolku',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/upload_icons</samp>',
	'USE_SYSTEM_CRON'		=> 'Käytä palvelimen cron jaksoitettuihin tehtäviin',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Kun OFF, phpBB käynnistää jaksoitetut tehtävät automaattisesti. Kun ON, phpBB ei jaksoita tehtäviä itsestään; ylläpitäjän pitää määritellä <code>bin/phpbbcli.php cron:run</code> tehtävät jotka pitää suorittaa säännöllisesti (esim   5 minuutin välein).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä kirjautumiseen ja istuntoon liittyviä asetuksia',

	'ALL'							=> 'Kaikki',
	'ALLOW_AUTOLOGIN'				=> 'Salli "Muista minut" -kirjautumiset',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Määrittelee sallitaanko käyttäjän kirjautua automaattisesti sisään saapuessaan keskustelufoorumille.', 
	'ALLOW_PASSWORD_RESET'			=> 'Salli salasanan resetointi ("Salasana unohtunut")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Määrittelee voivatko käyttäjät käyttää "Salasana Unohtunut" linkkiä käyttäjätunnuksensa palauttamisessa. Jos käytät ulkopuolista tunnistautumista - älä käytä tätä ominaisuutta.',
	'AUTOLOGIN_LENGTH'				=> '"Muista minut" -avaimen kuoleentuminen päivissä',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Lukumäärä päivinä, jonka jälkeen kirjautumisen avain vanhenee. Aseta nolla poistaaksesi toiminnon käytöstä.', 
	'BROWSER_VALID'					=> 'Varmenna selain',
	'BROWSER_VALID_EXPLAIN'			=> 'Ottaa selaimen varmennuksen käyttöön jokaiselle istunnolle varmentaen näin tietoturvaa.',
	'CHECK_DNSBL'					=> 'Tarkista IP-osoite käyttämällä DNS blackhole -listaa',
	'CHECK_DNSBL_EXPLAIN'			=> 'Jos tämä on käytössä. IP-osoite tarkistetaan käyttämällä seuraavia DNSBL-palveluita aina rekisteröitymisen ja viestin kirjoittamisen yhteydessä: <a href="http://spamcop.net">spamcop.net</a> ja <a href="http://spamhaus.org">spamhaus.org</a>. Tämä tarkistus saattaa kestää palvelimen konfiguraatiosta riippuen hetken aikaa. Mikäli tässä tarkistuksessa kestää jatkuvasti liian kauan tai se antaa virheellisiä tuloksia, kannattaa ottaa tämä asetus pois käytöstä.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Tarkista onko sähköpostipalvelimella kelvollinen MX-tietue',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Jos tämä on käytössä käyttäjän antamasta sähköpostiosoitteesta tarkistetaan onko sillä olemassa kelvollista MX-tietuetta.',
	'FORCE_PASS_CHANGE'				=> 'Pakota salasanan muuttaminen',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Pakottaa käyttäjän vaihtamaan salasanaansa tietyn ajan välein. Aseta nolla poistaaksesi toiminnon käytöstä.',
	'FORM_TIME_MAX'					=> 'Enimmäisaika lomakkeen lähettämiseen',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Aikaraja, jonka sisällä käyttäjän on lähetettävä lomake. Aseta -1 poistaaksesi toiminnon käytöstä. Huomaa, että lomakkeesta voi tulla epäkelpo mikäli istunto vanhenee tästä asetuksesta huolimatta.',
	'FORM_SID_GUESTS'				=> 'Sido lomake vierailijan istuntoon',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Mikäli tämä on käytössä lomakkeen vierailijoille annettu valtuus on riippuvainen istunnosta. Tämä voi aiheuttaa ongelmia joidenkin internet-yhteydentarjoajien kanssa.',
	'FORWARDED_FOR_VALID'			=> 'Varmennus <var>X_FORWARDED_FOR</var>-headerille',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Istuntoa jatketaan vain, jos lähetetty <var>X_FORWARDED_FOR</var>-header on sama, kuin edellisellä kerralla vaadittu. Porttikiellot tarkistetaan <var>X_FORWARDED_FOR</var> IP-osoitteiden avulla.',
	'IP_VALID'						=> 'Istunnon IP-osoitteen varmennus',
	'IP_VALID_EXPLAIN'				=> 'Määrittelee mikä osa IP-osoitteesta käytetään tunnistamiseen; <samp>All</samp> koko osoite verrataan, <samp>A.B.C</samp> ensimmäiset x.x.x, <samp>A.B</samp> ensimmäiset x.x, <samp>None</samp> ei käytössä. IPv6 osotteista <samp>A.B.C</samp> tarkistaa ensimmäiset 4 ryhmää ja <samp>A.B</samp> ensimmäiset 3 ryhmää.',
	'IP_LOGIN_LIMIT_MAX'            => 'Enimmäismäärä kirjautumisyrityksiä per IP-osoite',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'    => 'Kuinka monta kertaa käyttäjä voi yrittää kirjautumista yhdestä IP-osoitteesta, ennen kuin roskapostituksen estotoimet tulevat käyttöön. Nolla poistaa toiminnon käytöstä.',
	'IP_LOGIN_LIMIT_TIME'           => 'IP-osoitteen aikaraja',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'   => 'Kirjautumisyritykset mitätöityvät tämän ajan jälkeen.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'  => 'Rajoita kirjautumisyrityksiä <var>X_FORWARDED_FOR</var> viittaajalla',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'   => 'Rajoittaa kirjautumisyrityksiä IP-osoitteen sijasta <var>X_FORWARDED_FOR</var>-viittaajan arvoilla. <br /><em><strong>Varoitus:</strong> Käytä tätä vain, jos käytät välityspalvelinta, jonka asettamiin <var>X_FORWARDED_FOR</var>-viittaajin voidaan luottaa.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Enimmäismäärä kirjautumisyrityksiä',
    'MAX_LOGIN_ATTEMPTS_EXPLAIN'    => 'Kuinka monta kertaa käyttäjä voi kokeilla kirjautumista, kunnes vaaditaan myös roskapostituksen estoon tarkoitetun kentän täyttämistä.',
	'NO_IP_VALIDATION'				=> 'Ei',
	'NO_REF_VALIDATION'				=> 'Ei mitään',
	'PASSWORD_TYPE'					=> 'Salasanan monimutkaisuus',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Määrittelee kuinka monimutkaisen salasanan on oltava sitä asettaessa tai muutettaessa. Seuraavat asetukset kuuluvat edellisiin asetuksiin.',
	'PASS_TYPE_ALPHA'				=> 'Täytyy sisältää ISOJA ja pieniä kirjaimia, sekä numeroita',
	'PASS_TYPE_ANY'					=> 'Ei vaatimuksia',
	'PASS_TYPE_CASE'				=> 'Täytyy sisältää ISOJA ja pieniä kirjaimia',
	'PASS_TYPE_SYMBOL'				=> 'Täytyy sisältää ISOJA ja pieniä kirjaimia, sekä numeroita ja symboleita',
	'REF_HOST'						=> 'Varmenna vain isäntä',
	'REF_PATH'						=> 'Varmenna myös polku',
	'REFERRER_VALID'					=> 'Varmenna viittaaja',
	'REFERRER_VALID_EXPLAIN'			=> 'Mikäli käytössä, POST-pyynnön viittaaja tarkistetaan isännän ja skriptin polun mukaan. Tämä saattaa aiheuttaa ongelmia, jos keskustelufoorumi käyttää useaa osoitetta tai ulkopuolisia kirjautumisia.',
	'TPL_ALLOW_PHP'					=> 'Salli PHP:n käyttö mallineissa',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Mikäli tämä vaihtoehto on käytössä, <code>PHP</code>- ja <code>INCLUDEPHP</code> -käskyt tunnistetaan mallineissa ja suoritetaan.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Näitä asetuksia käytetään keskustelufoorumin sähköpostitoimintoihin. Varmista, että käyttämäsi sähköpostiosoite on toimiva, sillä palautettavista ja epäonnistuneista viesteistä tulee ilmoitus todennäköisesti juuri tähän osoitteeseen. Voit lähettää sähköpostia, joko PHP:n natiivilla toiminnolla, tai käyttämällä SMTP-palvelinta viestien lähettämiseen. SMTP-palvelimen käyttöön tarvittavat tunnukset saat palveluntarjoajaltasi. Jos palvelin käyttää tunnistautumista (ja vain jos), syötä tarvittava tunnus, salasana ja tunnistautumismenetelmä.',

	'ADMIN_EMAIL'					=> 'Sähköpostin palautusosoite',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Tätä käytetään kaikkien sähköpostiviestien <samp>palautusosoitteena</samp> ja <samp>lähettäjän</samp> osoitteena.',
	'BOARD_EMAIL_FORM'				=> 'Käyttäjät voivat lähettää sähköpostia keskustelufoorumin kautta',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Tämä toiminto piilottaa käyttäjän sähköpostiosoitteen ja antaa käyttäjien lähettää sähköpostia keskustelufoorumin kautta.',
	'BOARD_HIDE_EMAILS'				=> 'Piilota sähköpostiosoitteet',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Tämä valinta pitää sähköpostiosoitteet yksityisenä tietona.',
	'CONTACT_EMAIL'					=> 'Ylläpidon sähköpostiosoite',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Tätä osoitetta käytetään, kun tarvitaan kontakti ylläpitoon, esim. roskaposti, virheviestit, jne. Tätä osoitetta käytetään aina <samp>lähettäjänä</samp> ja <samp>vastausosoitteena</samp>.',
	'CONTACT_EMAIL_NAME'			=> 'Yhteys nimi',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Sähköpostin vastaanottajalle näkyvä yhteys nimi. Jos et halua "Yhteys nime" jätä kenttä tyhjäksi.',
	'EMAIL_FUNCTION_NAME'			=> 'Sähköpostifunktion nimi',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Käytettävän funktion nimi, kun sähköposti lähetetään PHP:n kautta.',
	'EMAIL_PACKAGE_SIZE'			=> 'Sähköpostipaketin koko',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Kuinka monta sähköpostia lähetetään yhdessä paketissa. Tämä asetus määrittelee sisäisen viestijonon. Aseta tämä arvoon 0, jos ilmoitussähköpostien saapumisessa on ongelmia.',
	'EMAIL_SIG'						=> 'Sähköpostin allekirjoitus',
	'EMAIL_SIG_EXPLAIN'				=> 'Tämä teksti liitetään kaikkiin lähetettyihin sähköpostiviesteihin.',
	'ENABLE_EMAIL'					=> 'Ota sähköpostitoiminnot käyttöön',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Mikäli tämä on poissa käytöstä, keskustelufoorumi ei lähetä yhtäkään sähköpostiviestiä.<em>Huomaa, että käyttäjän ja ylläpitäjän toimesta tehdyt tunnusten aktivoinnit vaativat tämän asetuksen käyttöönottoa. Jos käytät käyttäjän tai ylläpitäjän aktivointia, tämän toiminnon poistäminen käytöstä estää rekisteröitymisen.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP:n tunnistautumismenetelmä',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Tätä käytetään vain, mikäli käyttäjätunnus/salasana on asetettu. Kysy palveluntarjoajaltasi, jos et ole varma mitä menetelmää tulisi käyttää.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-salasana',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Laita salasana vain, jos palvelin sitä vaatii.<br /><em><strong>VAROITUS:</strong> Tämä salasana tallennetaan tietokantaan selväkielisenä ja on kaikkien luettavissa, joilla on pääsy tietokantaan tai näkevät tämän sivun.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-palvelimen portti',
	'SMTP_PORT_EXPLAIN'				=> 'Vaihda tätä vain, jos tiedät SMTP-palvelimen toimivan toisessa portissa.',
	'SMTP_SERVER'					=> 'SMTP-palvelimen osoite',
	'SMTP_SETTINGS'					=> 'SMTP-asetukset',
	'SMTP_USERNAME'					=> 'SMTP-käyttäjätunnus',
	'SMTP_USERNAME_EXPLAIN'			=> 'Anna käyttäjätunnus vain, jos palvelin sitä vaatii.',
	'USE_SMTP'						=> 'Käytä SMTP-palvelinta sähköpostin lähettämiseen',
	'USE_SMTP_EXPLAIN'				=> 'Valitse "kyllä", jos haluat lähettää sähköpostit erillisen SMTP-palvelimen kautta etkä käytä paikallista sähköpostin lähetystä.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Täällä voit hallita Jabberia ja kuinka sitä käytetään pikaviestintään ja keskustelufoorumin tiedotteisiin. Jabber on avoimeen lähdekoodiin perustuva protokolla ja sitäkautta kaikkien saatavilla. Jotkut Jabber-palvelut pitävät sisällään yhdyskäytävän tai siirtopalvelut, joilla voit olla yhteydessä toisella palvelimella oleviin käyttäjiin. Kaikki palvelimet eivät tarjoa siirtoa ja muutokset protokollassa saattavat estää toiminnan. Huomaa, että Jabber tilin päivitys saattaa kestää useamman sekunnin. Älä pysäytä skriptiä ennen kuin se on suorittanut toimintonsa loppuun!',

	'JAB_ENABLE'				=> 'Ota Jabber käyttöön',
	'JAB_ENABLE_EXPLAIN'		=> 'Ottaa Jabber-viestinnän ja ilmoitukset käyttöön',
	'JAB_GTALK_NOTE'			=> 'Huomaa, että GTalk ei toimi, koska <samp>dns_get_record</samp>-funktiota ei löytynyt. Tätä funktiota ei ole saatavilla PHP4-ympäristössä ja sitä ei ole Windows-alustalla. Tällä hetkellä se ei myöskään toimi BSD-järjestelmissä, joihin myös Mac OS kuuluu.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-paketin koko',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Jabber lähettää näin monta viestiä yhdessä paketissa. Mikäli asetuksena on 0. Viestit lähetetään välittömästi eikä niitä aseteta jonoon myöhempää lähetystä varten.',
	'JAB_PASSWORD'				=> 'Jabber-salasana',
	'JAB_PASSWORD_EXPLAIN'		=> '<br /><em><strong>VAROITUS:</strong> Tämä salasana tallennetaan tietokantaan tavalisena tekstinä ja on kaikkien luettavissa, joilla on pääsy tietokantaan tai näkevät tämän sivun.</em>',
	'JAB_PORT'					=> 'Jabber-portti',
	'JAB_PORT_EXPLAIN'			=> 'Jätä tyhjäksi, mikäli tiedät, että se ei ole 5222',
	'JAB_SERVER'				=> 'Jabber-palvelin',
	'JAB_SERVER_EXPLAIN'		=> 'Katso %sjabber.org%s sadaksesi listan palvelimista',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-asetukset on vaihdettu',
	'JAB_USE_SSL'				=> 'Käytä SSL-yhteyttä',
	'JAB_USE_SSL_EXPLAIN'		=> 'Mikäli tämä on käytössä, yritetään käyttää suojattua yhteyttä. Käytettävä portti muutetaan arvoon 5223 jos portti 5222 on määritetty.',
	'JAB_USERNAME'				=> 'Jabber-käyttäjätunnus tai JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Anna Jabber-käyttäjätunnus tai JID. Käyttäjätunnuksen oikeellisuutta ei tarkisteta. Mikäli annat vain käyttäjätunnuksen, JID on asetettu palvelimen osoitteeksi. Muussa tapauksessa määrittele kelvollinen JID, esimerkiksi user@jabber.org.',
));
