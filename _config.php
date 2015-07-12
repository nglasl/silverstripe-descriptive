<?php

/**
 *	The descriptive specific configuration settings.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

if(!defined('DESCRIPTIVE_PATH')) {
	define('DESCRIPTIVE_PATH', rtrim(basename(dirname(__FILE__))));
}
DescriptiveService::apply_requirements();

/**
 *
 *	EXAMPLE: Apply custom styles to the absolute description element.
 *
 *	@parameter <{DESCRIPTION_CSS}> array(string)
 *
 *	DescriptiveService::customise_css(array(
 *		'background' => '#D4D6D8',
 *		'color' => '#304E80'
 *	));
 *
 */
