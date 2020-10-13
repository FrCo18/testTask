<?php
class Settings
{
    public static function findElement($arrayAssoc, $elementArray, $i, $exeptionName){
        if($i<count($elementArray)){
            foreach($arrayAssoc as $key=>$value){
                if($elementArray[$i]==$key){
                    $i++;
                    if($i==count($elementArray)){
                        return $value;
                    }
                    else{
                        return Settings::findElement($arrayAssoc[$key], $elementArray, $i, $exeptionName);
                    }
                }
            }

    }
    return $exeptionName;
}

    public static function config($element, $exeptionName="undefined"){
        require_once "config.php";

          if(isset($config[$element])){
              return $config[$element];
          }
          elseif(mb_strpos($element,'.')!==false){
              $Element = $element;
              $element = explode('.', $element);
              $i=0;
              return Settings::findElement($config, $element, $i, $exeptionName);
          }
          else{
            return $exeptionName;
          }
        
    }
}
