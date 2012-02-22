<?php
// wcf imports
require_once(WCF_DIR.'lib/page/AbstractPage.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/MessageParser.class.php');

/**
 * Shows the simple page.
 * 
 * @svn			$Id: SimplePagePage.class.php 1579 2010-08-26 18:44:01Z TobiasH87 $
 * @package		de.community4wcf.wcf.page.simplepage
 */

class SimplePagePage extends AbstractPage {
	// system
	public $templateName = 'simplepagePage';

	/**
	 * @see Page::assignVariables()
	 */
	public function assignVariables() {
		parent::assignVariables();
		
		WCF::getTPL()->assign(array(
		'simplepage' => MessageParser::getInstance()->parse(SIMPLEPAGE_TEXT, SIMPLEPAGE_ENABLE_SMILEY, SIMPLEPAGE_ENABLE_HTML, SIMPLEPAGE_ENABLE_BBCODES),
		'allowSpidersToIndexThisPage' => ALLOW_SPIDER_ON_SIMPLEPAGE));
	}

	/**
	 * @see Page::show()
	 */
	public function show() {
		// set active menu item
		require_once(WCF_DIR.'lib/page/util/menu/PageMenu.class.php');
		PageMenu::setActiveMenuItem('wcf.header.menu.simplepage');
		
		// check permission
		WCF::getUser()->checkPermission('user.managepages.canViewSimplePage');

		// check module options
		if (!MODULE_SIMPLEPAGE) {
			throw new IllegalLinkException();
		}

		parent::show();
	}	
}
?>