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
	'ALL_AVAILABLE'			=> 'Kaikki saatavilla olevat',
	'ALL_RESULTS'			=> 'Kaikki tulokset',

	'DISPLAY_RESULTS'		=> 'Näytä tulokset',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Haku löysi %d tuloksen',
		2	=> 'Haku löysi %d tulosta',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Haku löysi yli %d tulosta',
		2	=> 'Haku löysi yli %d tulosta',
	),

	'GLOBAL'				=> 'Yleinen viestiketju',

	'IGNORED_TERMS'			=> 'Pois jätetyt',
	'IGNORED_TERMS_EXPLAIN'	=> 'Hausta jätettiin pois seuraavat sanat: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Hyppää viestiin',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Kirjaudu sisään katsoaksesi omia viestejäsi.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Kirjaudu sisään katsoaksesi lukemattomia viestejäsi.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Kirjaudu sisään katsoaksesi edellisen käynnin jälkeen tulleita viestejä.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Annoit liian monta hakusanaa. Anna enintään %1$d sanaa.',
		2	=> 'Annoit liian monta hakusanaa. Anna enintään %1$d sanaa.',
	),

	'NO_KEYWORDS'			=> 'Anna ainakin yksi sana haettavaksi. Jokainen sana täytyy olla vähintään %s merkkiä pitkä ja siinä ei saa olla enempää kuin %s merkkiä, poisluettuna jokerimerkit.',
	'NO_RECENT_SEARCHES'	=> 'Hakuja ei ole suoritettu.',
	'NO_SEARCH'				=> 'Pahoittelut, mutta sinulla ei ole oikeuksia käyttää hakupalvelua.',
	'NO_SEARCH_RESULTS'		=> 'Ei löytynyt.',
	'NO_SEARCH_LOAD'		=> 'Et voi suorittaa hakua juuri nyt, serverin ylikuorma. Yritä hetken kuluttua uudestaan.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Haku ei ole nyt mahdollinen, yritä uudestaan %d sekunnin kuluttua.',
		2	=> 'Haku ei ole nyt mahdollinen, yritä uudestaan %d sekunnin kuluttua.',
	),
	'NO_SEARCH_UNREADS'		=> 'Pahoittelut, mutta viestit joita ei ole luettu ei voi etsiä tällä keskustelufoorumilla.',
	'WORD_IN_NO_POST'		=> 'Ei löytynyt tuloksia koska sanaa <strong>%s</strong> ei ole viesteissä.',
	'WORDS_IN_NO_POST'		=> 'Ei löytynyt tuloksia koska sanoja <strong>%s</strong> ei ole viesteissä.',

	'POST_CHARACTERS'		=> 'Merkkiä viestistä.',
	'PHRASE_SEARCH_DISABLED'	=> 'Haluamasi haku ei ole käytössä.',

	'RECENT_SEARCHES'		=> 'Viimeisimmät haut',
	'RESULT_DAYS'			=> 'Rajaa tulokset',
	'RESULT_SORT'			=> 'Lajittele tulokset',
	'RETURN_FIRST'			=> 'Palauta ensimmäiset',
	'GO_TO_SEARCH_ADV'	=> 'Siirry tarkennettuun hakuun',

	'SEARCHED_FOR'				=> 'Käytetyt hakusanat',
	'SEARCHED_TOPIC'			=> 'Haetut viestiketjut',
	'SEARCHED_QUERY'			=> 'Etsitty kysely',
	'SEARCH_ALL_TERMS'			=> 'Hae kaikilla sanoilla tai käytä kirjoitettua hakua',
	'SEARCH_ANY_TERMS'			=> 'Hae kaikilla vaihtoehdoilla',
	'SEARCH_AUTHOR'				=> 'Hae käyttäjätunnuksella',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Käytä *-merkkiä jokerimerkkinä osittaisiin hakuihin.',
	'SEARCH_FIRST_POST'			=> 'Viestiketjujen ensimmäinen viesti',
	'SEARCH_FORUMS'				=> 'Hae alueittain',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Valitse alue tai alueet, josta haluat etsiä. Sisäalueet voidaan hakea valitsemalla se alapuolelta.',
	'SEARCH_IN_RESULTS'			=> 'Etsi näistä tuloksista',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Aseta <strong>+</strong> merkki sanan eteen, jonka on löydyttävä ja <strong>-</strong> merkki sellaisen sanan eteen, jota ei saa löytyä. Laita haettavat sanat sulkuihin erotettuna <strong>|</strong>-merkillä, mikäli vain yhden sanan on löydyttävä. Käytä *-merkkiä jokerimerkkinä osittaisiin hakuihin.',
	'SEARCH_MSG_ONLY'			=> 'Vain teksti',
	'SEARCH_OPTIONS'			=> 'Haun vaihtoehdot',
	'SEARCH_QUERY'				=> 'Hakulauseke',
	'SEARCH_SUBFORUMS'			=> 'Etsi sisäalueet',
	'SEARCH_TITLE_MSG'			=> 'Viestin otsikot ja tekstit',
	'SEARCH_TITLE_ONLY'			=> 'Viestin otsikko',
	'SEARCH_WITHIN'				=> 'Hae täältä',
	'SORT_ASCENDING'			=> 'Nouseva',
	'SORT_AUTHOR'				=> 'Kirjoittaja',
	'SORT_DESCENDING'			=> 'Laskeva',
	'SORT_FORUM'				=> 'Alue',
	'SORT_POST_SUBJECT'			=> 'Viestin aihe',
	'SORT_TIME'					=> 'Viestin aika',
	'SPHINX_SEARCH_FAILED'		=> 'Haku epäonnistui: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Haku epäonnistui, lisätietoja voit katsoa virhelokista.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Anna vähintään %d merkki kirjoittajan nimestä.',
		2	=> 'Anna vähintään %d merkkiä kirjoittajan nimestä.',
	),
));
