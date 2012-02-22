<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');
 
/**
 * Shows the simple page as default page.
 * 
 * @svn			$Id: SimplePageAsC4WDefaultPageLocationListener.class.php 1615 2010-08-30 10:59:11Z TobiasH87 $
 * @package		de.community4wcf.c4w.page.simplepage
 * @author		WoltLab Community , (adapted for simple page by) TobiasH
 * @copyright	2010 WoltLab Community
 * @license		LGPL <http://www.gnu.org/licenses/lgpl.html>
 */
 
class SimplePageAsC4WDefaultPageLocationListener implements EventListener {
	/**
	 * Overrides default page location if empty
	 * 
	 * @return	void
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_STARTPAGE_C4W && $eventObj->session->getUser()->getPermission('user.managepages.canViewSimplePage') && !SIMPLEPAGE_ENABLE_STARTPAGE) {
			// code taken vom RequestHandler::handle()
			if (!empty($_GET['page']) || !empty($_POST['page'])) {
				return;
			}
			else if (!empty($_GET['form']) || !empty($_POST['form'])) {
				return;
			}
			else if (!empty($_GET['action']) || !empty($_POST['action'])) {
				return;
			}
			else {
				HeaderUtil::redirect('index.php?page=SimplePage', false);
			}
		}
	}
}
?>