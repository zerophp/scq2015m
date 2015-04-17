<?php

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

$userForm = include ('UserForm.php');
include('ValidateForm.php');

// include('FilterForm.php');

// $filterData = FilterForm($userForm, $_POST);

$valid = ValidateForm($userForm, $_POST);

// echo "<pre> Filter: ";
// print_r($filterData);
// echo "</pre>";


echo "<pre>Valid: ";
print_r($valid);
echo "</pre>";