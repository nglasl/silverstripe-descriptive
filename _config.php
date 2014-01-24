<?php

/**
 *	Adminwesome specific configuration settings.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

if(!defined('ADMINWESOME_PATH')) {
	define('ADMINWESOME_PATH', rtrim(basename(dirname(__FILE__))));
}
AdminwesomeService::apply_required_extensions();
