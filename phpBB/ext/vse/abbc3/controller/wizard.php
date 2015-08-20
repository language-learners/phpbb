<?php
/**
*
* Advanced BBCode Box
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\abbc3\controller;

/**
* ABBC3 BBCode Wizard class
*/
class wizard
{
	/** @var string The default BBvideo site */
	const BBVIDEO_DEFAULT = 'youtube.com';

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $ext_root_path;

	/** @var string */
	protected $bbvideo_width;

	/** @var string */
	protected $bbvideo_height;

	/**
	 * Constructor
	 *
	 * @param \phpbb\controller\helper $helper         Controller helper object
	 * @param \phpbb\request\request   $request        Request object
	 * @param \phpbb\template\template $template       Template object
	 * @param \phpbb\user              $user           User object
	 * @param string                   $root_path      phpBB root path
	 * @param string                   $ext_root_path  Extension root path
	 * @param string                   $bbvideo_width  Default width of bbvideo
	 * @param string                   $bbvideo_height Default height of bbvideo
	 * @access public
	 */
	public function __construct(\phpbb\controller\helper $helper, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user, $root_path, $ext_root_path, $bbvideo_width, $bbvideo_height)
	{
		$this->helper = $helper;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->ext_root_path = $ext_root_path;
		$this->bbvideo_width = $bbvideo_width;
		$this->bbvideo_height = $bbvideo_height;
	}

	/**
	 * BBCode wizard controller accessed with the URL /wizard/bbcode/{mode}
	 * (where {mode} is a placeholder for a string of the bbcode tag name)
	 * intended to be accessed via AJAX only
	 *
	 * @param string $mode Mode taken from the URL
	 * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	 * @throws \phpbb\exception\http_exception An http exception
	 * @access public
	 */
	public function bbcode_wizard($mode)
	{
		// Only allow AJAX requests
		if ($this->request->is_ajax())
		{
			switch ($mode)
			{
				case 'bbvideo':

					$this->generate_bbvideo_wizard();

					return $this->helper->render('abbc3_bbvideo_wizard.html');

				break;

				case 'url':

					return $this->helper->render('abbc3_url_wizard.html');

				break;
			}
		}

		throw new \phpbb\exception\http_exception(404, 'GENERAL_ERROR');
	}

	/**
	 * Set template variables for the BBvideo wizard
	 *
	 * @return null
	 * @access protected
	 */
	protected function generate_bbvideo_wizard()
	{
		// Construct BBvideo allowed site select options
		$bbvideo_sites_array = $this->load_json_data('bbvideo.json');
		foreach ($bbvideo_sites_array as $site => $example)
		{
			$this->template->assign_block_vars('bbvideo_sites', array(
				'VALUE'			=> $example,
				'LABEL'			=> $site,
				'S_SELECTED'	=> $site == self::BBVIDEO_DEFAULT,
			));
		}

		// Construct BBvideo size preset select options
		$bbvideo_size_presets_array = array(
			'560,315',
			'640,360',
			'853,480',
			'1280,720',
		);
		foreach ($bbvideo_size_presets_array as $preset)
		{
			$this->template->assign_block_vars('bbvideo_sizes', array(
				'VALUE'			=> $preset,
				'LABEL'			=> str_replace(',', ' ' . $this->user->lang('ABBC3_BBVIDEO_SEPARATOR') . ' ', $preset),
			));
		}

		$this->template->assign_vars(array(
			'ABBC3_BBVIDEO_LINK_EX'	=> (isset($bbvideo_sites_array[self::BBVIDEO_DEFAULT])) ? $bbvideo_sites_array[self::BBVIDEO_DEFAULT] : '',
			'ABBC3_BBVIDEO_HEIGHT'	=> $this->bbvideo_height,
			'ABBC3_BBVIDEO_WIDTH'	=> $this->bbvideo_width,
		));
	}

	/**
	 * Return decoded JSON data from a JSON file (stored in assets/)
	 *
	 * @param string $json_file The name of the JSON file to get
	 * @return array JSON data
	 * @throws \phpbb\exception\runtime_exception
	 * @access protected
	 */
	protected function load_json_data($json_file)
	{
		$json_file = $this->root_path . $this->ext_root_path . 'assets/' . $json_file;

		if (!file_exists($json_file))
		{
			throw new \phpbb\exception\runtime_exception('FILE_NOT_FOUND', array($json_file));
		}
		else
		{
			if (!($file_contents = file_get_contents($json_file)))
			{
				throw new \phpbb\exception\runtime_exception('FILE_CONTENT_ERR', array($json_file));
			}

			if (($json_data = json_decode($file_contents, true)) === null)
			{
				throw new \phpbb\exception\runtime_exception('FILE_JSON_DECODE_ERR', array($json_file));
			}

			return $json_data;
		}
	}
}
