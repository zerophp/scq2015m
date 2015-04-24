<?php
echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

foreach($_GET as $key => $value)
{
	$id = $value;
	echo $id;
}
?>

<form method ="POST" action="borrar.php">
Estas segutro que queires borrar el usuario: ?

<input name="borrar" value="<?php foreach($_GET as $key => $value){	$id = $value;	echo $id;}?>" type ="submit"/>
<input name="borrar" value="NO" type ="submit"/>



</form>