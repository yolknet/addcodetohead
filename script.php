<?php
/**
 * @package    Plugin plg_system_addcodetohead
 *
 * @author     Dutch Pilot <info@dutchpilot.com>
 * @copyright  (C) 2022 Dutch Pilot <https://dutchpilot.com>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

/**
 * plg_dupi_addcodetohead script file.
 *
 * @package   plg_system_addcodetohead
 * @since     1.0.0
 */
class plgSystemAddcodetoheadInstallerScript
{
	public function __construct()
	{
		// Define the minimum versions to be supported.
		$this->minimumJoomla = '4.0';
		$this->minimumPhp    = '7.2.5';

		$this->dir = __DIR__;
	}

	public function install()
	{
		Factory::getDbo()->setQuery("UPDATE #__extensions SET enabled = 1 WHERE type = 'plugin' AND folder = 'system' AND element = 'addcodetohead'")->execute();
	}
}
