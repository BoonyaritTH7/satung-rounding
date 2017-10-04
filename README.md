# Satung rounding

Calculate usable price 
 - 100.24 >> 100.25
 - 0.78 >> 0.75
 - 99.99 >> 100.00
 - 24.33 >> 24.50
 - 18.07 >> 18.00
 
# Requirements
* PHP >= 5.3.0

# Installation

```psh
composer require boonyaritth7/satung-rounding
```
# Usage

```php
use Satung\SatungRounding;
echo SatungRounding::round("99.99");
```
You will get 100.00
