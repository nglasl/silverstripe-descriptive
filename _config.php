<?php

/**
 *	Adminwesome specific configuration settings.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

if(!defined('ADMINWESOME_PATH')) {
	define('ADMINWESOME_PATH', rtrim(basename(dirname(__FILE__))));
}
Object::add_extension('LeftAndMain', 'LeftAndMainDescriptionExtension');
LeftAndMain::require_css(ADMINWESOME_PATH . '/css/adminwesome.css');
LeftAndMain::require_javascript(ADMINWESOME_PATH . '/javascript/adminwesome.js');
