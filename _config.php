<?php

/**
 *	The adminwesome specific configuration settings.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

if(!defined('ADMINWESOME_PATH')) {
	define('ADMINWESOME_PATH', rtrim(basename(dirname(__FILE__))));
}
AdminwesomeService::apply_required_extensions();

/**
 *
 *	EXAMPLE: Apply custom styles to the absolute description element.
 *
 *	@parameter <{DESCRIPTION_CSS}> array(string)
 *
 *	AdminwesomeService::customise_css(array(
 *		'background' => '#D4D6D8',
 *		'color' => '#304E80'
 *	));
 *
 */
