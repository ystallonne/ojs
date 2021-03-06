<?php

/**
 * @defgroup pages_management Management Pages
 */

/**
 * @file pages/management/index.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_management
 * @brief Handle requests for settings pages.
 *
 */

switch ($op) {
	//
	// Settings
	//
	case 'index':
	case 'settings':
		import('pages.management.SettingsHandler');
		define('HANDLER_CLASS', 'SettingsHandler');
		break;
	case 'tools':
	case 'importexport':
		import('lib.pkp.pages.management.ToolsHandler');
		define('HANDLER_CLASS', 'ToolsHandler');
		break;
}

?>
