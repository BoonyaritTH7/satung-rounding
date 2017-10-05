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

// Calculate
echo SatungRounding::calculate("99.99"); // You wil get 100
echo SatungRounding::calculate("99.68"); // You wil get 99.75
echo SatungRounding::calculate("99.42"); // You wil get 99.5
echo SatungRounding::calculate("99.32"); // You wil get 99.25
echo SatungRounding::calculate("99.11"); // You wil get 99

// Calculate include vat(%)
echo SatungRounding::calculate("99.99", 7); // You wil get 107
echo SatungRounding::calculate("99.68", 7); // You wil get 106.75
echo SatungRounding::calculate("99.42", 7); // You wil get 106.5
echo SatungRounding::calculate("99.32", 7); // You wil get 106.25
echo SatungRounding::calculate("99.11", 7); // You wil get 106

// Calculate include vat(%) and quantity
echo SatungRounding::calculate("99.99", 7, 3); // You wil get 321
echo SatungRounding::calculate("99.68", 7, 3); // You wil get 320.25
echo SatungRounding::calculate("99.42", 7, 3); // You wil get 319.5
echo SatungRounding::calculate("99.32", 7, 3); // You wil get 318.75
echo SatungRounding::calculate("99.11", 7, 3); // You wil get 318
```
