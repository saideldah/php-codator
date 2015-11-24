<?php
require_once "CodeGenerator.php";
require_once "IOController.php";

$className = IOController::compileInput();
echo $className."\n";
//$attributes[] = array();
//$attributes[0] = "firstName";
//$attributes[1] = "lastName";
//$attributes[2] = "ageName";
//$myfile = fopen($className.".php", "w") or die("Unable to open file!");
//$txt = CodeGenerator::createClass($className, $attributes);
//fwrite($myfile, $txt);
//fclose($myfile);
?>