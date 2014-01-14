<?php

class LeftAndMainDescriptionExtension extends Extension {

	public function UpdatedMainMenu() {

		$menu = $this->owner->MainMenu();
		foreach($menu as $m) {
			if(class_exists($m->MenuItem->controller) && is_subclass_of($m->MenuItem->controller, 'ModelAdmin')) {
				$m->setField('Description', Config::inst()->get($m->MenuItem->controller, 'menu_description'));
			}
		}
		return $menu;
	}
}
