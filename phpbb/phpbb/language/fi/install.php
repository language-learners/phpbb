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
	'ADMIN_CONFIG'				=> 'Ylläpitäjän asetukset',
	'ADMIN_PASSWORD'			=> 'Ylläpitäjän salasana',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Varmista ylläpitäjän salasana',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Kirjoita haluamasi salasana, joka on 6-30 merkin pituinen)',
	'ADMIN_TEST'				=> 'Tarkista ylläpitäjän asetukset',
	'ADMIN_USERNAME'			=> 'Ylläpitäjän käyttäjätunnukset',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Kirjoita haluamasi käyttäjätunnus, joka on 3-20 merkin pituinen)',
	'APP_MAGICK'				=> 'ImageMagick-tuki [ Liitetiedostot ]',
	'AUTHOR_NOTES'				=> 'Kirjoittajan muistiinpanot<br />» %s',
	'AVAILABLE'					=> 'Käytettävissä',
	'AVAILABLE_CONVERTORS'		=> 'Käytettävissä olevat muuntajat',

	'BEGIN_CONVERT'					=> 'Aloita muunnos',
	'BLANK_PREFIX_FOUND'			=> 'Tietokannan tarkastelu on löytänyt kunnollisen asennuksen, jonka tauluissa ei ole etuliitettä.',
	'BOARD_NOT_INSTALLED'			=> 'Asennusta ei ole suoritettu',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB3:n tulee olla esiasennettuna ennen muunnosta. Huomaa, että muunnosta varten uuden foorumin ja vanhan foorumin tulee sijaita samassa tietokannassa. Voit <a href="%s">suorittaa asennuksen</a> nyt.',
	'BACKUP_NOTICE'					=> 'Ole hyvä ja ota varmuuskopiot keskustelufoorumisi tiedostoista ja tietokannasta ennen päivitystä, jotta voit korjata päivityksestä mahdollisesti aiheutuneet vahingot.',

	'CATEGORY'					=> 'Kategoria',
	'CACHE_STORE'				=> 'Välimuistin tyyppi',
	'CACHE_STORE_EXPLAIN'		=> 'Välimuistin fyysinen paikka, mieluiten tiedostojärjestelmässä.',
	'CAT_CONVERT'				=> 'Muunna',
	'CAT_INSTALL'				=> 'Asenna',
	'CAT_OVERVIEW'				=> 'Yleiset',
	'CAT_UPDATE'				=> 'Päivitä',
	'CHANGE'					=> 'Muuta',
	'CHECK_TABLE_PREFIX'		=> 'Tarkista taulujen etuliite ja yritä uudelleen.',
	'CLEAN_VERIFY'				=> 'Siivotaan ja tarkistetaan lopullinen rakenne',
	'CLEANING_USERNAMES'		=> 'Käyttäjätunnusten siivoaminen',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> On puhdas käyttäjätunnus:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Vanhalta keskustelufoorumiltasi löytyi ristiriitaisia nimimerkkejä. Jotta voisit suorittaa muunnoksen loppuun, ole hyvä ja poista tai muuta näiden käyttäjien tunnusta siten, että foorumiltasi löytyy vain yhdet puhtaat käyttäjätunnukset.',
	'COLLIDING_USER'			=> '» Käyttäjän tunniste: <strong>%d</strong> käyttäjätunnus: <strong>%s</strong> (%d viestiä)',
	'CONFIG_CONVERT'			=> 'Asetusten muunnos',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Asetustiedoston kirjoittaminen ei ollut mahdollista. Alla on muita vaihtoehtoja tiedoston luomiseksi',
	'CONFIG_FILE_WRITTEN'		=> 'Asetustiedosto on luotu ja voit siirtyä asennuksessa toiseen vaiheeseen',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3:n konfigurointimuuttuja arvolle “%s” on tyhjä.',
	'CONFIG_RETRY'				=> 'Yritä uudelleen',
	'CONTINUE_CONVERT'			=> 'Jatka muunnosta',
	'CONTINUE_CONVERT_BODY'		=> 'Asennus on havainnut keskeytyneen muunnosyrityksen. Voit valita haluatko jatkaa edellistä muunnosta tai aloittaa alusta.',
	'CONTINUE_LAST'				=> 'Jatka viimeisistä lausekkeista',
	'CONTINUE_OLD_CONVERSION'	=> 'Jatka keskeytynyttä muunnosta',
	'CONVERT'					=> 'Muunna',
	'CONVERT_COMPLETE'			=> 'Muunnos on valmis',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Keskustelufoorumin muuntaminen phpBB3-alustalle on suoritettu onnistuneesti loppuun. Voit kirjautua sisään ja <a href="../">Hallita keskustelufoorumiasi</a>. Ole hyvä ja varmista, että kaikki asetukset ovat siirretty oikein ennen kuin otat foorumin käyttöön poistamalla install-hakemiston. Muista, että saat käyttötukea verkosta lukemalla <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">käyttö-opasta</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=466">tukifoorumilta</a>',
	'CONVERT_INTRO'				=> 'Tervetuloa phpBB Unified Convertor Frameworkiin',
	'CONVERT_INTRO_BODY'		=> 'Täällä voit tuoda tiedot muista (asennetuista) keskustelufoorumeista. Alla olevassa listassa on kaikki tämänhetkiset muunnosmoduulit. Mikäli haluamaasi muuntajaa ei löydy listasta, tarkista nettisivuiltamme olisiko siellä muita muuntajia ladattavissa.',
	'CONVERT_NEW_CONVERSION'	=> 'Uusi muunnos',
	'CONVERT_NOT_EXIST'			=> 'Valitsemaasi muuntajaa ei ole',
	'CONVERT_OPTIONS'			=> 'Vaihtoehdot',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Antamasi tiedot täytyy varmistaa. Paina alapuolella olevaa nappulaa aloittaaksesi muuntamisen.',
	'CONV_ERR_FATAL'					=> 'Vakava muunnosvirhe',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-siirtotapa liitetiedostoille on käytössä vanhalla keskustelufoorumillasi. Ole hyvä ja kopioi kaikki liitetiedostot pääsyn sallivaan hakemistoon. Poista FTP-siirto käytöstä ja varmista, että annoit oikean hakemiston. Kun olet tehnyt tämän, aloita muuntaminen uudelleen.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Konfiguroinnin informaatiota ei ole saatavilla muunnosta varten.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'En saanut foorumiin pääsyn informaatiota.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'En saanut kategorioita.',
	'CONV_ERROR_GET_CONFIG'				=> 'En voinut hakea keskustelufoorumisi konfiguraatiota.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'En voinut ottaa yhteyttä/lukea “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'En saanut ryhmän tunnistamisen tietoja.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Ristiriitaisuus havaittu groups-taulussa add_bots()-funktiossa - Sinun täytyy lisätä kaikki erikoisryhmät, jos teet sen manuaalisesti.',
	'CONV_ERROR_INSERT_BOT'				=> 'Botin lisääminen users-tauluun epäonnistui.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Botin lisääminen bots-tauluun epäonnistui.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Käyttäjän lisääminen user_group-tauluun epäonnistui.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Viestin jäsentäjän virhe',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'avatar_path\'] käyttämään %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Suhteellista polkua lähdefoorumiin ei ole määritelty.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'avatar_gallery_path\'] käyttämään %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Ryhmää "%1$s" ei löytynyt %2$s:sta.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'ranks_path\'] käyttämään %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'smilies_path\'] käyttämään %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Muistutus kehittäjälle: Sinun täytyy määritellä $convertor[\'upload_dir\'] käyttämään %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Oikeuksien asetusten lisääminen/päivittäminen epäonnistui.',
	'CONV_ERROR_PM_COUNT'				=> 'Kansioissa olevien yksityisviestien laskeminen epäonnistui.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Vanhan kategorian korvaaminen uudella alueella epäonnistui.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Vanhan alueen korvaaminen uudella alueella epäonnistui.',
	'CONV_ERROR_USER_ACCESS'			=> 'Käyttäjän tunnistautumisen hankkiminen epäonnistui.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Väärä ryhmä "%1$s" määriteltynä %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Tällä sivulla kerätään tarvittavat tiedot, joiden avulla otetaan yhteys lähteenä käytettävään foorumiin. Muuntaja ei muuta mitään tietoja tässä antamassasi tietokannassa. Lähdefoorumi tulisi sulkea muunnoksen ajaksi, jotta saat yhdenmukaisen muunnoksen.',
	'CONV_SAVED_MESSAGES'				=> 'Tallennetut viestit',

	'COULD_NOT_COPY'			=> 'En voinut kopioida tiedostoa <strong>%1$s</strong> hakemistoon <strong>%2$s</strong><br /><br />Varmista, että kohdehakemisto on olemassa ja että siihen voidaan kirjoittaa.',
	'COULD_NOT_FIND_PATH'		=> 'En löytänyt edellisen keskustelufoorumisi polkua. Tarkista asetuksesi ja yritä uudelleen.<br />» Määrittelemäsi polku oli %s',

	'DBMS'						=> 'Tietokannan tyyppi',
	'DB_CONFIG'					=> 'Tietokannan asetukset',
	'DB_CONNECTION'				=> 'Tietokannan yhteys',
	'DB_ERR_INSERT'				=> 'Virhe suorittaessa <code>INSERT</code>-kyselyä.',
	'DB_ERR_LAST'				=> 'Virhe suorittaessa <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Virhe suorittaessa <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Virhe suorittaessa <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Virhe suorittaessa <code>SELECT</code>-kyselyä.',
	'DB_HOST'					=> 'Tietokantapalvelimen osoite tai DSN',
    'DB_HOST_EXPLAIN'           => 'DSN on lyhenne Data Source Namesta ja sitä tarvitaan vain ODBC-asennuksissa. PostgreSQL-tietokannalle voi käyttää osoitteena localhost ottaaksesi yhteyden paikallisella palvelimella olevaan tietokantaan UNIX domain socketin kautta ja 127.0.0.1 käyttääksesi TCP-protokollaa. Anna koko polku käyttäessäsi SQLiteä',
	'DB_NAME'					=> 'Tietokannan nimi',
	'DB_PASSWORD'				=> 'Tietokannan salasana',
	'DB_PORT'					=> 'Tietokantapalvelimen portti',
	'DB_PORT_EXPLAIN'			=> 'Jätä tämä tyhjäksi, jos olet varma, että tietokantapalvelin toimii normaalissa portissa.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Pahoittelemme, mutta tämä ohjelma ei osaa päivittää versioita jotka ovat “%1$s” aikaisemmat. Käyttämäsi versio on “%2$s”. Ole hyvä ja päivitä ensiksi uudempaan versioon ja vasta sitten tähän versioon. Saat apua phpbb.com-tukifoorumilta.',
	'DB_USERNAME'				=> 'Tietokannan käyttäjätunnus',
	'DB_TEST'					=> 'Testaa yhteys',
	'DEFAULT_LANG'				=> 'Keskustelufoorumin oletuskieli',
	'DEFAULT_PREFIX_IS'			=> 'Oletus etuliite %1$s on <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Muuntajassa ei ole määritelty arvoa test_file-muuttujalle. Mikäli olet tämän muuntajan käyttäjä, sinun ei pitäisi nähdä tätä ilmoitusta. Ole hyvä ja raportoi tämä virhe muuntajan kehittäjälle. Mikäli olet kehittänyt tämän muuntajan, sinun tulee antaa lähdefoorumin tiedoston nimi, jotta voimme tarkistaa hakemiston polun.',
	'DIRECTORIES_AND_FILES'		=> 'Hakemiston ja tiedostojen asetukset',
	'DISABLE_KEYS'				=> 'Avaimien poisto käytöstä',
	'DLL_FTP'					=> 'Etäisen FTP:n tuki [ Asennus ]',
	'DLL_GD'					=> 'GD-grafiikan tuki [ Visuaalinen varmennus ]',
	'DLL_MBSTRING'				=> 'Multi-byte character tuki',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+, ODBC:n kautta',
    'DLL_MSSQLNATIVE'           => 'MSSQL Server 2005+ [ Natiivi ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL, MySQLi-laajennuksen tuella',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML-tuki [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib-pakkauksen tuki [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Lataa asetukset omalle koneellesi',
	'DL_CONFIG_EXPLAIN'			=> 'Voita ladata config.php-tiedoston omalle tietokoneellesi ja sen jälkeen siirtää tiedoston takaisin palvelimelle samalla ylikirjoittaen vanhan tiedoston phpBB 3.1 -juurihakemistossa. Muista siirtää tiedosto ASCII-muodossa (Katso lisätietoja käyttämäsi FTP-ohjelman ohjeista, mikäli et ole varma tästä). Kun olet siirtänyt tiedoston, napsauta "Valmis" jatkaaksesi seuraavaan vaiheeseen.',
	'DL_DOWNLOAD'				=> 'Lataa koneellesi',
	'DONE'						=> 'Valmis',

	'ENABLE_KEYS'				=> 'Avaimien palautus. Tämä voi kestää jonkun aikaa',

	'FILES_OPTIONAL'			=> 'Vaihtoehtoiset tiedostot ja hakemistot',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Vaihtoehtoiset</strong> - Näitä tiedostoja, hakemistoja tai oikeuksia ei tarvita. Asennusohjelma yrittää eri tavoilla saada toiminnot suoritetuksi, mikäli niitä ei ole olemassa tai niihin ei voi kirjoittaa. Kuitenkin, näiden tiedostojen, hakemistojen tai oikeuksien olemassaolo nopeuttaa asennusta.',
	'FILES_REQUIRED'			=> 'Tiedostot ja hakemistot',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Pakollinen</strong> - Toimiakseen oikein, phpBB:n täytyy voida kirjoittaa tiettyihin hakemistoihin tai tiedostoihin. Mikäli näet "Ei löytynyt" -ilmoituksen, sinun tulee luoda tämä tiedosto tai hakemisto. Jos näet "Ei voi kirjoittaa" -ilmoituksen, sinun tulee muuttaa tämän tiedoston tai hakemiston oikeuksia salliaksesi kirjoittamisen.',
	'FILLING_TABLE'				=> 'Täytän taulua <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Täytän tauluja',

	'FINAL_STEP'				=> 'Asennuksen viimeinen vaihe',
	'FORUM_ADDRESS'				=> 'Keskustelufoorumin osoite',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Tämä on vanhan foorumin URL, esimerkiksi <samp>http://www.example.com/phpBB2/</samp>. Mikäli tähän laitetaan osoite eikä tätä kenttää jätetä tyhjäksi, kaikki tämän osoitteen esiintymät foorumin viesteissä, yksityisviesteissä ja allekirjoituksissa korvataan uuden foorumisi osoitteella.',
	'FORUM_PATH'				=> 'Foorumin polku',
	'FORUM_PATH_EXPLAIN'		=> 'Tämä on <strong>suhteellinen polku</strong> entiselle foorumille <strong>tämän phpBB3-asennuksen pääjuuresta</strong>',
	'FOUND'						=> 'Löytyi',
	'FTP_CONFIG'				=> 'Siirrä asetustiedosto käyttäen FTP-yhteyttä',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB on löytänyt FTP-moduulin tältä palvelimelta. Voit yrittää siirtää config.php-tiedoston tämän avulla. Sinun tarvitsee antaa alla olevat tiedot. Huomaa, että käyttäjätunnus ja salasana ovat palvelimen tunnuksia! (Ota yhteyttä palveluntarjoajaasi, mikäli et tiedä mitä nämä ovat)',
	'FTP_PATH'					=> 'FTP-polku',
	'FTP_PATH_EXPLAIN'			=> 'Tämä on polku pääjuuresta phpBB3:en, esim. <samp>htdocs/phpBB3/</samp>',
	'FTP_UPLOAD'				=> 'Siirrä palvelimelle',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Perusasetukset',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Asennusohjelma on todennut, että palvelimella voi ajaa phpBB:tä ja seuraavaksi sinun tulee antaa joitakin perusasetuksia. Mikäli et tiedä kuinka otetaan yhteys tietokantaan, ole hyvä ja kysy nämä tiedot palveluntarjoajaltasi (ensimmäinen vaihtoehto) tai käytä phpBB-tukifoorumia. Kun kirjoitat tietoja, varmista, että ne ovat varmasti oikein.',
	'INSTALL_CONGRATS'			=> 'Onnea!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		phpBB %1$s -asennus on onnistunut. Jatka eteenpäin valitsemalla jokin seuraavista vaihtoehdoista:</p>
		<h2>Muunna vanha foorumi käyttämään phpBB3 alustaa</h2>
		<p>phpBB Unified Convertor Framework tukee muunnosta phpBB 2.0.x -alustalta ja muilta ohjelmistoilta phpBB3-alustalle. Mikäli sinulla on keskustelufoorumi, jonka haluat muuntaa, voit <a href="%2$s">jatkaa muuntajaan</a>.</p>
		<h2>Julkaise phpBB3-foorumisi!</h2>
		<p>Linkki vie ylläpitoon, josta voit lähettää hieman tilastotietoja kehittäjille hallintapaneelistasi. Olisimme iloisia, jos lähetät nämä tiedot. Tämän jälkeen voisit viettää hetken aikaa tutkiaksesi ylläpitoa ja sen eri vaihtoehtoja. Muistathan, että tukea on saatavilla <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentaatiosta</a>, <a href="%3$s">README-tiedostosta</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=466">tukifoorumilta</a>.</p><p><strong>Ole hyvä ja poista install-hakemisto. Mikäli tämä hakemisto on palvelimella, vain ylläpidon asetukset ovat käytettävissä.</strong>',
	'INSTALL_INTRO'				=> 'Tervetuloa asennukseen',

	'INSTALL_INTRO_BODY'		=> 'Voit asentaa phpBB3:n palvelimellesi valitsemalla tämän vaihtoehdon.</p><p>Jotta voit jatkaa asentamista, tarvitset käytössäsi olevan tietokannan asetukset. Mikäli et tiedä tietokantasi asetuksia, ole hyvä ja ota yhteyttä palveluntarjoajaasi ja kysy tiedot heiltä. Et voi jatkaa asennusta eteenpäin, mikäli tiedot puuttuvat. Tarvitset:</p>

	<ul>
		<li>Tietokannan tyyppi - käytössäsi oleva tietokanta.</li>
		<li>Tietokantapalvelimen isäntänimi tai DSN - tietokantapalvelimen osoite.</li>
		<li>Tietokantapalvelimen portti - palvelimen portti tietokannalle (useimmissa tapauksissa tätä ei tarvita).</li>
		<li>Tietokannan nimi - palvelimella olevan tietokannan nimi.</li>
		<li>Tietokannan käyttäjätunnus ja salasana - kirjautumistiedot, joita tarvitset ottaessasi yhteyttä tietokantaan.</li>
	</ul>

	<p><strong>Huomaa:</strong> Mikäli asennat käyttäen SQLiteä, sinun tulisi antaa koko polku tietokannan tiedostoon DSN-kentässä ja jättää käyttäjätunnus- ja salasana-kentät tyhjiksi. Tietoturvan vuoksi tietokanta tulisi olla tallennettuna paikkaan, jossa siihen ei pääse käsiksi verkon kautta.</p>

	<p>phpBB3 tukee seuraavia tietokantoja:</p>
	<ul>
		<li>MySQL 3.23 tai uudempi (MySQLi tuettu)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 or above (suoraan tai ODBC:n kautta)</li>
		<li>MS SQL Server 2005 or above (natiivi)</li>
		<li>Oracle</li>
	</ul>

	<p>Asennusohjelma näyttää palvelimella olevat tietokannat.',
	'INSTALL_INTRO_NEXT'		=> 'Paina alapuolella olevaa nappulaa aloittaaksesi asennuksen.',
	'INSTALL_LOGIN'				=> 'kirjaudu sisään',
	'INSTALL_NEXT'				=> 'Seuraava vaihe',
	'INSTALL_NEXT_FAIL'			=> 'Osa testistä epäonnistui ja sinun tulisi korjata nämä ennen kuin jatkat eteenpäin. Mikäli et korjaa näitä, tuloksena voi olla epäonnistunut asennus.',
	'INSTALL_NEXT_PASS'			=> 'Kaikki perustestit ovat läpäisty ja voit siirtyä asennuksen seuraavaan vaiheeseen. Mikäli olet muuttanut oikeuksia, moduuleita, jne, ja haluat suorittaa testit uudelleen, voit tehdä näin.',
	'INSTALL_PANEL'				=> 'Asennuspaneeli',
	'INSTALL_SEND_CONFIG'		=> 'phpBB ei valitettavasti pystynyt kirjoittamaan asennustietoja suoraan config.php-tiedostoon. Tämä voi johtua, koska tiedostoa ei ole olemassa tai siihen ei voida kirjoittaa. Saat listan vaihtoehdoista, jotka voit suorittaa asentaaksesi config.php-tiedoston oikein.',
	'INSTALL_START'				=> 'Aloita asennus',
	'INSTALL_TEST'				=> 'Testaa uudelleen',
	'INST_ERR'					=> 'Asennuksen virhe',
	'INST_ERR_DB_CONNECT'		=> 'En saanut yhteyttä tietokantaan. Katso virheilmoitus alapuolelta',
	'INST_ERR_DB_FORUM_PATH'	=> 'Tietokantatiedosto on asetettu foorumin hakemistopuuhun. Tämä tiedosto kannattaisi laittaa jonnekin, mihin ei päästä internetin kautta käsiksi.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Antamasi etuliite on epäkelpo. Etuliite tulee alkaa kirjaimella ja sisältää lisäksi korkeintaan numeroita ja alaviivoja.',
	'INST_ERR_DB_NO_ERROR'		=> 'Ei virheilmoitusta',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Tällä koneella käytössä oleva MySQL-versio ei ole yhteensopiva valitsemasi "MySQL, MySQLi-laajennuksen tuella" -vaihtoehdon kanssa. Ole hyvä ja yritä "MySQL"-vaihtoehtoa.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Tällä koneella käytössä oleva SQLite-laajennusosa on liian vanha. Se tulee päivittää vähintään versioon 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Tällä koneella käytössä oleva SQLite-laajennusosa on liian vanha. Se tulee päivittää vähintään versioon 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Tällä koneella käytössä oleva Oracle vaatii asettamaan <var>NLS_CHARACTERSET</var>-parametriksi <var>UTF8</var>. Päivitä asennuksesi joko versioon 9.2+ tai vaihda parametriä.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Valitsemaasi tietokantaa ei luotu <var>UNICODE</var>- tai <var>UTF8</var>-muotoon. Yritä asentaa tietokanta <var>UNICODE</var>- tai <var>UTF8</var>-muodossa',
	'INST_ERR_DB_NO_NAME'		=> 'Tietokannan nimi puuttuu',
	'INST_ERR_EMAIL_INVALID'	=> 'Antamasi sähköpostiosoite on epäkelpo',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Antamasi sähköpostiosoitteet eivät täsmää.',
	'INST_ERR_FATAL'			=> 'Kriittinen asennusvirhe',
	'INST_ERR_FATAL_DB'			=> 'Tietokannassa tapahtui kriittinen ja peruuttamaton virhe. Tämä voi johtua siitä, että määritellyllä käyttäjällä ei ole tarpeeksi oikeuksia, kuten CREATE TABLES- tai INSERT -komentoa, jne. Lisätietoa voi olla alapuolella. Ota ensitilassa yhteyttä palveluntarjoajaasi ja sen jälkeen (jos on tarvetta) käytä phpBB-tukifoorumin palveluita.',
	'INST_ERR_FTP_PATH'			=> 'En voinut siirtyä annettuun polkuun, ole hyvä ja tarkista asetus.',
	'INST_ERR_FTP_LOGIN'		=> 'En voinut kirjautua FTP-palvelimelle, ole hyvä ja tarkista käyttäjätunnus ja salasana',
	'INST_ERR_MISSING_DATA'		=> 'Nämä kaikki tiedot tulee täyttää',
	'INST_ERR_NO_DB'			=> 'En voinut ladata PHP-moduulia valitulle tietokannalle',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Antamasi salasanat eivät täsmää.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Antamasi salasana on liian pitkä. Enimmäispituus on 30 merkkiä.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Antamasi salasana on liian lyhyt. Vähimmäispituus on 6 merkkiä.',
	'INST_ERR_PREFIX'			=> 'Tietokannassa on tauluja, joissa on käytössä jo antamasi taulun etuliite. Ole hyvä ja käytä toista etuliitettä.',
	'INST_ERR_PREFIX_INVALID'	=> 'Antamasi taulun etuliite on epäkelpo käytössä olevalle tietokannallesi. Kokeile toista etuliitettä ja poista erikoismerkit, kuten tavuviivat',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Antamasi taulun etuliite on liian pitkä. Enimmäispituus saa olla %d merkkiä.',
	'INST_ERR_USER_TOO_LONG'	=> 'Antamasi käyttäjätunnus on liian pitkä. Enimmäispituus on 20 merkkiä.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Antamasi käyttäjätunnus on liian lyhyt. Vähimmäispituus on 3 merkkiä.',
	'INVALID_PRIMARY_KEY'		=> 'Epäkelpo primary key : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Odota tämä saattaa kestää jonkun aikaa... Ole hyvä äläkä pysäytä suorittamista kesken.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp>-laajennuksen tarkistus',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Vaadittu</strong> - <samp>mbstring</samp> on PHP:n laajennus joka sallii multibyte-merkkijonofunktiot. Jotkut mbstring-funktioista eivät ole yhteensopivia phpBB:n kanssa, joten ne tulisi poistaa käytöstä.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funktioiden ylikuormitus',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> täytyy asettaa joko 0 tai 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character enkoodaus',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> täytyy asettaa 0',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP-syötemerkkien muunnos',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> täytyy asettaa <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP-tulostemerkkien muunnos',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> täytyy asettaa <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Varmista, että tämä hakemisto on olemassa palvelimella, ja että siihen voidaan kirjoittaa, yritä sen jälkeen uudelleen:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Varmista, että nämä hakemistot ovat olemassa palvelimella, ja että niihin voidaan kirjoittaa, yritä sen jälkeen uudelleen:<br />»<strong>%s</strong>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Käyttämäsi MySQL tietokanta on liian vanha phpBB:lle. phpBB tunnisti version MySQL 3.x/4.x, mutta palvelimessa on MySQL %2$s.<br /><strong>Ennen kuin päivität versiota pitää sinun päivittää tietokantarakenne.</strong><br /><br />Ohjeet MySQL-tietokannan päivittämiseen löytyvät <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">MySQL:n päivittämiseen liittyvästä tietopankkiartikkelista</a>. Jos tarvitset apua, voit käyttää <a href="https://www.phpbb.com/community/viewforum.php?f=466">tukifoorumia</a>.',

	'NAMING_CONFLICT'			=> 'Nimeämisvirhe: %s ja %s ovat kummatkin aliaksia<br /><br />%s',
	'NEXT_STEP'					=> 'Jatka seuraavaan vaiheeseen',
	'NOT_FOUND'					=> 'En löydä',
	'NOT_UNDERSTAND'			=> 'En ymmärtänyt %s #%d, taulua %s (“%s”)',
	'NO_CONVERTORS'				=> 'Ei käytettäviä muuntajia',
	'NO_CONVERT_SPECIFIED'		=> 'Muuntajaa ei ole määritelty',
	'NO_LOCATION'				=> 'En löytänyt. Mikäli tiedät, että ImageMagick on asennettuna, voit määritellä sen asennuspolun myöhemmin ylläpidon asetuksissa.',
	'NO_TABLES_FOUND'			=> 'En löytänyt tauluja.',
	
	'OVERVIEW_BODY'				=> 'Tervetuloa phpBB3-ohjelmaan<br /><br />phpBB™ on maailman käytetyin avoimen lähdekoodin keskustelufoorumiohjelmisto. phpBB3 on uusin versio seitsemän vuoden olemassaolonsa aikana. Kuten edeltäjänsäkin, phpBB3 on täynnä ominaisuuksia ja erittäin käyttäjäystävällinen. Lisäksi se on phpBB Teamin tukema. phpBB3 parantaa niitä ominaisuuksia, jotka tekivät phpBB2:sta suositun ja siihen on lisätty ominaisuuksia, joita ei ollut aiemmissa versioissa. Toivomme, että ylitämme odotuksesi.<br /><br />Tämä asennusohjelma opastaa sinua asentamaan phpBB3:n, päivittämään aiemmasta phpBB3:n versiosta uusimpaan ja myös siirtymään muista keskustelufoorumiohjelmistoista (mukaan lukien phpBB2) phpBB3:n käyttäjäksi. Saadaksesi lisätietoja ole hyvä ja lue <a href="../docs/INSTALL.html">asennusohje</a>.<br /><br />Lukeaksesi ohjelmistolisenssin tai saadaksesi tietoa käyttötuesta ja meidän roolistamme, ole hyvä ja valitse asiaankuuluva vaihtoehto sivupalkista. Jatkaaksesi eteenpäin valitse haluamasi toiminto yläpuolella olevista välilehdistä.',
	
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 -tuki',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>ei toimi</strong> mikäli palvelimella oleva PHP ei ole käännetty PCRE-laajennusosan UTF-8 -tuen kanssa.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-funktio getimagesize() on saatavilla',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vaadittu</strong> - Jotta phpBB voisi toimia oikein, getimagesize-funktion tulee olla saatavilla.',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON tuki',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Tärkeä tieto</strong> - phpBB ei toimi oikein jos php JSON laajennus ei ole käytettävissä.',
	'PHP_OPTIONAL_MODULE'			=> 'Valinnaiset moduulit',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valinnainen</strong> - Nämä moduulit tai sovellukset ovat valinnaisia. Et tarvitse näitä käyttääksesi phpBB 3.0 -ohjelmistoa, mutta mikäli nämä ovat saatavilla, ne antavat enemmän toimintoja keskustelufoorumin käyttämiseen.',
	'PHP_SUPPORTED_DB'				=> 'Tuetut tietokannat',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Pakollinen</strong> - Täytyy olla vähintään yksi PHP:n kanssa yhteensopiva tietokanta. Mikäli tässä ei näy yhtään tietokantamoduulia, sinun täytyy ottaa yhteys palveluntarjoajaasi tai tutkia käyttämäsi PHP-version asennusohjeita saadaksesi neuvoja.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-asetus "register_globals" on poissa käytöstä',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB toimii vaikka tämä asetus on käytössä, mutta mikäli mahdollista, on suositeltavaa, että register_globals on poissa käytöstä tietoturvasyistä johtuen.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'PHP-versio ja asetukset',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Pakollinen</strong> - PHP-version tulee olla vähintään 5.3.3 asentaaksesi phpBB:n. Mikäli <var>safe mode</var> on näkyvissä alapuolella, PHP-asennuksesi on asetettu tähän tilaan. Tämä asettaa rajoituksia etähallintaan ja muihin sen kaltaisiin toimintoihin.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-asetus <var>allow_url_fopen</var> on päällä',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Vaihtoehtoinen</strong> - Tätä asetusta ei ole vaadittu, mutta jotkin phpBB:n toiminnoista, kuten linkitetyt avatar-tiedostot eivät toimi kunnolla ilman tätä. ',
	'PHP_VERSION_REQD'				=> 'PHP-versio >= 5.3.3',
	'POST_ID'						=> 'Viestin tunniste',
	'PREFIX_FOUND'					=> 'Asennus on löytänyt kelvollisen asennuksen tietokannasta, joka käyttää <strong>%s</strong> etuliitettä tauluissa.',
	'PREPROCESS_STEP'				=> 'Suorittaa pre-processing funktioita/kyselyitä',
	'PRE_CONVERT_COMPLETE'			=> 'Kaikki alustavat toiminnot ovat suoritettu. Nyt voit aloittaa varsinaisen muuntamisen.',
	'PROCESS_LAST'					=> 'Suoritan viimeisiä lausekkeita',

	'REFRESH_PAGE'				=> 'Lataa sivu uudelleen jatkaaksesi muuntamista',
	'REFRESH_PAGE_EXPLAIN'		=> 'Mikäli tämä on asetettu käyttöön, muuntaja lataa sivun uudelleen jatkaakseen muunnosta aina yhden vaiheen suorittamisen jälkeen. Mikäli olet muuntamassa ensimmäistä kertaa ja haluat nähdä mahdolliset virheilmoitukset etukäteen, on suositeltavaa, että otat tämän toiminnon pois käytöstä.',
	'REQUIREMENTS_TITLE'		=> 'Asennuksen yhteensopivuus',
	'REQUIREMENTS_EXPLAIN'		=> 'Ennen asennuksen aloittamista phpBB suorittaa tarkistuksia tiedostoihin ja hakemistoihin varmistaen, että voit suorittaa asennuksen oikein. Ole hyvä ja lue tulokset läpi huolella. Älä jatka asennusta ennen kuin kaikki tarvittavat testit ovat läpäisty. Mikäli haluat suorittaa vaihtoehtoisten toimintojen testit, sinun tulisi varmistaa, että myös nämä testit menevät onnistuneesti läpi.',
	'RETRY_WRITE'				=> 'Yritä kirjoittaa asetustiedosto uudelleen',
	'RETRY_WRITE_EXPLAIN'		=> 'Jos haluat, voit muuttaa config.php tiedoston oikeuksia salliaksesi phpBB:n kirjoittamisen siihen. Jos haluat, voit yrittää uudelleen valitsemalla vaihtoehdon alapuolelta. Muista palauttaa config.php tiedoston oikeudet alkuperäisiksi, kun phpBB:n asennus on päättynyt.',

	'SCRIPT_PATH'				=> 'Ohjelmiston polku',
	'SCRIPT_PATH_EXPLAIN'		=> 'Polku phpBB:hen suhteessa toimialueen osoitteeseen, esimerkiksi <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Valitse kieli',
	'SERVER_CONFIG'				=> 'Palvelimen asetukset',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Haun sisällysluetteloa ei ole muunnettu',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Vanhaa sisällysluetteloasi ei ole muunnettu. Mikäli suoritat hakuja nyt, et saa tuloksia. Luodaksesi sisällysluettelon. Mene ylläpidon asetuksiin ja valitse huolto. valitse tämän jälkeen sisällysluettelo listasta.',
	'SELECT_FORUM_GA'			=> 'Julkiset ilmoitukset on phpBB 3.1:ssä linkitetty johonkin forumiin. Valitse forum julkisille ilmoituksille (voi muuttaa myöhemmin):',
	'SOFTWARE'					=> 'Keskustelufoorumin ohjelmisto',
	'SPECIFY_OPTIONS'			=> 'Määrittele muunnoksen vaihtoehdot',
	'STAGE_ADMINISTRATOR'		=> 'Ylläpitäjän tiedot',
	'STAGE_ADVANCED'			=> 'Yksityiskohtaiset asetukset',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Näitä asetuksia tarvitsee muuttaa vain, jos tiedät, että oletusasetukset eivät ole oikein. Jos olet epävarma, jatka suoraan seuraavaan vaiheeseen. Nämä tiedot voi muuttaa myöhemmin ylläpidon asetuksista.',
	'STAGE_CONFIG_FILE'			=> 'Asetustiedosto',
	'STAGE_CREATE_TABLE'		=> 'Luo taulut tietokantaan',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'phpBB 3.1:n käyttämät taulut on luotu tietokantaan ja täytetty alustavilla tiedoilla. Jatka seuraavaan vaiheeseen viimeistelläksesi phpBB-asennuksen.',
	'STAGE_DATABASE'			=> 'Tietokannan asetukset',
	'STAGE_FINAL'				=> 'Viimeinen vaihe',
	'STAGE_INTRO'				=> 'Tervetuloa',
	'STAGE_IN_PROGRESS'			=> 'Muunnos on käynnissä',
	'STAGE_REQUIREMENTS'		=> 'Tarvittavat',
	'STAGE_SETTINGS'			=> 'Asetukset',
	'STARTING_CONVERT'			=> 'Aloitetaan muunnosta',
	'STEP_PERCENT_COMPLETED'	=> 'Vaihe <strong>%d</strong>, <strong>%d</strong>:sta valmiina',
	'SUB_INTRO'					=> 'Tervetuloa',
	'SUB_LICENSE'				=> 'Lisenssi',
	'SUB_SUPPORT'				=> 'Tuki',
	'SUCCESSFUL_CONNECT'		=> 'Yhteydenotto onnistui',
	'SUPPORT_BODY'				=> 'phpBB3:lle tarjotaan ilmaiseksi täydellinen tuotetuki viimeisimmälle stabiilille versiolle. Tähän kuuluu:</p><ul><li>asennus</li><li>konfigurointi</li><li>tekniset kysymykset</li><li>mahdolliset ongelmat ohjemistovirheiden kanssa</li><li>päivittäminen julkaisukandidaateista (RC) uusimpaan vakaaseen versioon</li><li>muunnos phpBB 2.0.x -versiosta phpBB3-versioon</li><li>muunnos toisista ohjelmista phpBB3-versioon (ole hyvä ja katso <a href="https://www.phpbb.com/community/viewforum.php?f=486">muuntajien foorumi</a>)</li></ul><p>Suosittelemme käyttäjille, jotka käyttävät phpBB3-betaversioita poistamaan asennuksensa ja korvaamaan sen puhtaalla asennuksella uusimmasta phpBB3-versiosta.</p><h2>MODit / tyylit</h2><p>MODeihin liittyvistä ongelmista olkaa hyvä ja kirjoittakaa viesti <a href="https://www.phpbb.com/community/viewforum.php?f=451">laajennosten foorumille</a>.<br />Tyyleihin liittyvissä ongelmissa, teemoissa, mallineissa ja kuvapaketeissa olkaa hyvä ja kirjoittakaa <a href="https://www.phpbb.com/community/viewforum.php?f=471">tyylien foorumille</a>.<br /><br />Mikäli kysymys koskee jotain tiettyä pakettia, olkaa hyvä ja kirjoittakaa suoraan sen paketin omaan viestiketjuun.</p><h2>Lisätietoa käyttötuesta</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB:n tervetuloa-paketti</a><br /><a href="https://www.phpbb.com/support/">Tukialue</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">pikaopas aloitukseen</a><br /><br />Varmistaaksesi, että foorumisi pysyy ajan tasalla ja saadaksesi uutiset uusimmista versioista. Mikset liittyisi <a href="https://www.phpbb.com/support/">postituslistallemme</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Aloitetaan keskustelualueiden synkronointi',
	'SYNC_POST_COUNT'			=> 'Synkronoin post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synkronoin post_counts <var>entry</var> %1$s, %2$s:sta.',
	'SYNC_TOPICS'				=> 'Aloitetaan viestiketjujen synkronointi',
	'SYNC_TOPIC_ID'				=> 'Synkronoidaan viestiketjuja alkaen <var>topic_id</var>:stä $1%s ja jatketaan $2%s asti',

	'TABLES_MISSING'			=> 'En löytänyt näitä tauluja<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Taulujen etuliite',
	'TABLE_PREFIX_EXPLAIN'		=> 'Etuliite tulee alkaa kirjaimella ja siinä saa olla lisäksi numeroita ja alaviivoja.',
	'TABLE_PREFIX_SAME'			=> 'Etuliitteen täytyy olla sama, kuin sen ohjelman, josta olet muuntamassa.<br />» Antamasi etuliite oli %s',
	'TESTS_PASSED'				=> 'Testit ovat suoritettu onnistuneesti',
	'TESTS_FAILED'				=> 'Testit epäonnistuivat',

	'UNABLE_WRITE_LOCK'			=> 'En voi kirjoittaa lukkotiedostoa',
	'UNAVAILABLE'				=> 'Ei saatavilla',
	'UNWRITABLE'				=> 'Ei voida kirjoittaa',
	'UPDATE_TOPICS_POSTED'		=> 'Luon kirjoitettujen viestien informaatiota',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Tapahtui virhe luotaessa viestien lähetyksen informaatiota. Voit yrittää tätä vaihetta uudelleen ylläpidosta käsin, kun muunnos on päättynyt.',
	'VERIFY_OPTIONS'			=> 'Varmistan muunnoksen vaihtoehtoja',
	'VERSION'					=> 'Versio',

	'WELCOME_INSTALL'			=> 'Tervetuloa phpBB 3:n asennukseen',
	'WRITABLE'					=> 'Voidaan kirjoittaa',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Kaikki tiedostot ovat ajan tasalla uusimman phpBB-version kanssa.',
	'ARCHIVE_FILE'				=> 'Lähdetiedosto arkistotiedostosta',

 	'BACK'				=> 'Takaisin',
	'BINARY_FILE'		=> 'Binääritiedosto',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Menetelmä, joka varmistaa, että sama käyttäjätunnus ei ole käytössä useammalla käyttäjällä on muuttunut. Joillain käyttäjillä on sama nimi, kun heidät tarkistetaan uudella menetelmällä. Jatkamista varten nämä käyttäjätunnukset tulee joko poistaa tai nimetä uudelleen, jotta vain yksi tällainen nimi on olemassa.',
	'CHECK_FILES'					=> 'Tarkista tiedostot',
	'CHECK_FILES_AGAIN'				=> 'Tarkista tiedostot uudelleen',
	'CHECK_FILES_EXPLAIN'			=> 'Seuraavassa vaiheessa kaikki tiedostot tarkistetaan päivitysversioita vastaan - Tässä saattaa kestää hetken aikaa, jos tämä on ensimmäinen tarkistuskerta.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Tietokannan mukaan asennuksesi on ajan tasalla. Voit halutessasi suorittaa tiedostojen tarkistuksen varmistaaksesi, että myös nämä ovat ajan tasalla.',
	'CHECK_UPDATE_DATABASE'			=> 'Jatka päivitystä',
	'COLLECTED_INFORMATION'			=> 'Tiedostoista kerätyt tiedot',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Alapuolella näkyy lista tiedostoista, jotka vaativat päivittämistä. Lue tiedot jokaisen tiedoston tilasta nähdäksesi tarpeelliset toimenpiteet tiedoston päivittämiseksi.',
	'COLLECTING_FILE_DIFFS'			=> 'Kerään tiedostojen eroavaisuuksia',
	'COMPLETE_LOGIN_TO_BOARD'		=> '<a href="../ucp.php?mode=login">Kirjaudu sisään keskustelufoorumillesi</a> ja tarkista, että kaikki toimii normaalisti. Älä unohda poistaa, siirtää tai uudelleen nimetä /install-hakemistoa!',
	'CONTINUE_UPDATE_NOW'			=> 'Jatka päivittämistä',
	'CONTINUE_UPDATE'				=> 'Jatka päivittämistä',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Konfliktin alku - Alkuperäinen koodi ennen päivitystä',
	'CURRENT_VERSION'				=> 'Tämänhetkinen versio',

	'DATABASE_TYPE'						=> 'Tietokannan tyyppi',
	'DATABASE_UPDATE_COMPLETE'			=> 'Tietokannan päivitys valmis!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Jatka tietokannan päivitystä',
	'DATABASE_UPDATE_INFO_OLD'			=> 'install-hakemistossa oleva tietokannan päivitystiedosto ei ole ajan tasalla. Varmista, että olet siirtänyt palvelimelle oikean version tuosta tiedostosta.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Tietokannan päivitys käynnissä.',
	'DELETE_USER_REMOVE'				=> 'Poista käyttäjä ja viestit',
	'DELETE_USER_RETAIN'				=> 'Poista käyttäjä, mutta säilytä viestit',
	'DESTINATION'						=> 'Kohdetiedosto',
	'DIFF_INLINE'						=> 'Välitön',
	'DIFF_RAW'							=> 'Raaka yhdenmukaistettu vertailu',
	'DIFF_SEP_EXPLAIN'					=> 'Koodi, jota käytetään päivitetyssä/uudessa tiedostossa',
	'DIFF_SIDE_BY_SIDE'					=> 'vierekkäin',
	'DIFF_UNIFIED'						=> 'Yhdenmukaistettu vertailu',
	'DO_NOT_UPDATE'						=> 'Älä päivitä tätä tiedostoa',
	'DONE'								=> 'Valmis',
	'DOWNLOAD'							=> 'Lataa',
	'DOWNLOAD_AS'						=> 'Lataa muodossa',
    'DOWNLOAD_UPDATE_METHOD_BUTTON'     => 'Lataa muuttuneet tiedostot koneellesi (suositeltu)',
	'DOWNLOAD_CONFLICTS'				=> 'Lataa tämän tiedoston konfliktit',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Etsi &lt;&lt;&lt; löytääksesi konflikteja',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Lataa muuttuneet tiedostot paketoituna',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Latauksen jälkeen sinun tulisi purkaa tiedosto. Tästä tiedostosta löydät muuttuneet tiedostot, jotka tulee siirtää phpBB:n juurihakemistoon. Ole hyvä ja siirrä tiedostot oikeisiin paikkoihin. Kun olet siirtänyt kaikki tiedostot palvelimelle. Ole hyvä ja tarkista tiedostot uudelleen valitsemalla toisen alhaalla olevista napeista.',

	'EDIT_USERNAME'	=> 'Muokkaa käyttäjätunnusta',
	'ERROR'			=> 'Virhe',
	'EVERYTHING_UP_TO_DATE'		=> 'Kaikki kunnossa viimeisimmän phpBB version kanssa. Kirjaudu <a href="%1$s">palstalle</a> ja tarkista että kaikki toimii hyvin. Muista poistaa tai nimetä uudelleen install-hakemisto. Lähetä päivitetty tieto palstan ja palvelimen asetuksista <a href="%2$s">lähetä tila</a> painikkeesta ACP:ssä.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Tiedosto on jo päivitetty',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Tiedoston vertailua ei ole sallittu',
	'FILE_USED'						=> 'Käytin informaatiota',			// Single file
	'FILES_CONFLICT'				=> 'Ristiriitaiset tiedostot',
	'FILES_CONFLICT_EXPLAIN'		=> 'Seuraavat tiedostot ovat muokattuja ja ne eivät ole kelvollisia vertailutiedostoja alkuperäisille tiedostoille. phpBB on havainnut, että nämä tiedostot aiheuttavat konflikteja, jos niiden yhdistämistä yritetään. Tutki tiedostoja ja koita ratkaista konflikteja aiheuttavat kohdat tai valitse haluamasi yhdistämistapa. Mikäli ratkaisit konfliktit. Tarkista tiedostot uudelleen sen jälkeen, kun olet muokannut niitä. Voit valita haluamasi yhdistämismenetelmän jokaiselle tiedostolle erikseen. Ensimmäinen antaa tuloksena tiedoston, jossa konfliktin aiheuttavat rivit vanhoista tiedostoista ovat poistettu ja toinen vaihtoehto antaa tiedoston, jossa uuden tiedoston muutokset menetetään.',
	'FILES_DELETED'					=> 'Poistetut tiedostot',
	'FILES_DELETED_EXPLAIN'			=> 'Seuraavat tiedostot ovat tarpeettomia uudessa versiossa. Ne on poistettu asennuksen yhteydessä.',
	'FILES_MODIFIED'				=> 'Muokatut tiedostot',
	'FILES_MODIFIED_EXPLAIN'		=> 'Nämä tiedostot ovat muokattuja ja eivät ole kelvollisia vertailutiedostoja alkuperäiseen asennukseen. Päivitetty tiedosto on yhdistelmä vanhaa tiedostoa ja uusia tiedostoja.',
	'FILES_NEW'						=> 'Uudet tiedostot',
	'FILES_NEW_EXPLAIN'				=> 'Näitä tiedostoja ei ole olemassa tämänhetkisessä asennuksessasi.',
	'FILES_NEW_CONFLICT'			=> 'Uudet konfliktin aiheuttavat tiedostot',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Nämä tiedostot ovat uusinta versiota, mutta samanniminen tiedosto on jo olemassa samassa paikassa. Tämä tiedosto ylikirjoittaa vanhan tiedoston.',
	'FILES_NOT_MODIFIED'			=> 'Muokkaamattomat tiedostot',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Näitä tiedostoja ei ole muokattu ja ne ovat kelvollisia tiedostoja päivitykseen.',
	'FILES_UP_TO_DATE'				=> 'Nämä tiedostot ovat jo päivitetty',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Nämä tiedostot ovat viimeisintä versiota ja uusia päivityksiä ei ole saatavilla.',
	'FTP_SETTINGS'					=> 'FTP-asetukset',
	'FTP_UPDATE_METHOD'				=> 'FTP-siirto palvelimelle',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Löydetyt päivitystiedostot eivät ole yhteensopivia käyttämäsi version kanssa. Käytössäsi oleva versio on %1$s ja käytössäsi oleva tiedosto on tarkoitettu päivittämään %2$s -> %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Päivitystiedosto on vajaa',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Tietokannan päivittäminen onnistui. Voit jatkaa päivitystä eteenpäin',

	'KEEP_OLD_NAME'		=> 'Säilytä käyttäjätunnus',

	'LATEST_VERSION'		=> 'Viimeisin versio',
	'LINE'					=> 'Rivi',
	'LINE_ADDED'			=> 'Lisätty',
	'LINE_MODIFIED'			=> 'Muokattu',
	'LINE_REMOVED'			=> 'Poistettu',
	'LINE_UNMODIFIED'		=> 'Muokkaamaton',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Kirjaudu sisään suorittaaksesi päivityksiä.',

	'MAPPING_FILE_STRUCTURE'	=> 'Tässä on tiedostojen sijainnit, jotka auttavat päivittämään phpBB:n.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Yhdistä muutokset',

	'MERGE_NO_MERGE_NEW_OPTION'		=> 'Älä yhdistä - käytä uutta tiedostoa',
	'MERGE_NO_MERGE_MOD_OPTION'		=> 'Älä yhdistä - käytä jo olemassa olevaa tiedostoa',
	'MERGE_MOD_FILE_OPTION'      	=> 'Yhdistä muutokset (Hävitä uusi phpBB-koodi konfliktista)',
	'MERGE_NEW_FILE_OPTION'      	=> 'Yhdistä muutokset (Hävitä konfliktin aiheuttava muuttunut koodi)',
	'MERGE_SELECT_ERROR'      		=> 'Konfliktin yhdistämistapa on valittu väärin.',
	'MERGING_FILES'            		=> 'Yhdistän eroavaisuudet',
	'MERGING_FILES_EXPLAIN'     	=> 'Kerään lopullisia muutoksia.<br /><br />Ole hyvä ja odota kunnes phpBB on saanut kerättyä tiedot valmiiksi.',

	'NEW_FILE'              	    => 'Konfliktin loppu',
	'NEW_USERNAME'					=> 'Uusi käyttäjätunnus',
	'NO_AUTH_UPDATE'				=> 'Sinulla ei ole oikeuksia päivittämiseen',
	'NO_ERRORS'						=> 'Ei virheitä',
	'NO_UPDATE_FILES'				=> 'Näitä tiedostoja ei päivitetä',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Nämä tiedostot ovat uusia tai muokattuja, mutta kohdehakemistoa ei löytynyt. Mikäli tässä listassa on muita hakemistoja, kuin language/ tai styles/, hakemistorakenteesi saattaa olla muutettu ja päivitys voi jäädä vaillinaiseksi.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'En löytänyt kelvollista päivityshakemistoa. Ole hyvä ja tarkista, että olet siirtänyt tarvittavat tiedostot palvelimelle.<br /><br />Käyttämäsi versio <strong>Ei ole</strong> ajan tasalla. Käyttämääsi phpBB %1$s -versioon on saatavilla päivityksiä. Ole hyvä ja vieraile osoitteessa <a href="https://www.phpbb.com/downloads.php" rel="external">https://www.phpbb.com/downloads.php</a> sadaksesi oikean paketin päivittääksesi käytössä olevan %2$s version uudempaan %3$s-versioon.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Käyttämäsi versio on ajan tasalla ja päivitystyökalun ajamiseen ei ole tarvetta. Mikäli haluat tarkistaa käyttämiesi tiedostojen eheyden. Ole hyvä ja tarkista, että olet siirtänyt oikeat tiedostot palvelimelle.',
	'NO_UPDATE_INFO'				=> 'En löytänyt päivitystiedoston tietoja.',
	'NO_UPDATES_REQUIRED'			=> 'Päivitykset eivät ole tarpeellisia',
	'NO_VISIBLE_CHANGES'			=> 'Ei näkyviä muutoksia',
	'NOTICE'						=> 'Huomautus',
	'NUM_CONFLICTS'					=> 'Konfliktien lukumäärä',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Tällä hetkellä eroavaisuudet ovat haettu %1$d tiedostosta. Tiedostoja on yhteensä %2$d.<br />Ole hyvä ja odota kunnes tiedostojen kerääminen on valmis.',

	'OLD_UPDATE_FILES'		=> 'Päivityksen sisältävät tiedostot ovat vanhentuneet. Löytyneet tiedostot ovat tarkoitettu päivittämään versiosta %1$s versioon %2$s, mutta uusin phpBB:n versio on %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Tämä paketti päivittää versioon',
	'PERFORM_DATABASE_UPDATE'			=> 'Suorita tietokannan päivitys',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Alapuolella on linkki tietokannan päivitykseen. Tietokannan päivitys voi kestää pitkän aikaa, joten älä pysäytä sen suorittamista vaikka sivu näyttäisi jäävän jumiin. Tietokannan päivityksen jälkeen seuraa annettuja ohjeita päivityksen jatkamiseksi',
	'PREVIOUS_VERSION'					=> 'Edellinen versio',
	'PROGRESS'							=> 'Edistyminen',
	
	'RELEASE_ANNOUNCEMENT'		=> 'Ilmoitus',
	'RESULT'					=> 'Tulos',
	'RUN_DATABASE_SCRIPT'		=> 'Päivitä tietokanta',
	
	'SELECT_DIFF_MODE'			=> 'Valitse vertailutapa',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Valitse ladattavan paketin formaatti',
	'SELECT_FTP_SETTINGS'		=> 'Valitse FTP-asetukset',
	'SHOW_DIFF_CONFLICT'		=> 'Näytä erot/konfliktit',
	'SHOW_DIFF_DELETED'			=> 'Näytä tiedoston sisältö',
	'SHOW_DIFF_FINAL'			=> 'Näytä lopullinen tiedosto',
	'SHOW_DIFF_MODIFIED'		=> 'Näytä yhdistettyjen erot',
	'SHOW_DIFF_NEW'				=> 'Näytä tiedostojen sisältö',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Näytä erot',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Näytä erot',
	'SOME_QUERIES_FAILED'		=> 'Osa kyselyistä epäonnistui. Tiedot näkyvät alapuolella',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Tästä ei todennäköisesti tarvitse välittää. Päivittäminen jatkuu edelleen. Mikäli tämän suoritus pysähtyy kokonaan, voit pyytää neuvoa tukifoorumiltamme. Katso <a href="../docs/README.html">README</a> saadaksesi lisätietoa mistä saat apua ongelmiisi.',
	'STAGE_FILE_CHECK'			=> 'Tarkista tiedostot',
	'STAGE_UPDATE_DB'			=> 'Päivitä tietokanta',
	'STAGE_UPDATE_FILES'		=> 'Päivitä tiedostot',
	'STAGE_VERSION_CHECK'		=> 'Version tarkistus',
	'STATUS_CONFLICT'			=> 'Muokattu tiedosto, joka aiheuttaa konflikteja',
	'STATUS_DELETED'			=> 'Poistettu tiedosto',
	'STATUS_MODIFIED'			=> 'Muokattu tiedosto',
	'STATUS_NEW'				=> 'Uusi tiedosto',
	'STATUS_NEW_CONFLICT'		=> 'Uusi tiedosto, joka aiheuttaa konfliktin',
	'STATUS_NOT_MODIFIED'		=> 'Muokkaamaton tiedosto',
	'STATUS_UP_TO_DATE'			=> 'Tämä tiedosto on jo päivitetty',

	'TOGGLE_DISPLAY'			=> 'Näytä/Piilota tiedostolista',
	'TRY_DOWNLOAD_METHOD'		=> 'Saatat haluta ladata muuttuneet tiedostot omalle koneellesi.<br />Tämä tapa toimii varmemmin ja on myös suositeltu tapa.',
	'TRY_DOWNLOAD_METHOD_BUTTON'		=> 'Yritä tätä tapaa',

	'UPDATE_COMPLETED'				=> 'Päivitys on suoritettu',
	'UPDATE_DATABASE'				=> 'Päivitä tietokanta',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Seuraava vaihe päivittää tietokannan.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Päivitän tietokantaa',
	'UPDATE_FILES'					=> 'Päivitä tiedostot',
	'UPDATE_FILES_NOTICE'			=> 'Varmista, että olet päivittänyt myös tiedostot. Tämä päivittää vain tietokannan.',
	'UPDATE_INSTALLATION'			=> 'Päivitä phpBB-asennuksesi',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Tämän vaihtoehdon avulla voit päivittää keskustelufoorumisi uusimpaan versioon.<br />Tämän toiminnon aikana kaikkien tiedostojen eheys tarkistetaan. Voit tarkistaa kaikki muutokset ennen päivitystä.<br /><br />Tiedostojen päivitys voidaan suorittaa kahdella tavalla.</p><h2>Manuaalinen päivitys</h2><p>Tällä päivitysmenetelmällä lataat koneellesi vain muuttuneet tiedostot varmistaen, että et menetä mahdollisesti lähdekoodiin tekemiäsi muokkauksia. Kun olet ladannut tiedoston koneellesi. Sinun tulee manuaalisesti siirtää paketista löytyvät tiedostot palvelimelle phpBB:n juurihakemiston alle. Kun olet suorittanut tämän voit tehdä tiedostojen tarkistuksen uudelleen varmistaaksesi, että tiedostot ovat oikeassa paikassa. Mikäli kaikki on päivitetty oikein, pääset jatkamaan tietokannan päivitystä.</p><h2>Automaattinen päivitys FTP:n avulla</h2><p>Tämä päivitystapa on samankaltainen edellisen kanssa, mutta muuttuneita tiedostoja ei tarvitse ladata omalle koneellesi. tämä tekee sen automaattisesti. Tämän toiminnon suorittamiseen tarvitset FTP  tunnuksesi, sillä päivitysohjelma kysyy niitä. Kun toiminto on suoritettu, pääset jälleen tarkistamaan ovatko tiedostot päivitetty oikein ja siirretty oikeisiin paikkoihin. Mikäli kaikki ovat oikein, pääset suorittamaan tietokannan päivityksen.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Julkaisutiedote</h1>

		<p>Ole hyvä ja lue uusimman version julkaisutiedote ennen kuin jatkat päivittämistä, sillä siinä voi olla tärkeää tietoa. Siitä löytyvät myös latauslinkit ja muutosten tiedot.</p>

		<br />

		<h1>Kuinka voit päivittää asennuksesi automaattisella päivityspaketilla?</h1>

		<p>Tässä mainittu suositeltava päivitystapa koskee vain automaattista päivityspakettia. Voit päivittää asennuksesi käyttämällä INSTALL.html-tiedostossa mainittuja tapoja. Automaattisen phpBB3-päivityksen vaiheet ovat</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Mene <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com-lataussivulle</a> ja lataa oikea "phpBB Update Package" -tiedosto.<br /><br /></li>
			<li>Pura tiedosto.<br /><br /></li>
			<li>Siirrä puretut "install" ja "vendor" -hakemistot phpBB:n juurihakemistoosi (sama hakemisto, missä config.php-tiedosto sijaitsee).<br /><br /></li>
		</ul>

		<p>Kun olet siirtänyt tiedostot, keskustelufoorumi sulkeutuu normaaleilta käyttäjiltä, koska asennushakemisto on siirretty palvelimelle.<br /><br />
		<strong><a href="%1$s" title="%1$s">Nyt voit aloittaa päivityksen osoittamalla selaimesi asennustiedostot sisältävään hakemistoon (install)</a>.</strong><br />
		<br />
		Sinut ohjataan päivityksen läpi ja saat tiedon, koska päivitys on suoritettu.
		</p>
	',
	'UPDATE_METHOD'					=> 'Päivitysmenetelmä',
	'UPDATE_METHOD_EXPLAIN'			=> 'Voit valita haluamasi tavan. FTP:n avulla päivitettäessä ohjelma antaa lomakkeen ja kysyy FTP-tunnuksiasi palvelimelle. Tällä tavalla päivitettynä tiedostot siirretään automaattisesti oikeisiin paikkoihin ja varmuuskopioihin lisätään .bak tiedoston tunnisteeksi. Mikäli haluat ladata muuttuneet tiedostot omalle koneellesi, voit purkaa paketin ja siirtää tiedostot oikeisiin palvelimen hakemistoihin myöhemmin.',
	'UPDATE_REQUIRES_FILE'			=> 'Päivitysohjelma tarvitsee tämän tiedoston: %s',
	'UPDATE_SUCCESS'				=> 'Päivittäminen onnistui',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Tiedostojen päivittäminen onnistui. Seuraavassa vaiheessa tiedostot tarkistetaan uudelleen, jotta varmistetaan päivityksen tapahtuneen oikein.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Päivitän versionumeron ja optimoin taulut',
	'UPDATING_DATA'					=> 'päivitän dataa',
	'UPDATING_TO_LATEST_STABLE'		=> 'Päivitän tietokantaa viimeisimpään vakaaseen versioon',
	'UPDATED_VERSION'				=> 'Päivitetty versio',
	'UPLOAD_METHOD'					=> 'Siirtotapa',

	'UPDATE_DB_SUCCESS'				=> 'Tietokannan päivittäminen onnistui.',
	'UPDATE_FILE_SUCCESS'			=> 'Tietojen päivitys onnistui.',
	'USER_ACTIVE'					=> 'Aktiivinen käyttäjätunnus',
	'USER_INACTIVE'					=> 'Suljettu käyttäjätunnus',

	'VERSION_CHECK'					=> 'Version tarkistus',
	'VERSION_CHECK_EXPLAIN'			=> 'Tarkistaa onko keskustelufoorumisi ajan tasalla.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Keskustelufoorumisi ei ole ajan tasalla. Ole hyvä ja jatka päivitystä.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Keskustelufoorumisi ei ole ajan tasalla.<br />Alapuolella on linkki julkaisuteidotteeseen, josta saat lisää tietoa ja ohjeita.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Keskustelufoorumisi ei ole ajan tasalla.',
	'VERSION_UP_TO_DATE'			=> 'Keskustelufoorumisi on ajan tasalla. Voit jatkaa tiedostojen tarkistusta, vaikka uusia versioita ei ole saatavilla.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Keskustelufoorumisi on ajan tasalla. Uusia päivityksiä ei ole saatavilla.',
	'VIEWING_FILE_CONTENTS'			=> 'Katselee tiedoston sisältöä',
	'VIEWING_FILE_DIFF'				=> 'Katselee tiedoston muutoksia',

	'WRONG_INFO_FILE_FORMAT'		=> 'Info-tiedosto on väärää muotoa',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Kiitos, Ylläpito',
	'CONFIG_SITE_DESC'				=> 'Pieni_kuvaava_teksti keskustelufoorumistasi',
	'CONFIG_SITENAME'				=> 'sivustosi.com',

	'DEFAULT_INSTALL_POST'			=> 'Tämä on malli phpBB3-viestistä. Voit halutessasi poistaa tämän viestin, viestiketjun tai vaikka koko alueen, koska kaikki näyttäisi toimivan oikein! Asennuksen aikana ensimmäiselle ketegorialle ja alueelle annettiin yleisesti toimivat oikeudet. Mikäli poistat nämä alueet, joudut antamaan oikeudet käsin luomillesi alueille. Alue ja kategoria kannattaa vain nimetä uudelleen ja kopioida siitä toimivat oikeudet ja asetukset uusille alueille. Pidä hauskaa!',

	'FORUMS_FIRST_CATEGORY'			=> 'Ensimmäinen kategoriani',
	'FORUMS_TEST_FORUM_DESC'		=> 'Tämä on testialue.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Testialue 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Ylläpitäjä',
	'REPORT_WAREZ'					=> 'Viestissä on linkkejä laittomuuksiin- tai piraattituotteisiin.',
	'REPORT_SPAM'					=> 'Ilmoitetun viestin ainoa tarkoitus on mainostaa nettisivua tai tuotetta.',
	'REPORT_OFF_TOPIC'				=> 'Viesti on harhautunut alkuperäisestä aiheesta.',
	'REPORT_OTHER'					=> 'Ilmoitettu viesti ei sovi edellä mainittuihin luokkiin. Anna oma selite.',

	'SMILIES_ARROW'					=> 'Nuoli',
	'SMILIES_CONFUSED'				=> 'Hämmentynyt',
	'SMILIES_COOL'					=> 'Siisti',
	'SMILIES_CRYING'				=> 'Itkee tai erittäin surullinen',
	'SMILIES_EMARRASSED'			=> 'Nolostunut',
	'SMILIES_EVIL'					=> 'Ilkeä tai hurjistunut',
	'SMILIES_EXCLAMATION'			=> 'Huutomerkki',
	'SMILIES_GEEK'					=> 'Nörtti',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Nauraa',
	'SMILIES_MAD'					=> 'Suuttunut',
	'SMILIES_MR_GREEN'				=> 'Hra. Vihreä',
	'SMILIES_NEUTRAL'				=> 'Neutraali',
	'SMILIES_QUESTION'				=> 'Kysymysmerkki',
	'SMILIES_RAZZ'					=> 'Näyttää kieltä',
	'SMILIES_ROLLING_EYES'			=> 'Pyörittelee silmiä',
	'SMILIES_SAD'					=> 'Surullinen',
	'SMILIES_SHOCKED'				=> 'Järkyttynyt',
	'SMILIES_SMILE'					=> 'Hymy',
	'SMILIES_SURPRISED'				=> 'Yllättynyt',
	'SMILIES_TWISTED_EVIL'			=> 'Kieroutunutta ilkeyttä',
	'SMILIES_UBER_GEEK'				=> 'Tosi nörtti',
	'SMILIES_VERY_HAPPY'			=> 'Eritäin iloinen',
	'SMILIES_WINK'					=> 'Silmänisku',

	'TOPICS_TOPIC_TITLE'			=> 'Tervetuloa käyttämään phpBB3-ohjelmaa',
));
