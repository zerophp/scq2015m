<?php

include('RenderForm.php');
include('FilterForm.php');
// include('ValidateForm.php');

$userForm = include ('UserForm.php');

$html = RenderForm($userForm, 'procesar.php');


echo $html;

