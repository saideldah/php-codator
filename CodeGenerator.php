<?php

/**
 * Created by PhpStorm.
 * User: Saeed_ElDah
 * Date: 24/11/2015
 * Time: 1:42 PM
 */
class CodeGenerator
{
    public  static function createClass($classPrefix,$className, $extendsFrom = null, $privateAttributes= array(), $publicAttributes = array()){
        $Class="class $className{ \n";
        for($i=0; $i<count($privateAttributes); $i++)
        {
            $Class.="private $".$privateAttributes[$i]."; \n";
        }
        $Class.="public function __construct(";
        for($i=0; $i<count($privateAttributes); $i++)
        {
            $Class.="$".$privateAttributes[$i];
            if($i<count($privateAttributes)-1){
                $Class.=",";
            }
        }
        $Class.="){\n";

        for($i=0; $i<count($privateAttributes); $i++)
        {
            $Class.="$"."this->Set".$privateAttributes[$i]."($".$privateAttributes[$i].");\n";
        }
        $Class.="}\n";
        for($i=0; $i<count($privateAttributes); $i++)
        {
            $Class.="public function Set".$privateAttributes[$i]."($".$privateAttributes[$i]."){ \n".
                "$"."this->".$privateAttributes[$i]."=$".$privateAttributes[$i].";\n".
                "}\n";

            $Class.="public function Get".$privateAttributes[$i]."(){ \n".
                "return $"."this->".$privateAttributes[$i].";\n".
                "}\n";
        }
        $Class.="}\n";
        return $Class;
    }
}
