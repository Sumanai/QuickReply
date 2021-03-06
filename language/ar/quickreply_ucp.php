<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2016 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'QR_ENABLE_AJAX_PAGINATION' => 'عدم تحديث الرد السريع عند تحريك الموضوع ',
	'QR_ENABLE_SCROLL'          => 'تفعيل التمرير التلقائي عند تحريك الموضوع ',
	'QR_ENABLE_SOFT_SCROLL'     => 'تفعيل التأثيرات المُتحركة عند تحريك الموضوع بعد إضافة الرد السريع ',
));
