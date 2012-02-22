<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the simple page in offline mode.
 * 
 * @svn			$Id: SimplePageOfflineGWSPListener.class.php 1604 2010-08-29 16:33:15Z TobiasH87 $
 * @package		de.community4wcf.gwsp.page.simplepage
 */
 
class SimplePageOfflineGWSPListener implements EventListener {
	/**
	 * Show page in offline mode
	 * 
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_OFFLINE_GWSP && OFFLINE) {
			GWSPCore::$availablePagesDuringOfflineMode['page'][] = 'SimplePage';
		}
	}
}
?>