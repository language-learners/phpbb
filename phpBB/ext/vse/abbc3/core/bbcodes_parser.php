<?php
/**
*
* Advanced BBCode Box
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\abbc3\core;

/**
* ABBC3 core BBCodes parser class
*/
class bbcodes_parser
{
	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	protected $bbvideo_width;

	/** @var string */
	protected $bbvideo_height;

	/**
	 * Constructor
	 *
	 * @param \phpbb\user $user           User object
	 * @param string      $bbvideo_width  Default width of bbvideo
	 * @param string      $bbvideo_height Default height of bbvideo
	 * @access public
	 */
	public function __construct(\phpbb\user $user, $bbvideo_width, $bbvideo_height)
	{
		$this->user = $user;
		$this->bbvideo_width = $bbvideo_width;
		$this->bbvideo_height = $bbvideo_height;
	}

	/**
	 * Pre-Parser for special custom BBCodes created by ABBC3
	 *
	 * @param string $text The text to parse
	 * @param string $uid  The BBCode UID
	 * @return string The parsed text
	 * @access public
	 */
	public function pre_parse_bbcodes($text, $uid)
	{
		// bbvideo BBCodes (convert from older ABBC3 installations)
		$text = preg_replace_callback('#\[(bbvideo)[\s]?([0-9,]+)?:(' . $uid . ')\]([^[]+)\[/\1:\3\]#is', array($this, 'bbvideo_pass'), $text);

		return $text;
	}

	/**
	 * Post-Parser for special custom BBCodes created by ABBC3
	 *
	 * @param string $text The text to parse
	 * @return string The parsed text
	 * @access public
	 */
	public function post_parse_bbcodes($text)
	{
		// hidden BBCode
		$text = preg_replace_callback('#<!-- ABBC3_BBCODE_HIDDEN -->(.*?)<!-- ABBC3_BBCODE_HIDDEN -->#s', array($this, 'hidden_pass'), $text);

		return $text;
	}

	/**
	 * Convert BBvideo from older ABBC3 posts to the new format
	 *
	 * @param array $matches 1=bbvideo, 2=width,height, 3=uid, 4=url
	 * @return string BBvideo in the correct BBCode format
	 * @access protected
	 */
	protected function bbvideo_pass($matches)
	{
		return (!empty($matches[2])) ? "[bbvideo=$matches[2]:$matches[3]]$matches[4][/bbvideo:$matches[3]]" : "[bbvideo={$this->bbvideo_width},{$this->bbvideo_height}:$matches[3]]$matches[4][/bbvideo:$matches[3]]";
	}

	/**
	 * Convert Hidden BBCode into its final appearance
	 *
	 * @param array $matches
	 * @return string HTML render of hidden bbcode
	 * @access protected
	 */
	protected function hidden_pass($matches)
	{
		if ($this->user->data['user_id'] == ANONYMOUS || $this->user->data['is_bot'])
		{
			$replacements = array(
				$this->user->lang('ABBC3_HIDDEN_ON'),
				$this->user->lang('ABBC3_HIDDEN_EXPLAIN'),
				'hidebox_hidden',
			);
		}
		else
		{
			$replacements = array(
				$this->user->lang('ABBC3_HIDDEN_OFF'),
				$matches[1],
				'hidebox_visible',
			);
		}

		return str_replace(
			array('{HIDDEN_TITLE}', '{HIDDEN_CONTENT}', '{HIDDEN_CLASS}'),
			$replacements,
			'<div class="hidebox {HIDDEN_CLASS}"><div class="hidebox_title {HIDDEN_CLASS}">{HIDDEN_TITLE}</div><div class="{HIDDEN_CLASS}">{HIDDEN_CONTENT}</div></div>'
		);
	}
}
