<table border=1>
<tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
</tr>
<tr>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
</tr>
<tr>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
</tr>

</table>


<?php

$filas = 4;
$columnas = 5;

echo "<table border=1>";
for ($i=0; $i<=$filas; $i++)
{
    echo "<tr>";
    for($f=0; $f<=$columnas;$f++)
    {
        if($i==0)
        {
            echo "<td>".$f."</td>";
        }
        else if($f==0)
            echo "<td>".$i."</td>";
        else
            echo "<td>".$i*$f."</td>";
    }    
    echo "</tr>";
}

echo "</table>";








