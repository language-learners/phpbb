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
	'CAPTCHA_QA'		=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Tämän kysymyksen tarkoitus on estää roskapostitusta foorumille.',
	'CONFIRM_QUESTION_WRONG'		=> 'Olet antanut epäkelvon vastauksen kysymykseen.',

	'QUESTION_ANSWERS'			=> 'Vastaukset',
	'ANSWERS_EXPLAIN'			=> 'Laita tähän oikeat vastaukset. Yksi per rivi.',
	'CONFIRM_QUESTION'			=> 'Kysymys',

	'ANSWER'					=> 'Vastaus',
	'EDIT_QUESTION'				=> 'Muokkaa kysymystä',
	'QUESTIONS'					=> 'Kysymyksiä',
	'QUESTIONS_EXPLAIN'         => 'Käyttäjiltä kysytään tämä kysymys aina ennen lomakkeen lähettämistä, mikäli Q&amp;A-liitännäinen on asetettu käyttöön. Tämän liitännäisen käyttäminen vaatii ainakin yhden kysymyksen keskustelufoorumin oletuskielellä. Näiden kysymysten tulee olla tarpeeksi helppoja, jotta käyttäjäsi osaavat niihin vastata, mutta tarpeeksi vaikeita Google™-hakuja hyödyntäville roskapostiroboteille. Parhaimmat tulokset saavutetaan suurella määrällä muuttuvia kysymyksiä. Ota tarkka vastaus käyttöön, jos vastaus riippuu kirjasinkoosta tai muista erikoismerkeistä.',
	'QUESTION_DELETED'			=> 'Kysymys poistettu',
	'QUESTION_LANG'				=> 'Kieli',
	'QUESTION_LANG_EXPLAIN'		=> 'Kieli, jolla tämä kysymys ja vastaus kirjoitetaan.',
	'QUESTION_STRICT'			=> 'Tarkka vastaus',
	'QUESTION_STRICT_EXPLAIN'	=> 'Mikäli tämä on käytössä, vaaditaan merkkien täsmääminen täydellisesti (välilyönnit ja kirjainkoko mukaan lukien).',

	'QUESTION_TEXT'				=> 'Kysymys',
	'QUESTION_TEXT_EXPLAIN'		=> 'Käyttäjälle näytettävä kysymys',

	'QA_ERROR_MSG'				=> 'Ole hyvä ja täytä kaikki kentät ja anna ainakin yksi oikea vastaus.',
	'QA_LAST_QUESTION'			=> 'Et voi poistaa kaikkia kysymyksiä tämän liitännäisen ollessa edelleen käytössä.',

));
