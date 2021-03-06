# [descriptive](https://packagist.org/packages/nglasl/silverstripe-descriptive)

_The current release is **2.1.6**_

> A module for SilverStripe which will allow model admin descriptions to appear on mouse over.

## Requirement

* SilverStripe 3.1 → **3.5**

This module is **no longer supported**.

## Getting Started

* [Place the module under your root project directory.](https://packagist.org/packages/nglasl/silverstripe-descriptive)
* Define your model admin descriptions.
* `/dev/build`

## Overview

### Model Admin Description

Creating a description, either directly or by extension:

```php
private static $menu_description = 'Description';
```

![default](https://raw.githubusercontent.com/nglasl/silverstripe-descriptive/master/images/descriptive-default.png)

### CSS Customisation

Apply custom styles to the absolute description element:

```php
DescriptiveService::customise_css(array(
	'background' => '#D4D6D8',
	'color' => '#304E80'
));
```

![customised](https://raw.githubusercontent.com/nglasl/silverstripe-descriptive/master/images/descriptive-customised.png)

More advanced configuration will need to be implemented outside of this service, such as border manipulation.

## Maintainer Contact

	Nathan Glasl, nathan@symbiote.com.au
