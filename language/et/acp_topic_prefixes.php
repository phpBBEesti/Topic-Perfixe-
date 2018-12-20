<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
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

$lang = array_merge($lang, array(
	'TOPIC_PREFIXES'			=> 'Teema kategooriad',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'Sellelt lehelt saate hallata teemade kategooriaid foorumitele.',

	'TOPIC_PREFIX_TAG'			=> 'Kategooria Tag',
	'TOPIC_PREFIX_ENABLED'		=> 'Kategooria lubatud',
	'TOPIC_PREFIXES_EMPTY'		=> 'Selle foorumi jaoks kategooriad puuduvad.',

	'CREATE_TOPIC_PREFIX'			=> 'Lisa uus teema kategooria',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'Kas olete kindel, et soovite kustutada teema kategooria?',
	'TOPIC_PREFIX_DELETED'			=> 'Teema kategooria kustutatud.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'Klikki lubatuks',
		1	=> 'Klikki keelatuks',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'Teema kategooria moodul ei saanud tabelis lukustust.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'Soovitud teema kategooriat ei eksisteeri.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'The requested topic prefix has no parent.',
));
