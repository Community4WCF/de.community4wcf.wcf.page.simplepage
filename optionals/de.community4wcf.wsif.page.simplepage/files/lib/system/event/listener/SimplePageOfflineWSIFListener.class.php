<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the simple page in offline mode.
 * 
 * @svn			$Id: SimplePageOfflineWSIFListener.class.php 1605 2010-08-29 16:52:02Z TobiasH87 $
 * @package		de.community4wcf.wsif.page.simplepage
 */
 
class SimplePageOfflineWSIFListener implements EventListener {
	/**
	 * Show page in offline mode
	 * 
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_OFFLINE_WSIF && OFFLINE) {
			WSIFCore::$availablePagesDuringOfflineMode['page'][] = 'SimplePage';
		}
	}
}
?>