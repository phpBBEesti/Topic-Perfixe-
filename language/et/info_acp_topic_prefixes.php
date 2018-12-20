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
	'ACP_TOPIC_PREFIXES'	=> 'Teemade kategooriad',
	'ACP_MANAGE_PREFIXES'	=> 'Halda kategooriaid',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>Lisa uus teema kategooria</strong><br />» %1$s foorumis: %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>Kustuta teema kategooria</strong><br />» %1$s foorumis: %2$s',
));
