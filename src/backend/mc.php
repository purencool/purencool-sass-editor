<?php

include_once  "../../vendor/leafo/scssphp/scss.inc.php";

use Leafo\ScssPhp\Compiler;

$scss = new Compiler();

echo $scss->compile('
  $color: #abc;
  div { color: lighten($color, 20%); }
');