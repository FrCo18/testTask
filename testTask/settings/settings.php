<?php
    function findElement($arrayAssoc, $elementArray, $i, $exeptionName){
        if($i<count($elementArray)){
            foreach($arrayAssoc as $key=>$value){
                if($elementArray[$i]==$key){
                    $i++;
                    if($i==count($elementArray)){
                        return $value;
                    }
                    else{
                        return findElement($arrayAssoc[$key], $elementArray, $i, $exeptionName);
                    }
                }
            }

    }
    return $exeptionName;
}

    function config($element, $exeptionName="undefined"){
        require_once "config.php";

          if(isset($config[$element])){
              return $config[$element];
          }
          elseif(mb_strpos($element,'.')!==false){
              $Element = $element;
              $element = explode('.', $element);
              $i=0;
              return findElement($config, $element, $i, $exeptionName);
          }
          else{
            return $exeptionName;
          }
        
    }
