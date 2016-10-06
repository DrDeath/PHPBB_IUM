<?php
/**
 *
 * @package phpBB Extension - Advanced Inactive User Manager
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if ( !defined('IN_PHPBB') )
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'INCLUDE_USER_TOPICS'				=>	'Παρακάτω μερικοί σύνδεσμοι σε θέματα που ήσασταν ενεργοί.%s',
	'INCLUDE_FORUM_TOPICS'				=>	'Παρακάτω μερικοί σύνδεσμοι στα πιο ενεργά θέματα. %s',
	'FOLOW_TO_DELETE'					=>	'Πατήστε στο σύνδεσμο για να διαγράψετε τον λογαριασμό σας.%s',
));
