<?php
/**
 * App sass compiler
 */
include_once  "../../vendor/leafo/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;
$scss = new Compiler();
$scss->setImportPaths("../sass/");
$scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
$output = $scss->compile("@import 'styles.scss'");
echo $output;
echo file_put_contents("../css/style.css",$output);