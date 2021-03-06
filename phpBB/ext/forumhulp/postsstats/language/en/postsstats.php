<?php
/**
*
* @package PostsStatistics
* @copyright (c) 2014 ForumHulp.com
* @license Proprietary
*
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
	'ACP_POSTSSTATS'	=> 'Posts Statistics',

	'ACP_POSTSSTATS_EXPLAIN'	=> 'Posts Statistics displays an overview of posts and topics on a timeframe. A graph is shown for every page to have a easy view of your statistics.',

	'PPO'		=> 'Post overview',
	'PPU'		=> 'Posts per user',
	'PPT'		=> 'Posts per topics',
	'TPO'		=> 'Topis overview',
	'TPU'		=> 'Topics per user',
	'TPF'		=> 'Topics per forum',
	'TV'		=> 'Topics views',
	'GP'		=> 'Groups posts',
	'PTV'		=> 'Post / Topics',
	'POL'		=> 'Poll overview',

	'USERSTATS'	=> 'User graph',
	'ONLINE'	=> 'Last posts',

	'DO'	=> 'Monthly overview',
	'DOV'	=> 'Daily overview',
	'MO'	=> 'Yearly Overview',
	'MOV'	=> 'Monthly overview',
	'YO'	=> 'Overview',
	'YOV'	=> 'All Years overview',

	//Config
	'MAX_POSTS_PER_USER'			=> 'Max. post per user',
	'MAX_POSTS_PER_USER_EXPLAIN'	=> 'Max. records in view',
	'MAX_POSTS_PER_TOPIC'			=> 'Ma. post per topics',
	'MAX_POSTS_PER_TOPIC_EXPLAIN'	=> 'Max. records in view',
	'MAX_TOPICS_PER_USER'			=> 'Max. topics per user',
	'MAX_TOPICS_PER_USER_EXPLAIN'	=> 'Max. records in view',
	'MAX_TOPICS_PER_FORUM'			=> 'Max topics per forum',
	'MAX_TOPICS_PER_FORUM_EXPLAIN'	=> 'Max. records in view',
	'MAX_TOPICS_VIEWS'				=> 'Max. topics views',
	'MAX_TOPICS_VIEWS_EXPLAIN'		=> 'Max. records in view',
	'MAX_GROUPS_POSTS'				=> 'Max. group posts',
	'MAX_GROUPS_POSTS_EXPLAIN'		=> 'Max. records in view',
	'MAX_ONLINE'					=> 'Max. records in last posts',
	'MAX_ONLINE_EXPLAIN'			=> 'Max. records per page',

	'START_SCREEN'				=> 'Start screen',
	'START_SCREEN_EXPLAIN'		=> 'Choose your startscreen for Board Statistics and if you want to display archive or online.',
));
