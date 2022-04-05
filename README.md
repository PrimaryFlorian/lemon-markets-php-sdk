# PHP SDK for Lemon Markets

This Repository contains an inofficial SDK for Lemon Markets.
All current features (as of early April 2022) are supported.

The SDK was only tested in paper mode and is used live at your own risk. Any liability is explicitly excluded.

## Installation

You can install the SDK with the following command.

```
composer ...
```

## Usage

```php
require_once 'vendor/autoload.php';
```

Use the autoloader to load all classes.

```php
use LemonMarketsSDK\LemonMarkets;
$LemonMarkets = new LemonMarkets('API-KEY', 'STATUS')
$LemonMarkets->data->getInstruments();
$LemonMarkets->trading->getAccount();
```

Status Available at the moment:

"paper-" and "live"

When using the paper- status, make sure you include the hyphen.

### Examples

#### Retrieve your Account

```php
<?php
require_once 'vendor/autoload.php';
use LemonMarketsSDK\LemonMarkets;
$LemonMarkets = new LemonMarkets('API-KEY', 'STATUS')
$account = $LemonMarkets->trading->getAccount();
print_r("<pre>");
print_r($account);
print_r("</pre>");
```
