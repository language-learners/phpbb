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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Profiilikenttä on lisätty',
	'ALPHA_DOTS'			=> 'Kirjaimet, numerot ja ", ."',
	'ALPHA_ONLY'			=> 'Kirjaimet ja numerot',
	'ALPHA_SPACERS'			=> 'Kirjaimet, numerot ja " "',
	'ALPHA_UNDERSCORE'		=> 'Kirjaimet, numerot ja "_"',
	'ALPHA_PUNCTUATION'		=> 'Kirjaimet, numerot ", . _" ja "-" kun sana alkaa kirjaimella',
	'ALWAYS_TODAY'			=> 'Aina nykyinen päivämäärä',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Lisää vaihtoehdot nyt',
	'BOOL_TYPE_EXPLAIN'		=> 'Määrittele tyyppi, joko valintaruutu tai valintanapit. Valintaruutu näytetään vain, jos se on valittu kyseisen käyttäjän kohdalla. Siinä tapauksessa <strong>toista</strong> kielivalintaa käytetään. Valintanapit näkyvät niiden arvosta huolimatta.',

	'CHANGED_PROFILE_FIELD'		=> 'Profiilikenttä on muutettu',
	'CHARS_ANY'					=> 'Mikä tahansa merkki',
	'CHECKBOX'					=> 'Valintaruutu',
	'COLUMNS'					=> 'Sarakkeet',
	'CP_LANG_DEFAULT_VALUE'		=> 'Oletusarvo',
	'CP_LANG_EXPLAIN'			=> 'Kentän kuvaus',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Tämän kentän käyttäjälle näkyvä selite',
	'CP_LANG_NAME'				=> 'Kentän nimi/otsikko, joka näytetään käyttäjälle',
	'CP_LANG_OPTIONS'			=> 'Vaihtoehdot',
	'CREATE_NEW_FIELD'			=> 'Luo uusi kenttä',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Ainakin yksi mukautetuista profiilikentistä on kääntämättä. Ole hyvä ja syötä puuttuva tieto painamalla &quot;Käännä&quot;-linkkiä.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Oletuskieli [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Oletuskielen käyttämää kielitiedostoa ei ole päivitetty tälle profiilikentälle.',
	'DEFAULT_VALUE'					=> 'Oletusarvo',
	'DELETE_PROFILE_FIELD'			=> 'Poista profilikenttä',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Haluatko varmasti poistaa tämän kentän profiilista?',
	'DISPLAY_AT_PROFILE'			=> 'Näytä omissa asetuksissa',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Käyttäjä voi muuttaa tätä kenttää omissa asetuksissaan.',
	'DISPLAY_AT_REGISTER'			=> 'Näytä rekisteröityessä',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Kenttä näytetään rekisteröityessä mikäli tämä vaihtoehto on valittuna.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Näytä jäsenlistassa',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Kenttä näytetään jäsenlistassa mikäli tämä vaihtoehto on valittuna.',
	'DISPLAY_ON_PM'					=> 'Näytä yksityisviesteissä',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Kenttä näytetään yksityisviesteissä mikäli tämä vaihtoehto on valittuna.',
	'DISPLAY_ON_VT'					=> 'Näytä viestisivulla',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Mikäli käytössä, tämä näytetään viestisivulla pienen profiilin yhteydessä.',
	'DISPLAY_PROFILE_FIELD'			=> 'Näytä kenttä julkisesti profiilissa',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Tämä profiilissa oleva kenttä näytetään viestien katselussa/profiilissa/käyttäjälistassa/jne sivuilla.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Laita vaihtoehdot nyt. Jokainen vaihtoehto omalle rivillensä',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Huomaa, vaikka voit muuttaa vaihtoehtojen tekstiä ja voit lisätä vaihtoehtoja loppuun. Ei ole suositeltavaa lisätä uusia vaihtoehtoja jo käytössäolevien vaihtoehtojen väliin. Tämä voi aiheuttaa väärien vaihtoehtojen asettamisen käyttäjälle. Tämä voi tapahtua myös, jos poistat välissä olevia vaihtoehtoja. Vaihtoehtojen poistaminen lopusta muuttaa tämän valinnan tehneiden käyttäjien valinnan takaisin oletusarvoksi.',
	'EMPTY_FIELD_IDENT'				=> 'Tyhjän kentän tunnistus',
	'EMPTY_USER_FIELD_NAME'			=> 'Anna kentän numero/otsikko',
	'ENTRIES'						=> 'Lisäykset',
	'EVERYTHING_OK'					=> 'Kaikki OK',

	'FIELD_BOOL'				=> 'Boolean (Kyllä/Ei)',
	'FIELD_CONTACT_DESC'		=> 'Yhteyden kuvaus',
	'FIELD_CONTACT_URL'			=> 'Yhteyslinkki',
	'FIELD_DATE'				=> 'Päivämäärä',
	'FIELD_DESCRIPTION'			=> 'Kentän kuvaus',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Käyttäjälle näytettävä selite kentästä',
	'FIELD_DROPDOWN'			=> 'Alasveto-laatikko',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'				=> 'Kentän tunniste',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Tälle kentälle on jo olemassa tämän niminen tunniste. Ole hyvä ja valitse toinen nimi.',
	'FIELD_IDENT_EXPLAIN'		=> 'Kentän tunniste on nimi, jolla kenttä löytyy tietokannasta ja mallineesta.',
	'FIELD_INT'					=> 'Numerot',
	'FIELD_IS_CONTACT'			=> 'Näytä kenttä yhteyskenttänä',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Yhteys kentät näytetään käyttäjäprofiilin yhteysosassa, mini profiilissa ja yksityisvieseissä. Käytä <samp>%s</samp> korvaamaan käyttäjän antama tieto.',
	'FIELD_LENGTH'				=> 'Kirjoituslaatikon pituus',
	'FIELD_NOT_FOUND'			=> 'Profiilikenttää ei löytnyt',
	'FIELD_STRING'				=> 'Pelkkä tekstikenttä',
	'FIELD_TEXT'				=> 'Tekstialue',
	'FIELD_TYPE'				=> 'Kentän tyyppi',
	'FIELD_TYPE_EXPLAIN'		=> 'Kentän tyyppiä ei voi muuttaa jälkikäteen.',
	'FIELD_URL'					=> 'URL (linkki)',
	'FIELD_VALIDATION'			=> 'Kentän hyväksyminen',
	'FIRST_OPTION'				=> 'Ensimmäinen vaihtoehto',

	'HIDE_PROFILE_FIELD'			=> 'Piilota profiilikenttä',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Piilottaa tämän kentän kaikilta muilta, paitsi ylläpitäjiltä ja valvojilta. Mikäli tämä on piilossa käyttäjän asetuksissa, vain ylläpitäjät voivat muokata.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Kentän tunniste voi sisältää vain pieniä kirjaimia a-z ja _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Kentän tunniste saa olla enintään 17 merkin pituinen',
	'ISO_LANGUAGE'				=> 'Kieli [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Kielikohtaiset vaihtoehdot [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Kirjaimet, numerot, piste ja pilkku',
	'LETTER_NUM_ONLY'			=> 'Kirjaimet ja numerot',
	'LETTER_NUM_PUNCTUATION'	=> 'Kirjaimet, numerot, ", . _" ja "-" kun sana alkaa kirjaimella',
	'LETTER_NUM_SPACERS'		=> 'Kirjaimet, numerot ja " "',
	'LETTER_NUM_UNDERSCORE'		=> 'Kirjaimet, numerot ja "_"',

	'MAX_FIELD_CHARS'		=> 'Kirjoitusmerkkien enimmäismäärä',
	'MAX_FIELD_NUMBER'		=> 'Korkein sallittu numero',
	'MIN_FIELD_CHARS'		=> 'Kirjoitusmerkkien vähimmäismäärä',
	'MIN_FIELD_NUMBER'		=> 'Pienin sallittu numero',

	'NO_FIELD_ENTRIES'			=> 'Merkintöjä ei ole määritelty',
	'NO_FIELD_ID'				=> 'Kentän tunnistetta ei ole määritelty',
	'NO_FIELD_TYPE'				=> 'Kentän tyyppiä ei ole määritelty',
	'NO_VALUE_OPTION'			=> 'Annettu vaihtoehto on sama kuin tyhjä kenttä',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Tyhjän kentän arvo. Käyttäjä saa virheilmoituksen täyttäessään kentän väärin, mikäli tämä on asetettu pakolliseksi',
	'NUMBERS_ONLY'				=> 'Vain numerot (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Perusvaihtoehdot',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profiilikenttä on aktivoitu',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profiilikenttä on poistettu käytöstä',
	'PROFILE_LANG_OPTIONS'		=> 'Kielikohtaiset vaihtoehdot',
	'PROFILE_TYPE_OPTIONS'		=> 'Profiilin tyyppiin sidotut asetukset',

	'RADIO_BUTTONS'				=> 'Valintanapit',
	'REMOVED_PROFILE_FIELD'		=> 'Profiilikenttä on poistettu.',
	'REQUIRED_FIELD'			=> 'Pakollinen kenttä',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Pakota kentän täyttäminen tai anna käyttäjän määritellä. Mikäli kenttää ei näytetä rekisteröityessä, sen täyttäminen vaaditaan vasta profiilia muokatessa.',
	'ROWS'						=> 'Rivit',

	'SAVE'							=> 'Tallenna',
	'SECOND_OPTION'					=> 'Toinen vaihtoehto',
	'SHOW_NOVALUE_FIELD'			=> 'Näytä kenttä, jos arvoa ei ole määritelty',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Määrittelee näytetäänkö kenttä, jos valinnaisten kenttien arvoa ei ole määritelty tai arvoa ei ole vielä valittu vadituille kentille.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Täällä voit lisätä perusasetukset uudelle profiilikentälle. Nämä tiedot tarvitaan seuraavassa vaiheessa, jossa voit lisätä loput asetuksista ja missä voit esikatsella ja muokata kenttää enemmän.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Täällä voit muuttaa profiilikentän perusasetuksia. Tarvittavat muutokset lasketaan uudelleen seuraavassa vaiheessa, missä voit esikatsella, testata ja muokata kenttää enemmän.',
	'STEP_1_TITLE_CREATE'			=> 'Lisää profiilikenttä',
	'STEP_1_TITLE_EDIT'				=> 'Muokkaa profiilikenttää',
	'STEP_2_EXPLAIN_CREATE'			=> 'Täällä voit määrittää joitain yleisiä vaihtoehtoja. Voit myös esikatsella luomaasi kenttää samalla tavalla, kuin se näytetään käyttäjälle. Voit leikkiä sen kanssa niin kauan, kunnes olet tyytyväinen toimintaan.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Täällä voit muokata joitain yleisiä vaihtoehtoja.<br /><strong>Huomaa, että muutokset profiilikenttiin eivät vaikuta jo olemassaoleviin kenttiin, joita käyttäjät ovat täyttäneet.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profiilin tyyppiin sidotut vaihtoehdot',
	'STEP_2_TITLE_EDIT'				=> 'Profiilin tyyppiin sidotut vaihtoehdot',
	'STEP_3_EXPLAIN_CREATE'			=> 'Koska käytössäsi on enemmän kuin yksi kielipaketti, myös näiden kielien versiot tulisi täyttää. Profiilikenttä näytetään oletuskielellä ja halutessasi voit lisätä loput kielet myöhemmin.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Koska käytössäsi on enemmän kuin yksi kielipaketti, myös näiden kielien versiot tulisi täyttää. Profiilikenttä näytetään oletuskielellä.',
	'STEP_3_TITLE_CREATE'			=> 'Jäljellä olevat kielet',
	'STEP_3_TITLE_EDIT'				=> 'Kielen määritelmät',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Laita oletusfraasi, joka näytetään käyttäjälle tai jätä tyhjäksi, jos haluat sen olevan tyhjänä.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Laita oletusteksti, joka näytetään käyttäjälle tai jätä tyhjäksi, jos haluat sen olevan tyhjänä.',
	'TRANSLATE'						=> 'Käännä',

	'USER_FIELD_NAME'	=> 'Käyttäjälle näytettävä kentän nimi/otsikko',

	'VISIBILITY_OPTION'				=> 'Näkyvyyden asetukset.',
));
