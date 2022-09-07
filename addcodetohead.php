<?php
/**
 * @package    Plugin plg_dupi_addcodetohead
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
		
		foreach ($addCodes as $addCode)
		{
			$this->app->getDocument()->addCustomTag($addCode);
		}
	}
	
	protected function addTagManager()
	{
		// Get container id from plugin setting
		$containerId = $this->params->get('containerid');
		
		$tagManager = "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','" . $containerId . "');</script>";

		return $tagManager;
	}
}
