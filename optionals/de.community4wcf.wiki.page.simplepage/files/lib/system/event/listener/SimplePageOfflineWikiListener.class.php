<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the simple page in offline mode.
 * 
 * @svn			$Id: SimplePageOfflineWikiListener.class.php 1609 2010-08-29 17:39:13Z TobiasH87 $
 * @package		de.community4wcf.wiki.page.simplepage
 */
 
class SimplePageOfflineWikiListener implements EventListener {
	/**
	 * Show page in offline mode
	 * 
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (MODULE_SIMPLEPAGE && SIMPLEPAGE_ENABLE_OFFLINE_WIKI && OFFLINE) {
			WIKICore::$availablePagesDuringOfflineMode['page'][] = 'SimplePage';
		}
	}
}
?>