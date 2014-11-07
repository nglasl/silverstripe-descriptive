<?php

/**
 *	Handles any user customisation.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class AdminwesomeService {

	/**
	 *	Apply all Adminwesome required extensions.
	 */

	public static function apply_requirements() {

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

					// Apply any possible background change.

					if(strtolower($style) === 'background') {
						$background = '#cms-menu-adminwesome:before,' . PHP_EOL . '#cms-menu-adminwesome:after {' . PHP_EOL;
						$background .= "\tborder-top: 10px solid {$value} !important;" . PHP_EOL . '}' . PHP_EOL . PHP_EOL;
						$background .= '#cms-menu-adminwesome:before {' . PHP_EOL;
						$background .= "\tborder-top: 13px solid !important;" . PHP_EOL;
						$background .= "\tborder-top-color: inherit !important;" . PHP_EOL . '}' . PHP_EOL;
					}
				}
			}
			$CSS .= '}' . PHP_EOL . PHP_EOL . $background;

			// Write the custom styles.

			file_put_contents($path, $CSS);
			chmod($path, 0664);
			LeftAndMain::require_css($URL);
		}
	}

}
