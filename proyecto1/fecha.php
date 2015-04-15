
HOY ES miercoles, 15 de abril de 2015. Es la semana 16 de un año de 365 días.
<br/>



<?php

$dias = array ('Wednesday'=>'miércoles');
$meses = array ('April'=>'Abril');
$año = array(365,366);

echo date("\H\O\Y \\e\s "). 
            $dias[date('l')].date(", d \d\\e "). 
            $meses[date('F')].
            date(" \d\\e Y. \E\s \l\a \s\\e\\m\a\\n\a W \d\\e 
          \u\\n \a\ñ\o \d\\e ").
            $año[date('L')].date(" \d\i\a\s.");