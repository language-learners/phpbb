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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Täällä voit hallita hakutoiminnon sisällyluetteloa. Normaalisti käytössä on vain yksi sisällysluettelo, joten kannattaa poistaa ne luettelot, joita ei käytetä. Kun muokkaat joitakin asetuksia (esim. merkkien vähimmäis- ja enimmäismäärä), kannattaa ehkä rakentaa sisällysluettelo uusiksi, jotta se ottaisi muutokset huomioon.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Täällä määräät, mitä tapaa käytetään hakutoiminnossa ja mitä sisällysluetteloa käytetään. Voit asettaa joitain vaihtoehtoja, jotka määrittelevät kuinka paljon järjestelmä käyttää siihen resursseja. Osa asetuksista on yhteisiä jokaiselle hakukoneelle.',

	'COMMON_WORD_THRESHOLD'					=> 'Yleisen sanan raja',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Sanoja, joita esiintyy prosentuaalisesti suurimmissa osista viestejä pidetään yleisenä. Yleiset sanat jätetään huomiotta hauissa. Aseta nolla poistaaksesi toiminnon käytöstä. Tämä on käytössä vain, jos foorumilla on yli 100 viestiä. Sisällysluettelo täytyy rakentaa uudelleen, mikäli haluat yleisten sanojen päätyvän sisällysluetteloon.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Haluatko varmasti siirtyä käyttämään toista hakukonetta? Mikäli vaihdat, sinun täytyy luoda sisällysluettelo uudelle hakukoneelle. Voit poistaa vanhan hakukoneen sisällysluettelon vapauttaaksesi järjestelmän resursseja, jos et aio sitä enää käyttää.',
	'CONTINUE_DELETING_INDEX'				=> 'Jatka entisen sisällysluettelon poistamista',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Sisällysluettelon poisto on aloitettu. Et voi siirtya hakusivulle ennen kuin se on rakennettu uusiksi.',
	'CONTINUE_INDEXING'						=> 'jatka sisällysluettelon rakentamista',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Sisällysluettelon rakentaminen on aloitettu. Et voi siirtyä hakusivulle, ennen kuin se on rakennettu.',
	'CREATE_INDEX'							=> 'Luo sisällysluettelo',

	'DELETE_INDEX'							=> 'Poista sisällysluettelo',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sisällysluettelon poisto on käynnissä',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Hakukone siivoaa sisällysluetteloaan. Tähän voi mennä muutama minuutti.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext -hakukonetta voidaan käyttää vain MySQL:n version 4 ja sitä uudempien versioiden kanssa.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext -sisällysluetteloa voidan käyttää vain MyISAM ja InnoDB -tauluissa. MySQL 5.6.4 tai uudempi tarvitaan InnoDB:n fulltext-sisällysluetteloa varten.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Sisällysluettelossa olevien viestien kokonaismäärä',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Sanat joissa on vähintään näin monta kirjainta luetteloidaan hakua varten. Sinä tai ylläpitäjä voi muuttaa tätä mysql asetuksissa.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Sanat joissa on enintään näin monta merkkiä luetteloidaan hakua varten. Sinä tai ylläpitäjä voi muuttaa tätä mysql asetuksissa.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL kokotekstin haku on käytössä vain PostgreSQL:ssä.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Indeksoitujen viestien kokonaislukumäärä',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL versio',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Tekstihaun konfiguraatio profiili:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Avainsanan min. pituus',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Avainsanan max. pituus',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Tämä haku tarvitsee PostgreSQL version 8.3 tai uudempi.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Tekstihaun konfigurointia käytetty määrittämään sanojen merkityksiä.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Sanoja joissa on vähintään näin monta merkkiä käytetään tietokannan kyselyssä.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Sanoja joissa on enintään näin monta merkkiä käytetään tietokannan kyselyssä.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Anna seuraavat tiedot sphinx config tiedostoa varten',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Polku data kirjastoon',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Polku loki ja index tiedostoille. Tämä kirjasto pitää web haulta suojattulla alueella.',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Viestien lukumäärä toistuvasti päivitetyssä delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx haku palvelu',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Number of posts in main index',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config file',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data and config directory paths are not defined. Please define them to generate the config file.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Yleiset haku asetukset',
	'GO_TO_SEARCH_INDEX'					=> 'Mene hakutoiminnon etusivulle',

	'INDEX_STATS'							=> 'Etusivun tilastot',
	'INDEXING_IN_PROGRESS'					=> 'Sisällysluetteloa luodaan',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Hakukone rakentaa sisällysluetteloa keskustelufoorumin viesteistä. Tämä saattaa kestää muutamasta minuutista tunteihin riippuen keskustelufoorumisi koosta.',

	'LIMIT_SEARCH_LOAD'						=> 'Hakusivun kuormituksen rajoitus',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hakutoiminto sulkeutuu, mikäli yhden minuutin kuormitus ylittyy. 1.0 on sama, kuin ~100% käyttö yhdellä suorittimella. Tämä toimii vain UNIX-pohjaisilla palvelimilla.',

	'MAX_SEARCH_CHARS'						=> 'Sisällysluettelon merkkien enimmäismäärä',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Sanat, joissa ei ole tätä enempää merkkejä, lisätään sisällysluetteloon.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Avainsanojen enimmäismäärä',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksimimäärä haettaville sanoille. Nolla poistaa rajoituksen käytöstä.',
	'MIN_SEARCH_CHARS'						=> 'Sisällysluettelon merkkien vähimmäismäärä',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Sanassa täytyy olla vähintään näin monta merkkiä päästäkseen sisällysluetteloon.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimimäärä merkkejä kirjoittajan nimessä',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Käyttäjän täytyy antaa tämän verran merkkejä kirjoittajan nimestä hakiessaan jokerimerkillä. Mikäli kirjoittajan nimessä on vähemmän merkkejä, kuin tämä arvo on, voit silti hakea tämän käyttäjän tekemät viestit kirjoittamalla käyttäjän koko nimen hakusivulle.',

	'PROGRESS_BAR'							=> 'Edistyminen',

	'SEARCH_GUEST_INTERVAL'					=> 'Hakutoiminnon rajoitus vieraiden käyttämänä',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Kuinka monta sekuntia vierailijan on odotettava hakujensa välillä. Mikäli yksi vieras on etsimässä tietoa, muiden on odotettava, kunnes aikaraja on täytynyt.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Kaikki viestit id-arvoon %2$d asti on luetteloitu, joista %1$d viestiä oli mukana tässä vaiheessa.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Tämänhetkinen sisällysluettelon rakanetamisen nopeus on noin %1$.1f viestiä sekunnissa.<br />Sisällysluettelon rakennus on käynnissä…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Kaikki viestit id-arvoon %2$d on poistettu luettelosta.<br />Poisto kesken…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Kaikki keskustelufoorumin viesttit ovat sisällysluettelossa',
	'SEARCH_INDEX_REMOVED'					=> 'Tämän hakukoneen sisällysluettelo on poistettu',
	'SEARCH_INTERVAL'						=> 'Hakutoiminnon rajoitus rekisteröityneeltä käyttäjältä',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Kuinka monta sekuntia käyttäjän on odotettava hakujensa välillä. Tämä raja on käyttäjäkohtainen.',
	'SEARCH_STORE_RESULTS'					=> 'Hakutulosten pitäminen välimuistissa',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Hakutulokset pidetään välimuistissa tämän aikaa sekuntteina. Aseta nolla poistaaksesi hakutulosten asettamisen välimuistiin.',
	'SEARCH_TYPE'							=> 'Hakukone',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB sallii käytettävän hakukoneen vaihtamisen, jonka avulla voit etsiä tuloksia keskustelufoorumin viesteistä. Oletuksena käytetään phpBB:n omaa fulltext hakua.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Olet vaihtanut hakukonetta. Varmista, että sille on luotu oma sisällysluettelonsa, jotta voisit käyttää tätä hakukonetta.',

	'TOTAL_WORDS'							=> 'Sisällysluettelossa olevien sanojen määrä',
	'TOTAL_MATCHES'							=> 'Sisällysluettelossa olevien suhteellisten vastaavuuksien määrä',

	'YES_SEARCH'							=> 'Ota hakutoiminto käyttöön',
	'YES_SEARCH_EXPLAIN'					=> 'Ottaa hakutoiminnon käyttöön, mukaanlukien käyttäjähaun.',
	'YES_SEARCH_UPDATE'						=> 'Ota käyttöön fulltext päivitykset',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'fulltext-sisällysluettelon päivitys viestin lähetyksen yhteydessä. Tämä asetus ohitetaan, mikäli Hakutoiminto ei ole käytössä.',
));
