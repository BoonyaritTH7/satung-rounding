<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Satung\SatungRounding;

echo SatungRounding::Round('99.99');