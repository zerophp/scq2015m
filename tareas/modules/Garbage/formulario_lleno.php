<?php

include ('../../vendor/acl/Core/src/Core/Forms/RenderForm.php');

$formDefinition = include ('../Application/src/Application/Forms/UserForm.php');

//obtengo la id de la fila en
$id = $_GET['id'];
//obtengo el archivo de texto 
$fileData = file_get_contents('users.txt');
$fileLines = explode("\n", $fileData);

$fieldsLine = explode(",", $fileLines[$id]);   #get the user, and split it by ',' into a array



echo "<pre>";
print_r($fieldsLine);
echo "</pre>";


$data = array();    #initialize the data as a array
$userFieldsIndex = 0;
foreach ($formDefinition as $fieldName => $fieldAttributes) {
//    echo "<BR> Componiendo dato en posición ".$userFieldsIndex.", campo ".$fieldName; LDC
    $valuesField = $fieldsLine[$userFieldsIndex];
    $data[$fieldName] = $valuesField;
    $userFieldsIndex = $userFieldsIndex + 1;
}


echo "<pre>data: ";
print_r($data);
echo "</pre>";



//var_dump($data); LDC
$data['id'] = $id;
echo(renderForm($formDefinition, 'doUpdate.php', 'post', $data));
