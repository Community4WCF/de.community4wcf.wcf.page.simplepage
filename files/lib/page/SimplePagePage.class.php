<?php
namespace wcf\page;
use wcf\system\WCF;
use wcf\system\bbcode\MessageParser;

/**
 * Shows the simplepage page.
 * 
 * @author		Tobias H.
 * @copyright	2008-2013 Community4WCF (C4W)
 * @license		CC by-sa <http://creativecommons.org/licenses/by-sa/3.0/>
 * @package		de.community4wcf.wcf.page.simplepage
 * @subpackage	page
 * @category	Community Framework
 */
class SimplePagePage extends AbstractPage {
	const AVAILABLE_DURING_OFFLINE_MODE = false;
	
	/**
	 * @see	wcf\page\AbstractPage::$activeMenuItem
	 */
	public $activeMenuItem = 'wcf.simplePage.menu';
	
	/**
	 * @see	wcf\page\AbstractPage::$neededPermissions
	 */
	#public $neededPermissions = array('user.profile.canViewSimplePage');
	
	/**
	 * @see	wcf\page\AbstractPage::$neededModules
	 */
	#public $neededModules = array('MODULE_SIMPLEPAGE_PAGE');
	
	/**
	 * @see wcf\page\IPage::assignVariables()
	 */
	public function assignVariables() {
		parent::assignVariables();
			
		WCF::getTPL()->assign(array(
			#'simplepage' => MessageParser::getInstance()->setOutputType('text/html'),
			'simplepage' => MessageParser::getInstance()->parse(SIMPLE_PAGE_CONTENT, 1, 0, 1),
			'allowSpidersToIndexThisPage' => true
		));
	}
}
