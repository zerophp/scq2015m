<?php
/**
 *
 * Validate data by form definition
 * Available validators: inArray, required, lenghtMax, lenghtMin, extension
 * @param $formDefinition array
 * @param $post array
 * @return true | $data array
 * 
 */
function ValidateForm($formDefinition, $post)
{
    $error= array();
    foreach($post as $key =>$value){
        $validators =  $formDefinition[$key]['validators'];
        foreach ($validators as $key2 =>$value2 ){
           switch ($key2){
               case "lenghtMax":
                   if($value < $value2){
                       $error[$key]=array("Text too long");
                   }
                   break;          
               case "lenghtMin":
                   if($value >= $value2){
                       $error[$key]=array("Text too short");
                   }
                   break;
               case "required":
                   if($value == false){                       
                     $error[$key]=array("Field required");
                   }
               case "inArray":
                   $result= false;
                   foreach ($post[$key]['options'] as $keyArray => $dataArray){
                        if($dataArray == $post){
                            $result=true;
                   }
                        if($result == false){                            
                            array_push($error);
                        }
                   }
                   break;
               case "numeric":
                   if(is_numeric($value)){
                   }
                   else{
                    $error=array($key => "wrong number format");
                   }
                   break;
           }
        }
        if(count($error)!=0){
            $post['error']=$error;
            return $post;
        }
        return true;
    }

}
