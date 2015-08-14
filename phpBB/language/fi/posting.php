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
	'ADD_ATTACHMENT'			=> 'Liitetiedostot',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Voit lisätä yhden tai useamman tiedoston.',
	'ADD_FILE'					=> 'Lisää tiedosto',
	'ADD_POLL'					=> 'Luo äänestys',
	'ADD_POLL_EXPLAIN'			=> 'Jos et halua lisätä äänestystä. Jätä kentät tyhjiksi',
	'ALREADY_DELETED'			=> 'Pahoittelut, mutta viesti on jo poistettu.',
	'ATTACH_DISK_FULL'			=> 'Levyllä ei ole tarpeeksi tilaa tämän liitetiedoston tallentamiseen.',
	'ATTACH_QUOTA_REACHED'		=> 'Pahoittelut, mutta liitetiedostojen maksimiraja on tullut vstaan.',
	'ATTACH_SIG'				=> 'Lisää allekirjoitus (allekirjoituksia voi muokata omissa asetuksissa)',

	'BBCODE_A_HELP'				=> 'Näytä liitetiedosto viestin yhteydessä: [attachment=]tiedostonimi.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Lihavointi: [b]Teksti[/b]',
	'BBCODE_C_HELP'				=> 'Koodi: [code]Koodi[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Fontin koko: [size=85]Pientä tekstiä[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s on <em>Poissa päältä</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s on <em>Käytössä</em>',
	'BBCODE_I_HELP'				=> 'Kursivointi: [i]Teksti[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list][*]Teksti[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listattava kohde: [*]teksti',
	'BBCODE_O_HELP'				=> 'Järjestetty lista: [list=1][*]Ensimmäinen kohde[/list] tai [list=a][*]Kohta a[/list]',
	'BBCODE_P_HELP'				=> 'Lisää kuva: [img]http://kuvan_osoite[/img]',
	'BBCODE_Q_HELP'				=> 'Lainaa tekstiä: [quote]Teksti[/quote]',
	'BBCODE_S_HELP'				=> 'Fontin väri: [color=red]Teksti[/color] tai [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Alleviivaus: [u]Teksti[/u]',
	'BBCODE_W_HELP'				=> 'Lisää URL: [url]http://url[/url] tai [url=http://url]Linkin teksti[/url]',
	'BBCODE_Y_HELP'				=> 'Lista: Lisää luettelon',
	'BUMP_ERROR'				=> 'Et voi tönäistä tätä viestiketjua näin pian edellisen viestin jälkeen.',

	'CANNOT_DELETE_REPLIED'		=> 'Pahoittelut, mutta voit poistaa vain ne viestit, joihin ei ole vastattu.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Viesti on lukittu. Et voi muokata viestiä.',
	'CANNOT_EDIT_TIME'			=> 'Et voi enää muokata tai poistaa tätä viestiä',
	'CANNOT_POST_ANNOUNCE'		=> 'Pahoittelut, mutta et voi lähettää tiedotetta.',
	'CANNOT_POST_STICKY'		=> 'Pahoittelut, mutta et voi lähettää pysyviä viestejä.',
	'CHANGE_TOPIC_TO'			=> 'Vaihda viestiketjun tyyppi',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Viestissäsi on %1$d merkkiä.',
		2	=> 'Viestissäsi on %1$d merkkiä.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Allekirjoituksesi on %1$d merkkiä.',
		2	=> 'Allekirjoituksesi on %1$d merkkiä.',
	),
	'CLOSE_TAGS'				=> 'Sulje tagit',
	'CURRENT_TOPIC'				=> 'Nykyinen viestiketju',

	'DELETE_FILE'				=> 'Poista tiedosto',
	'DELETE_MESSAGE'			=> 'Poista viesti',
	'DELETE_MESSAGE_CONFIRM'	=> 'Haluatko varmasti poistaa tämän viestin?',
	'DELETE_OWN_POSTS'			=> 'Voit poistaa vain omat viestisi.',
	'DELETE_PERMANENTLY'		=> 'Poista pysyvästi',
	'DELETE_POST_CONFIRM'		=> 'Haluatko varmasti poistaa tämän viestin?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Haluatko varmasti <strong>poistaa</strong> tämän viestin?',
	'DELETE_POST_PERMANENTLY'	=> 'Poista tämä viesti pysyvästi',
	'DELETE_POSTS_CONFIRM'		=> 'Haluatko varmasti poistaa nämä viestit?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Haluatko varmasti <strong>poistaa</strong> nämä viestit?',
	'DELETE_REASON'				=> 'Syy viesti poistamiseen',
	'DELETE_REASON_EXPLAIN'		=> 'Syy viestin poistoon näkyy palstan ylläpidolle.',
	'DELETE_POST_WARN'			=> 'Poista tämä viesti',
	'DELETE_TOPIC_CONFIRM'		=> 'Haluatko varmasti poistaa tämän aiheen?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Poista tämä aiheen pysyvästi',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Haluatko varmasti <strong>poistaa</strong> tämän aiheen?',
	'DELETE_TOPICS_CONFIRM'		=> 'Haluatko varmasti poistaa nämä aiheet?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Haluatko varmasti <strong>poistaa</strong> nämä aiheet?',
	'DISABLE_BBCODE'			=> 'Älä salli BBCode:a',
	'DISABLE_MAGIC_URL'			=> 'Älä käsittele linkkejä automaattisesti',
	'DISABLE_SMILIES'			=> 'Älä salli hymiöitä',
	'DISALLOWED_CONTENT'		=> 'Siirto hylättiin, koska se tunnistettiin mahdolliseksi hyökkäykseksi.',
	'DISALLOWED_EXTENSION'		=> 'Tiedoston tunniste %s ei ole sallittu',
	'DRAFT_LOADED'				=> 'Luonnos ladattu kirjoitus-kenttään. Voit viimeistellä viestisi.<br />Luonnoksesi poistetaan, kun viesti on lähetetty.',
	'DRAFT_LOADED_PM'			=> 'Luonnos on ladattu viestikenttään. Haluat ehkä viimeistellä yksityisviestisi.<br />Luonnoksesi poistetaan, kun olet lähettänyt viestin.',
	'DRAFT_SAVED'				=> 'Luonnos on tallennettu.',
	'DRAFT_TITLE'				=> 'Luonnoksen otsikko',

	'EDIT_REASON'				=> 'Viestin muokkauksen syy',
	'EMPTY_FILEUPLOAD'			=> 'Siirretty tiedosto on tyhjä',
	'EMPTY_MESSAGE'				=> 'Kirjoita viesti.',
	'EMPTY_REMOTE_DATA'			=> 'Tiedostoa ei voi siirtää, yritä siirtää tiedosto käsin.',

	'FLASH_IS_OFF'				=> '[flash] on <em>poissa käytöstä</em>',
	'FLASH_IS_ON'				=> '[flash] on <em>käytössä</em>',
	'FLOOD_ERROR'				=> 'Et voi tehdä uutta viestiä näin pian edellisen jälkeen.',
	'FONT_COLOR'				=> 'Fontin väri',
	'FONT_COLOR_HIDE'			=> 'Piilota fontin värit',
	'FONT_HUGE'					=> 'Erittäin iso',
	'FONT_LARGE'				=> 'Suuri',
	'FONT_NORMAL'				=> 'Normaali',
	'FONT_SIZE'					=> 'Fontin koko',
	'FONT_SMALL'				=> 'Pieni',
	'FONT_TINY'					=> 'Erittäin pieni',

	'GENERAL_UPLOAD_ERROR'		=> 'En voinut siirtää liitetiedostoja %s',

	'IMAGES_ARE_OFF'			=> '[img] on <em>poissa käytöstä</em>',
	'IMAGES_ARE_ON'				=> '[img] on <em>käytössä</em>',
	'INVALID_FILENAME'			=> '%s on epäkelpo tiedostonimi',

	'LOAD'						=> 'Lataa',
	'LOAD_DRAFT'				=> 'Lataa luonnos',
	'LOAD_DRAFT_EXPLAIN'		=> 'Täällä voit valita luonnoksen, jonka kirjoittamista haluat jatkaa. Tämänhetkinen viestin lähetys keskeytetään ja niiden sisältö poistetaan. Voit katsoa, muokata ja poistaa omia luonnoksiasi vierailemalla omissa asetuksissasi.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Sinun täytyy kirjautua sisään ennnekuin voit tönäistä viestiketjuja tällä alueella.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Sinun täytyy kirjautua sisään ennen kuin voit poistaa viestejä tällä alueella.',
	'LOGIN_EXPLAIN_POST'		=> 'Sinun pitää kirjautua sisään kirjoittaaksesi viestejä tällä alueella',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Sinun täytyy kirjautua sisään ennen kuin voit lainata kirjoituksia tällä alueella.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Sinun pitää kirjautua sisään vastataksesi viesteihin tällä alueella',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Fontin enimmäiskoko on %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash tiedosto voi olla max. %d pikselin korkuisia.',
		2	=> 'Flash tiedostot voivat olla max. %d pikseliä korkeita.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash tiedosto voi olla max. %d pikselin levyinen.',
		2	=> 'Flash tiedostot voivat olla max. %d pikseliä leveitä.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Kuva tiedosto voi olla max. %1$d pikselin korkuinen.',
		2	=> 'Kuva tiedostot voivat olla max. $1%d pikseliä korkeita.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Kuva tiedosto voi olla max. %d pikselin levyinen.',
		2	=> 'Kuva tiedostot voivat olla max. %d pikseliä leveitä.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // nolla tarkoittaa ei rajoitusta, ei viestiä.
		1	=> 'Kirjoita viesti, siinä voi olla enintään <strong>%d</strong> merkkiä.',
		2	=> 'Kirjoita viesti, siinä voi olla enintään <strong>%d</strong> merkkiä.',
	),
	'MESSAGE_DELETED'			=> 'Viestisi on poistettu',
	'MORE_SMILIES'				=> 'Katso lisää hymiöitä',

	'NOTIFY_REPLY'				=> 'Ilmoita vastauksesta sähköpostiini',
	'NOT_UPLOADED'				=> 'Tiedoston siirto epäonnistui.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Et voi poistaa voimassaolevia äänestysvaihtoehtoja',
	'NO_PM_ICON'				=> 'Ei YV-ikonia',
	'NO_POLL_TITLE'				=> 'Anna äänestykselle otsikko',
	'NO_POST'					=> 'Pyytämääsi viestiä ei ole.',
	'NO_POST_MODE'				=> 'Viestin muotoa ei ole määritelty',

	'PARTIAL_UPLOAD'			=> 'Tiedosto siirrettiin vain osittain',
	'PHP_SIZE_NA'				=> 'Liian suuri liitetiedosto.<br />En saanut PHP:n määrittelemää maksimikokoa php.ini-tiedostosta.',
	'PHP_SIZE_OVERRUN'			=> 'Liian suuri liitetiedosto. Suurin sallittu siirrettävän tiedoston koko on %1$d %2$s.<br />Huomaa, että tämä asetetetaan php.ini-tiedostossa ja sitä ei voi ohittaa.',
	'PLACE_INLINE'				=> 'Näytä viestin yhteydessä',
	'POLL_DELETE'				=> 'Poista äänestys',
	'POLL_FOR'					=> 'Äänestys on voimassa',
	'POLL_FOR_EXPLAIN'			=> 'Syötä 0 jos haluat loputtomasti jatkuvan äänestyksen',
	'POLL_MAX_OPTIONS'			=> 'Kuinka monta vaihtoehtoa käyttäjä voi valita',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Äänestäjä voi valita tämän verran vaihtoehtoja.',
	'POLL_OPTIONS'				=> 'Äänestyksen vaihtoehdot',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Laita jokainen vaihtoehto omalle riville. Voit antaa <strong>%d</strong> vaihtoehdon.',
		2	=> 'Laita jokainen vaihtoehto omalle riville. Voit antaa enintään <strong>%d</strong> vaihtoehtoa.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Laita jokainen vaihtoehto omalle riville. Voit antaa <strong>%d</strong> vaihtoehdon. Jos muutat vastausta, aikaisemmat äänet nollautuvat.',
		2	=> 'Laita jokainen vaihtoehto omalle riville. Voit antaa enintään <strong>%d</strong> vaihtoehtoa. Jos muutat vastausta, aikaisemmat äänet nollautuvat.',
	),
	'POLL_QUESTION'				=> 'Äänestyksen kysymys',
	'POLL_TITLE_TOO_LONG'		=> 'Äänestyksen otsikossa tulee olla alle 100 merkkiä',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Äänestyksen käsitelty koko on liian suuri. Harkitse BBCoden ja hymiöiden poistamista.',
	'POLL_VOTE_CHANGE'			=> 'Salli uudelleen äänestäminen',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Mikäli sallittu. käyttäjä voi vaihtaa ääntään.',
	'POSTED_ATTACHMENTS'		=> 'Lähetetyt liitetiedostot',
	'POST_APPROVAL_NOTIFY'		=> 'Saat ilmoituksen, kun viestisi on hyväksytty.',
	'POST_CONFIRMATION'			=> 'Viestin varmistus',
	'POST_CONFIRM_EXPLAIN'		=> 'Automatisoidun roskapostituksen estämiseksi joudut lisäämään allaolevassa kuvassa näkyvän vahvistuskoodin. Mikäli sinulla on ongelmia näkemisen kanssa, tai et muuten pysty lukemaan sitä, ota yhteyttä sivuston %sylläpitäjään%s.',
	'POST_DELETED'				=> 'Viesti on poistettu onnistuneesti',
	'POST_EDITED'				=> 'Viestiä on muokattu onnistuneesti',
	'POST_EDITED_MOD'			=> 'Viestiä on muokattu onnistuneesti ja se odottaa valvojan hyväksyntää ennen kuin se on julkisesti nähtävillä.',
	'POST_GLOBAL'				=> 'Yleistiedote',
	'POST_ICON'					=> 'Viestin kuvake',
	'POST_NORMAL'				=> 'Normaali',
	'POST_REVIEW'				=> 'Viestin yhteenveto',
	'POST_REVIEW_EDIT'			=> 'Viestin esikatselu',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Tätä viestiä on muokattu samaan aikaan, kun olit muokkaamassa. Voit haluta tarkistaa muutokset.',
	'POST_REVIEW_EXPLAIN'		=> 'Tähän viestiketjuun on tullut ainakin yksi vastaus. Saatat haluta tarkistaa viestiäsi tämän varjolla.',
	'POST_STORED'				=> 'Viestisi on lähetetty',
	'POST_STORED_MOD'			=> 'Viestisi on tallennettu, mutta se vaatii vielä valvojan hyväksynnän',
	'POST_TOPIC_AS'				=> 'Viestin tyyppi',
	'PROGRESS_BAR'				=> 'Edistyminen',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Voit käyttää enintään %d sisäkkäisen lainauksen.',
		2	=> 'Voit käyttää enintään %d sisäkkäistä lainausta.',
	),
	'QUOTE_NO_NESTING'			=> 'Et voi tehdä sisäkkäisiä lainauksia.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Tiedoston latauksen aikakatkaisu.',
	'SAVE'						=> 'Tallenna',
	'SAVE_DATE'					=> 'tallennuspäivä',
	'SAVE_DRAFT'				=> 'Tallenna luonnos',
	'SAVE_DRAFT_CONFIRM'		=> 'Huomaa, että luonnokset sisältävät vain viestin otsikon ja sisällön. Kaikki muut ominaisuudet poistetaan. Haluatko tallentaa luonnoksen nyt?',
	'SMILIES'					=> 'Hymiöt',
	'SMILIES_ARE_OFF'			=> 'Hymiöt ovat <em>poissa käytöstä</em>',
	'SMILIES_ARE_ON'			=> 'Hymiöt ovat <em>käytössä</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tiedotteen voimassaoloaika',
	'STICK_TOPIC_FOR'			=> 'Tiedote on voimassa',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Aseta 0 tai jätä tyhjäksi pitääksesi tiedotteen pysyvästi voimassa. Huomaa, että tämä numero on suhteessa viestin päiväykseen.',
	'STYLES_TIP'				=> 'Vinkki: Muotoilun voi asettaa nopeasti valitsemalla halutun pätkän tekstistä',

	'TOO_FEW_CHARS'				=> 'Viestissäsi on liian vähän merkkejä.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Viestissä pitää olla vähintään %1$d merkki.',
		2	=> 'Viestissä pitää olla vähintään %1$d merkkiä.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'äänestykselle täytyy antaa ainakin kaksi vaihtoehtoa',
	'TOO_MANY_ATTACHMENTS'		=> 'En voi lisätä liitetiedostoa. Liitetiedostojen maksimimäärä on %d ',
	'TOO_MANY_CHARS'			=> 'Viestissäsi on liian monta merkkiä.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Viestissä saa olla max. %1$d merkkiä.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Yritit lisätä liian monta äänestysvaihtoehtoa',
	'TOO_MANY_SMILIES'			=> 'Viestissäsi on liian monta hymiötä. Hymiöiden maksimilukumäärä on %d kappaletta.',
	'TOO_MANY_URLS'				=> 'Viestissä on liian monta linkkiä. Linkkien maksimilukumäärä on %d kappaletta.',
	'TOO_MANY_USER_OPTIONS'		=> 'Et voi antaa käyttäjälle enemmän vaihtoehtoja, mitä äänestyksessä on valittavissa',
	'TOPIC_BUMPED'				=> 'Viestiketju on tönäisty päälimmäiseksi',

	'UNAUTHORISED_BBCODE'		=> 'Et voi käyttää kaikkia BBCode-tageja: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Olet muuttamassa yleistiedotetta normaaliksi viestiksi. Ole hyvä ja määrittele alue, jolle tämä viesti laitetaan.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Viestissäsi on kiellettyjä merkkejä:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Viestissäsi on kiellettyjä merkkejä:<br />%s',
	'UPDATE_COMMENT'			=> 'Päivitä kommentti',
	'URL_INVALID'				=> 'Antamasi linkki ei ole toimiva.',
	'URL_NOT_FOUND'				=> 'Hakemaasi tiedostoa ei löydy.',
	'URL_IS_OFF'				=> '[url] on <em>poissa päältä</em>',
	'URL_IS_ON'					=> '[url] on <em>käytössä</em>',
	'USER_CANNOT_BUMP'			=> 'Et voi tönäistä viestiä tällä alueella',
	'USER_CANNOT_DELETE'		=> 'Et voi poistaa viestejä tällä alueella',
	'USER_CANNOT_EDIT'			=> 'Et voi muokata viestejä tällä alueella',
	'USER_CANNOT_REPLY'			=> 'Et voi vastata viesteihin tällä alueella',
	'USER_CANNOT_FORUM_POST'	=> 'Et voi suorittaa viesteihin liittyviä toimintoja tällä alueella, koska alueen tyyppi ei tue sitä.',

	'VIEW_MESSAGE'				=> '%sNäytä lähettämäsi viesti%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sNäytä lähettämäsi yksityisviesti%s',

	'WRONG_FILESIZE'			=> 'Liian suuri tiedosto. Enimmäiskoko on %1$d %2$s',
	'WRONG_SIZE'				=> 'Kuvan täytyy olla vähintään %1$s leveä, %2$s korkea ja enintään %3$s %4$s korkea. Lähettämäsi kuva on %5$s leveä ja %6$s korkea.',
));
