<?php
/**
 * @package    Plugin plg_system_addcodetohead
 *
 * @author     Dutch Pilot <info@dutchpilot.com>
 * @copyright  (C) 2022 Dutch Pilot <https://dutchpilot.com>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class plgSystemAddcodetohead extends CMSPLugin
{
	protected $app;
	
	public function onBeforeCompileHead()
	{
		$addCodes = array();
		$addCodes[] = $this->addTagManager();
		$addCodes[] = $this->addMiscellaneousCode();
		
		// Add codes and scripts to the end of the <head>-tag
		foreach ($addCodes as $addCode)
		{
			$this->app->getDocument()->addCustomTag($addCode);
		}
	}
	
	// Prepare  Google Tag Manager code with container id from the settings in the plugin
	protected function addTagManager()
	{
		// Get container id from plugin setting
		$containerId = $this->params->get('containerid');
		
		if (trim($containerId) != '')
		{
			$tagManager = "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','" . $containerId . "');</script>";
				
			return $tagManager;
		}
	}
	
	// Prepare  code with from the settings in the plugin
	protected function addMiscellaneousCode()
	{
		// Get miscellaneous code from plugin setting
		$code = $this->params->get('misc');
		
		if (trim($code) != '')
		{
			return $code;
		}
	}
}
