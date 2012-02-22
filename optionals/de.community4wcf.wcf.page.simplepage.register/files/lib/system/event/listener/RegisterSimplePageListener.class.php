<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the simple page before registration.
 * 
 * @svn			$Id: SimplePagePage.class.php 1579 2010-08-26 18:44:01Z TobiasH87 $
 * @package		de.community4wcf.wcf.page.simplepage.register
 */

class RegisterSimplePageListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_REGISTER && WCF::getUser()->getPermission('user.managepages.canViewSimplePage')) {
			// Overwrite the last lines of the RegisterPage.class
			switch ($eventObj->action) {
				case '':
					if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_REGISTER && WCF::getUser()->getPermission('user.managepages.canViewSimplePage')) {
						require_once(WCF_DIR.'lib/page/RegisterSimplePagePage.class.php');
						new RegisterSimplePagePage();
						break;
					}
				default:
					require_once(WCF_DIR.'lib/form/RegisterForm.class.php');
					new RegisterForm();
			}
			exit;
		}
	}
}
?>