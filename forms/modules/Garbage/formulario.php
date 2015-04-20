<?php

include('../../vendor/acl/Core/src/Core/Forms/RenderForm.php');
include('../../vendor/acl/Core/src/Core/Forms/FilterForm.php');
// include('ValidateForm.php');

$userForm = include ('../Application/src/Application/Forms/UserForm.php');

$html = RenderForm($userForm, 'procesar.php');


echo $html;

