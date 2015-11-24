<?php

/**
 * Created by PhpStorm.
 * User: Saeed_ElDah
 * Date: 24/11/2015
 * Time: 1:42 PM
 */
class CodeGenerator
{
    public  static function createClass($classPrefix = null, $className, $extendsFrom = null, $privateAttributes= array(), $publicAttributes = array()){
        if(!is_null($classPrefix)){
            $classTxt = $classPrefix." ";
        }
        $classTxt="class $className{ \n";
        for($i=0; $i<count($privateAttributes); $i++)
        {
            $classTxt.="private $".$privateAttributes[$i]."; \n";
        }
        for($i=0; $i<count($publicAttributes); $i++)
        {
            $classTxt.="public $".$privateAttributes[$i]."; \n";
        }
        $classTxt.="public function __construct(";
//        for($i=0; $i<count($privateAttributes); $i++)
//        {
//            $classTxt.="$".$privateAttributes[$i];
//            if($i<count($privateAttributes)-1){
//                $classTxt.=",";
//            }
//        }
        $classTxt.="){\n";

        for($i=0; $i<count($privateAttributes); $i++)
        {
            $classTxt.="$"."this->Set".$privateAttributes[$i]."($".$privateAttributes[$i].");\n";
        }
        $classTxt.="}\n";
        for($i=0; $i<count($privateAttributes); $i++)
        {
            $classTxt.="public function Set".$privateAttributes[$i]."($".$privateAttributes[$i]."){ \n".
                "$"."this->".$privateAttributes[$i]."=$".$privateAttributes[$i].";\n".
                "}\n";

            $classTxt.="public function Get".$privateAttributes[$i]."(){ \n".
                "return $"."this->".$privateAttributes[$i].";\n".
                "}\n";
        }
        $classTxt.="}\n";
        return $classTxt;
    }
}
