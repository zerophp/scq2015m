<?php

/**
 *
 * Validate data by form definition
 * Available validators: inArray, required, lenghtMax, lenghtMin, extension
 * @param $formDefinition array
 * @param $filterData array
 * @return true | $data array
 * 
 */


function ValidateForm($formDefinition, $filterData) 
{
    $error = array();
    
//     echo "<pre>form def: ";
//     print_r($formDefinition);
//     echo "</pre>";
    
//     echo "<pre>filter : ";
//     print_r($filterData);
//     echo "</pre>";
    
    
    foreach ($filterData as $fieldName => $fieldValue) 
    {
        
        $fieldDefinition = $formDefinition[$fieldName];
        if(isset($fieldDefinition['validators']))
        {            
            $validatorsField = $fieldDefinition['validators'];
            foreach ($validatorsField as $validatorName => $validatorValue) 
            {
                switch ($validatorName) {
                    case "lenghtMax":
                        if (strlen($fieldValue) > $validatorValue) {
                            $error[$fieldName][$validatorName] = "Text too long";
                        }
                        break;
                    case "lenghtMin":
                        if (strlen($fieldValue) < $validatorValue) {
                            $error[$fieldName][$validatorName] = "Text too short";
                        }
                        break;
                    case "required":
                        //if ($fieldValue == false) {
                        echo "<pre>";
                        print_r($fieldValue);
                        echo "</pre>";
                        if ($fieldValue == '') 
                        {    
                            $error[$fieldName][$validatorName]= "Field required";
                        }
                        break;
                    case "inArray":
                        $result = false;
                        foreach ($fieldDefinition['options'] as $optionName => $optionValue) {
                            if ($optionValue == $fieldValue) {
                                $result = true;
                                break;
                            }
                        }
                        if ($result == false) {
                            $error[$fieldName][$validatorName]= "Option not found";
                        }
                        break;
                    case "numeric":
                        if (!is_numeric($fieldValue)) {
                            $error[$fieldName][$validatorName]= "Not a number";
                        }
                        else if(checkFormatNumber){
                            numeric($fieldValue,$validatorValue);
                        }
                        break;
                }
            }
        }
    }
    if (count($error) != 0) {
        $filterData['error'] = $error;
        return $filterData;
    }
    return true;
}

function numeric($field, $restriction)
{
    if (is_numeric($field)) {
        $response = "";
        $rest = explode('.', $restriction);
         
        if ($field * pow(10, $rest['1']) > round($field * pow(10, $rest['1'])))
            $response = 'Have many decimals ';
        if ($field > pow(10, $rest['0']) - 1)
            $response .= "Is too big";
    } else {
        $response = 'Is not a number';
    }
    return $response;
}



