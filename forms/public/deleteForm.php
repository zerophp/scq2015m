<?php 
echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

?>


<form method ="POST" action="borrar.php">
Estas segutro que queires borar el usuario: ?

<input name="borrar" value="SI" type ="submit"/>
<input name="borrar" value="NO" type ="submit"/>



</form>