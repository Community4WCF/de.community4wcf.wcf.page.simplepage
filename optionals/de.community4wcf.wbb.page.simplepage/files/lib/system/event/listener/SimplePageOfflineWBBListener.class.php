<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the simple page in offline mode.
 * 
 * @svn			$Id: SimplePageOfflineWBBListener.class.php 1580 2010-08-26 18:53:55Z TobiasH87 $
 * @package		de.community4wcf.wbb.page.simplepage
 */
 
class SimplePageOfflineWBBListener implements EventListener {
	/**
	 * Show page in offline mode
	 * 
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_OFFLINE_WBB && OFFLINE) {
			WBBCore::$availablePagesDuringOfflineMode['page'][] = 'SimplePage';
		}
	}
}
?>