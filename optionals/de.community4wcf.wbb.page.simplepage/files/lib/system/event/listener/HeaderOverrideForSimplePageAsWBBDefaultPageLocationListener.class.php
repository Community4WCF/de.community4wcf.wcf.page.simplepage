<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Overrides link inside page header with link to simple page.
 * 
 * @svn			$Id: HeaderOverrideForSimplePageAsWBBDefaultPageLocationListener.class.php 1613 2010-08-29 18:20:41Z TobiasH87 $
 * @package		de.community4wcf.wbb.page.simplepage
 * @author		WoltLab Community , (adapted for simple page by) TobiasH
 * @copyright	2010 WoltLab Community
 * @license		LGPL <http://www.gnu.org/licenses/lgpl.html>
 */
 
class HeaderOverrideForSimplePageAsWBBDefaultPageLocationListener implements EventListener {
	/**
	 * Overrides link inside page header
	 * 
	 * @return	void
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_STARTPAGE_WBB_LOGO && WCF::getUser()->getPermission('user.managepages.canViewSimplePage')) {
			// due to dependencies there is no need to verify anything
			// so we can simply set our desired location
			WCF::getTpl()->assign('customPageLocation', 'index.php?page=SimplePage');
		}
	}
}
?>