<?php

return array(
    'stationName'=>array(
                'label'=>'Nombre de la estacion',
                'type'=>'text',
                'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
                'validators' => array ('lenghtMax'=>200,
                                       'lenghtMin'=>1,
                                       'required'=>true                                        
                                    )
    ),
    'fuelType'=>array(
                'label'=>'',
                'type'=>'radio',
                'options'=>array('Gasoleo A'=>1.160,
                                 'Gasoleo Plus' =>1.236,
                                 'Sin plomo 95'=>1.269,
                                 'Sin plomo 98'=>1.394
                                ),
                'default_option'=>'Sin plomo 98',
                'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
                'validators'=>array('inArray'=>true,
                                    'required'=>true,
                                    'extension'=>array('jpg', 'png')
                                    )
                                
                )
);

