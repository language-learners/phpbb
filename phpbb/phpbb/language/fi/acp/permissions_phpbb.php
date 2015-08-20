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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Toimenpiteet',
	'ACL_CAT_CONTENT'		=> 'Sisältö',
	'ACL_CAT_FORUMS'		=> 'Forums',
	'ACL_CAT_MISC'			=> 'Sekal',
	'ACL_CAT_PERMISSIONS'	=> 'Oikeudet',
	'ACL_CAT_PM'			=> 'Yksityisviestit',
	'ACL_CAT_POLLS'			=> 'Äänestys',
	'ACL_CAT_POST'			=> 'Viestit',
	'ACL_CAT_POST_ACTIONS'	=> 'Viestitoimenpiteet',
	'ACL_CAT_POSTING'		=> 'Viestien läheys',
	'ACL_CAT_PROFILE'		=> 'Profiili',
	'ACL_CAT_SETTINGS'		=> 'Asetukset',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Viestiketjun toimenpiteet',
	'ACL_CAT_USER_GROUP'	=> 'Käyttäjät &amp; Ryhmät',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Voi katsoa profiilia',
	'ACL_U_CHGNAME'		=> 'Voi vaihtaa käyttäjätunnusta',
	'ACL_U_CHGPASSWD'	=> 'Voi vaihtaa salasanaa',
	'ACL_U_CHGEMAIL'	=> 'Voi vaihtaa sähköpostiosoitetta',
	'ACL_U_CHGAVATAR'	=> 'Voi vaihtaa avataria',
	'ACL_U_CHGGRP'		=> 'Voi vaihtaa oletusryhmäänsä',
	'ACL_U_CHGPROFILEINFO'	=> 'Voi vaihtaa profiilin tietoja',

	'ACL_U_ATTACH'		=> 'Voi lisätä liitetiedoston',
	'ACL_U_DOWNLOAD'	=> 'Voi ladata tiedostoja',
	'ACL_U_SAVEDRAFTS'	=> 'Voi tallentaa luonnoksia',
	'ACL_U_CHGCENSORS'	=> 'Voi ohittaa sanasensuroinnin',
	'ACL_U_SIG'			=> 'Voi käyttää allekirjoitusta',

	'ACL_U_SENDPM'		=> 'Voi lähettää yksityisviestejä',
	'ACL_U_MASSPM'		=> 'Voi lähettää yksityisviestin monelle vastaanottajalle',
	'ACL_U_MASSPM_GROUP'=> 'Voi lähettää yksityisviestin ryhmälle',
	'ACL_U_READPM'		=> 'Voi lukea yksityisviestejä',
	'ACL_U_PM_EDIT'		=> 'Voi muokata omia yksityisviestejään',
	'ACL_U_PM_DELETE'	=> 'Voi poistaa yksityisviestejä omasta kansiostaan',
	'ACL_U_PM_FORWARD'	=> 'Voi lähettää yksityisviestejä eteenpäin',
	'ACL_U_PM_EMAILPM'	=> 'Voi lähettää yksityisviestin sähköpostilla',
	'ACL_U_PM_PRINTPM'	=> 'Voi tulostaa yksityisviestin',
	'ACL_U_PM_ATTACH'	=> 'Voi lisätä liitetiedoston yksityisviestiin',
	'ACL_U_PM_DOWNLOAD'	=> 'Voi ladata yksityisviesteissä olevia liitetiedostoja',
	'ACL_U_PM_BBCODE'	=> 'Voi käyttää BBCodea yksityisviesteissä',
	'ACL_U_PM_SMILIES'	=> 'Voi käyttää hymiöitä yksityisviesteissä',
	'ACL_U_PM_IMG'		=> 'Voi käyttää [img]-BBCode-tagia yksityisviesteissä',
	'ACL_U_PM_FLASH'	=> 'Voi käyttää [flash]-BBCode-tagia yksityisviesteissä',

	'ACL_U_SENDEMAIL'	=> 'Voi lähettää sähköpostia',
	'ACL_U_SENDIM'		=> 'Voi lähettää pikaviestin',
	'ACL_U_IGNOREFLOOD'	=> 'Voi ohittaa viestin lähetyksen aikarajan',
	'ACL_U_HIDEONLINE'	=> 'Voi piilottaa paikallaolonsa',
	'ACL_U_VIEWONLINE'	=> 'Voi nähdä kaikki paikallaolijat',
	'ACL_U_SEARCH'		=> 'Voi käyttää hakutoimintoa',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Näkee alueen',
	'ACL_F_READ'		=> 'Voi lukea alueen',
	'ACL_F_SEARCH'		=> 'Voi etsiä keskustelualueita',
	'ACL_F_SUBSCRIBE'	=> 'Voi seurata aluetta',
	'ACL_F_PRINT'		=> 'Voi tulostaa viestiketjuja',
	'ACL_F_EMAIL'		=> 'Voi lähettää viestiketjun sähköpostilla',
	'ACL_F_BUMP'		=> 'Voi tönäistä viestiketjua',
	'ACL_F_USER_LOCK'	=> 'Voi lukita omat viestiketjunsa',
	'ACL_F_DOWNLOAD'	=> 'Voi ladata tiedostoja',
	'ACL_F_REPORT'		=> 'Voi ilmoittaa viestejä',

	'ACL_F_POST'		=> 'Voi kirjoittaa alueelle',
	'ACL_F_STICKY'		=> 'Voi kirjoittaa pysyvän tiedotteen',
	'ACL_F_ANNOUNCE'	=> 'Voi kirjoittaa tiedotteen',
	'ACL_F_REPLY'		=> 'Voi vastata viestiin',
	'ACL_F_EDIT'		=> 'Voi muokata viestejään',
	'ACL_F_DELETE'		=> 'Voi poistaa omia viestejään',
	'ACL_F_SOFTDELETE'	=> 'Voi piilottaa oman viestin<br /><em>Tukihenkilöt, jotka hyväksyvät viestejä, voi palauttaa viestin.</em>',
	'ACL_F_IGNOREFLOOD' => 'Voi ohittaa aikarajat',
	'ACL_F_POSTCOUNT'	=> 'Nosta viestilaskurin lukemaa<br /><em>Huomioi, että tämä asetus vaikuttaa vain uusiin viesteihin.</em>',
	'ACL_F_NOAPPROVE'	=> 'Voi lähettää viestin ilman hyväksyntää',

	'ACL_F_ATTACH'		=> 'Voi lisätä liitetiedoston',
	'ACL_F_ICONS'		=> 'Voi käyttää viestille/viestiketjulle kuvaketta',
	'ACL_F_BBCODE'		=> 'Voi käyttää BBCodea',
	'ACL_F_FLASH'		=> 'Voi käyttää [flash]-BBCode-tagia',
	'ACL_F_IMG'			=> 'Voi käyttää [img]-BBCode-tagia',
	'ACL_F_SIGS'		=> 'Voi käyttää allekirjoitusta',
	'ACL_F_SMILIES'		=> 'Voi käyttää hymiöitä',

	'ACL_F_POLL'		=> 'Voi luoda äänestyksiä',
	'ACL_F_VOTE'		=> 'Voi äänestää',
	'ACL_F_VOTECHG'		=> 'Voi muuttaa antamaansa ääntä',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Voi muokata viestejä',
	'ACL_M_DELETE'		=> 'Voi poistaa viestejä',
	'ACL_M_SOFTDELETE'	=> 'Voi piilottaa viestejä<br /><em>Tukihenkilöt, jotka hyväksyvät viestejä, voi palauttaa viestin.</em>',
	'ACL_M_APPROVE'		=> 'Voi hyväksyä viestejä',
	'ACL_M_REPORT'		=> 'Voi sulkea ja poistaa ilmoitettuja viestejä',
	'ACL_M_CHGPOSTER'	=> 'Voi muuttaa viestin lähettäjää',

	'ACL_M_MOVE'	=> 'Voi siirtää viestiketjuja',
	'ACL_M_LOCK'	=> 'Voi lukita viestiketjuja',
	'ACL_M_SPLIT'	=> 'Voi jakaa viestiketjuja',
	'ACL_M_MERGE'	=> 'Voi yhdistää viestiketjuja',

	'ACL_M_INFO'	=> 'Voi katsoa viestin tietoja',
	'ACL_M_WARN'	=> 'Voi antaa varoituksen<br />', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Voi hallita porttikieltoja<br />', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Voi muuttaa keskustelufoorumin asetuksia',
	'ACL_A_SERVER'		=> 'Voi muuttaa palvelimen/kommunikoinnin asetuksia',
	'ACL_A_JABBER'		=> 'Voi muuttaa Jabber-asetuksia',
	'ACL_A_PHPINFO'		=> 'Voi katsoa PHP-asetuksia',

	'ACL_A_FORUM'		=> 'Voi muokata keskustelualueita',
	'ACL_A_FORUMADD'	=> 'Voi lisätä uusia alueita',
	'ACL_A_FORUMDEL'	=> 'Voi poistaa alueita',
	'ACL_A_PRUNE'		=> 'Voi siivota alueita',

	'ACL_A_ICONS'		=> 'Voi muuttaa viestien/viestiketjun kuvakkeita ja hymiöitä',
	'ACL_A_WORDS'		=> 'Voi muokata sanojen sensurointia',
	'ACL_A_BBCODE'		=> 'Voi määritellä BBCode-tageja',
	'ACL_A_ATTACH'		=> 'Voi muuttaa liitetiedostoihin liittyviä asetuksia',

	'ACL_A_USER'		=> 'Voi hallita käyttäjiä<br /><em>Tähän kuuluu myös käyttäjien käyttäjäagentin näkeminen paikalla olevien käyttäjien listassa.</em>',
	'ACL_A_USERDEL'		=> 'Voi poistaa/siivota käyttäjiä',
	'ACL_A_GROUP'		=> 'Voi hallita ryhmiä',
	'ACL_A_GROUPADD'	=> 'Voi lisätä uusia ryhmiä',
	'ACL_A_GROUPDEL'	=> 'Voi poistaa ryhmiä',
	'ACL_A_RANKS'		=> 'Voi hallita arvonimeä',
	'ACL_A_PROFILE'		=> 'Voi muokata mukautettuja profiilikenttiä',
	'ACL_A_NAMES'		=> 'Voi hallita kiellettyjä nimiä',
	'ACL_A_BAN'			=> 'Voi hallita porttikieltoja',

	'ACL_A_VIEWAUTH'	=> 'Voi katsoa oikeuksien maskeja',
	'ACL_A_AUTHGROUPS'	=> 'Voi muuttaa käyttäjäryhmän oikeuksia',
	'ACL_A_AUTHUSERS'	=> 'Voi muuttaa käyttäjien oikeuksia',
	'ACL_A_FAUTH'		=> 'Voi muuttaa alueen oikeuksia',
	'ACL_A_MAUTH'		=> 'Voi muuttaa valvojan asetuksia',
	'ACL_A_AAUTH'		=> 'Voi muuttaa ylläpitäjän asetuksia',
	'ACL_A_UAUTH'		=> 'Voi muuttaa käyttäjän oikeuksia',
	'ACL_A_ROLES'		=> 'Voi hallita rooleja',
	'ACL_A_SWITCHPERM'	=> 'Voi käyttää toisten oikeuksia',

	'ACL_A_STYLES'		=> 'Voi hallita tyylejä',
	'ACL_A_EXTENSIONS'	=> 'Voi muuttaa laajennuksia',
	'ACL_A_VIEWLOGS'	=> 'Voi katsoa lokitietoja',
	'ACL_A_CLEARLOGS'	=> 'Voi tyhjentää lokit',
	'ACL_A_MODULES'		=> 'Voi hallita moduuleita',
	'ACL_A_LANGUAGE'	=> 'Voi hallita kielipaketteja',
	'ACL_A_EMAIL'		=> 'Voi lähettää joukkosähköpostia',
	'ACL_A_BOTS'		=> 'Voi hallita botteja',
	'ACL_A_REASONS'		=> 'Voi hallita ilmoituksia/hylkäyksen syitä',
	'ACL_A_BACKUP'		=> 'Voi ottaa varmuuskopion tietokannasta/palauttaa tietokannan varmuuskopiosta',
	'ACL_A_SEARCH'		=> 'Voi hallita hakukoneita ja asetuksia',
));
