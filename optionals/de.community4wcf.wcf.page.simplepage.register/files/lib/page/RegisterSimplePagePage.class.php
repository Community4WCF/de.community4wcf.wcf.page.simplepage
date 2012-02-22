<?php
// wcf imports
require_once(WCF_DIR.'lib/page/AbstractPage.class.php');
require_once(WCF_DIR.'lib/data/message/bbcode/MessageParser.class.php');

/**
 * Shows the simple page before registration.
 * 
 * @svn			$Id: RegisterSimplePagePage.class.php 1578 2010-08-26 18:43:31Z TobiasH87 $
 * @package		de.community4wcf.wcf.page.simplepage.register
 */
 
class RegisterSimplePagePage extends AbstractPage {
	public $templateName = 'registersimplepagePage';

	/**
	 * @see Page::assignVariables()
	 */
	public function assignVariables() {
		parent::assignVariables();
		
		WCF::getTPL()->assign(array(
		'simplepage' => MessageParser::getInstance()->parse(SIMPLEPAGE_TEXT, SIMPLEPAGE_ENABLE_SMILEY, SIMPLEPAGE_ENABLE_HTML, SIMPLEPAGE_ENABLE_BBCODES),
		'allowSpidersToIndexThisPage' => 0));
	}
	
	/**
	 * @see Page::show()
	 */
	public function show() {	
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