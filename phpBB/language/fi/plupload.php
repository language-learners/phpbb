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
	'PLUPLOAD_ADD_FILES'		=> 'Lisää tiedostoja',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Lisää tiedostoja lataus jonoon ja paina "start".',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s tiedosto on jo jonossa.',
	'PLUPLOAD_CLOSE'			=> 'Sulje',
	'PLUPLOAD_DRAG'				=> 'Vedä tiedostot tänne			.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Tiedosto on jo olemassa.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Voit liittää tiedostoja vetämällä ne viesti laatikkoon.',
	'PLUPLOAD_ERR_INPUT'		=> 'Annettua lauseketta ei voi avata.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Virhe ladatun tiedoston siirrossa.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Virhe lähtevän tiedon avauksessa.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Tiedosto liian suuri:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Tiedoston lukumäärä virhe.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Tiedoston loppuliite ei kelpaa:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Ohjelmamuisti täynnä.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Kohde URL virheellinen tai sitä ei ole.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Tiedoston loppuliite virheellinen.',
	'PLUPLOAD_FILE'				=> 'Tiedosto: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Tiedosto: %s, koko: %d, max tiedoston koko: %d',
	'PLUPLOAD_FILENAME'			=> 'Tiedostonimi',
	'PLUPLOAD_FILES_QUEUED'		=> '%d tiedostoa jonossa',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Yleinen virhe.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP virhe.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Kuvan tiedostomuoto joko väärä tai ei mahdollinen.',
	'PLUPLOAD_INIT_ERROR'		=> 'Alustusvirhe.',
	'PLUPLOAD_IO_ERROR'			=> 'IO virhe.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Turvallisuus virhe.',
	'PLUPLOAD_SELECT_FILES'		=> 'Valitse tiedostot',
	'PLUPLOAD_SIZE'				=> 'Koko',
	'PLUPLOAD_SIZE_ERROR'		=> 'Tiedoston koko virhe.',
	'PLUPLOAD_STATUS'			=> 'Tila',
	'PLUPLOAD_START_UPLOAD'		=> 'Käynnistä lataus',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Käynnistä jonon lataus',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Keskeytä lataus',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Keskeytä käynnissäoleva lataus',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Ladattu %d/%d tiedostoa',
));
