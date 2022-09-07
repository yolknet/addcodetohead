<?php
/**
 * @package    Plugin plg_dupi_addcodetohead
 *
 * @author     Dutch Pilot <info@dutchpilot.com>
 * @copyright  (C) 2022 Dutch Pilot <https://dutchpilot.com>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Plg_dupi_addcodetohead script file.
 *
 * @package   plg_dupi_addcodetohead
 * @since     1.0.0
 */
class plgSystemAddcodetoheadInstallerScript extends InstallerScript
{
	public function __construct()
	{
		// Define the minumum versions to be supported.
		$this->minimumJoomla = '4.0';
		$this->minimumPhp    = '7.0';
	}
}
