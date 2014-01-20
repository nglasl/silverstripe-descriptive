<?php

/**
 *	Adminwesome extension which allows model admin descriptions to be pulled in from the menu template.
 *	@author Nathan Glasl <nathan@silverstripe.com.au>
 */

class LeftAndMainDescriptionExtension extends Extension {

	/**
	 *	Add a model admin description to each CMS menu tab.
	 */

	public function updatedMainMenu() {

		$tabs = $this->owner->MainMenu();
		foreach($tabs as $tab) {
			if(class_exists($tab->MenuItem->controller) && is_subclass_of($tab->MenuItem->controller, 'ModelAdmin')) {
				$tab->setField('Description', Config::inst()->get($tab->MenuItem->controller, 'menu_description'));
			}
		}
		$this->owner->extend('updateMainMenu', $tabs);
		return $tabs;
	}
}
