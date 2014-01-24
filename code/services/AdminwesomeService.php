<?php

class AdminwesomeService {

	public static function customise_css($styles) {

		if(is_array($styles)) {
			$path = ADMINWESOME_PATH . '/css/custom.css';
			$file = Director::baseFolder() . '/' . $path;
			$css = '#cms-menu-adminwesome {' . PHP_EOL;
			foreach($styles as $style => $value) {
				$css .= "\t{$style}: {$value} !important;" . PHP_EOL;
			}
			$css .= '}' . PHP_EOL;
			file_put_contents($file, $css);
			LeftAndMain::require_css($path);
		}
	}

}
