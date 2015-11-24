<?php
    require_once "CodeGenerator.php";
    $className = $argv[1];
    $attributes[] = array();
    $attributes[0] = "firstName";
    $attributes[1] = "lastName";
    $attributes[2] = "ageName";

    $myfile = fopen($className.".php", "w") or die("Unable to open file!");
    $txt = CodeGenerator::createClass($className, $attributes);
    fwrite($myfile, $txt);
    fclose($myfile);
?>