<?php

/**
 *	Descriptive extension which will allow model admin descriptions to be pulled into the CMS template.
 *	@author Nathan Glasl <nathan@symbiote.com.au>
 */

class LeftAndMainDescriptionExtension extends Extension {

	/**
	 *	Add the model admin description against each CMS menu tab.
	 */

	public function getUpdatedMainMenu() {

		$tabs = $this->owner->MainMenu();
		foreach($tabs as $tab) {
			$class = $tab->MenuItem->controller;
			if(class_exists($class) && is_subclass_of($class, 'ModelAdmin')) {
				$tab->setField('Description', Config::inst()->get($class, 'menu_description'));
			}
		}

		// Allow extension customisation.

		$this->owner->extend('updateMainMenu', $tabs);
		return $tabs;
	}

}
