<?php

/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 24/11/15
 * Time: 11:03 م
 */
abstract class IOController
{
    static function compileInput(){
        if (PHP_SAPI != "cli") {
            exit;
        }
        if(count($argv[0]) == 0){
            return "Help";
        }
        else{
            switch(strtolower($argv[1])){
                case "create:class":
                    return 1;
                    break;
                default:
                    return 0;
                    break;
            }
        }
    }
}