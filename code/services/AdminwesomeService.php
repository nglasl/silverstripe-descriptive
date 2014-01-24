<?php

/**
 *	Handles any user customisation.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class AdminwesomeService {

	/**
	 *	Apply all Adminwesome required extensions.
	 */

	public static function apply_required_extensions() {

		Object::add_extension('LeftAndMain', 'LeftAndMainDescriptionExtension');
		LeftAndMain::require_javascript(ADMINWESOME_PATH . '/javascript/adminwesome.js');
		LeftAndMain::require_css(ADMINWESOME_PATH . '/css/adminwesome.css');
	}

	/**
	 *	Apply custom styles to the absolute description element.
	 *
	 *	@parameter <{DESCRIPTION_CSS}> array(string)
	 */

	public static function customise_css($styles) {

		if(is_array($styles)) {

			// Determine the path to write against.

			$URL = ADMINWESOME_PATH . '/css/custom.css';
			$path = Director::baseFolder() . "/{$URL}";

			// Collate each custom style where appropriate.

			$CSS = '#cms-menu-adminwesome {' . PHP_EOL;
			foreach($styles as $style => $value) {
				if(!is_numeric($style)) {
					$CSS .= "\t{$style}: {$value} !important;" . PHP_EOL;
				}
			}
			$CSS .= '}' . PHP_EOL;

			// Write the custom styles.

			file_put_contents($path, $CSS);
			LeftAndMain::require_css($URL);
		}
	}

}
