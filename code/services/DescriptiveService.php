<?php

/**
 *	Handles any user customisation.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class DescriptiveService {

	/**
	 *	Apply all descriptive required extensions.
	 */

	public static function apply_requirements() {

		LeftAndMain::require_javascript(DESCRIPTIVE_PATH . '/javascript/descriptive.js');
		LeftAndMain::require_css(DESCRIPTIVE_PATH . '/css/descriptive.css');
	}

	/**
	 *	Apply custom styles to the absolute description element.
	 *
	 *	@parameter <{DESCRIPTION_CSS}> array(string)
	 */

	public static function customise_css($styles) {

		if(is_array($styles)) {

			// Determine the path to write against.

			$URL = DESCRIPTIVE_PATH . '/css/custom.css';
			$path = Director::baseFolder() . "/{$URL}";

			// Collate each custom style where appropriate.

			$CSS = '#cms-menu-descriptive {' . PHP_EOL;
			foreach($styles as $style => $value) {
				if(!is_numeric($style)) {
					$CSS .= "\t{$style}: {$value} !important;" . PHP_EOL;

					// Apply any possible background change.

					if(strtolower($style) === 'background') {
						$background = '#cms-menu-descriptive:before,' . PHP_EOL . '#cms-menu-descriptive:after {' . PHP_EOL;
						$background .= "\tborder-top: 10px solid {$value} !important;" . PHP_EOL . '}' . PHP_EOL . PHP_EOL;
						$background .= '#cms-menu-descriptive:before {' . PHP_EOL;
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
