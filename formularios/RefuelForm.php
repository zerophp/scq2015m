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
                'validators'=>array('inArray'=>true,
                                    'required'=>true                                    
                                    )
                                
     ),
    'fuelPump'=>array(
        'label'=>'Surtidor Nº',
        'type'=>'radio',
        'options'=>array('1'=>1,
            '2' =>2,
            '3'=>3
        ),
        'default_option'=>'1',
        'validators'=>array('inArray'=>true,
            'required'=>true
        )    
    ),
    'fuelFill'=>array(
        'label'=>'fuelFill',
        'type'=>'radio',
        'options'=>array('Deposito lleno'=>99,
            '10€' =>10,
            '20€' =>20,
            '30€' =>30,
            '40€' =>40,
            '50€' =>50,
            '60€' =>60,
            '70€' =>70,
            '80€' =>80,            
            '90€' =>90,
        ),
        'default_option'=>'Deposito lleno',
        'validators'=>array('inArray'=>true,
            'required'=>false
        )
    ),
    'amount'=>array(
                'label'=>'Importe',
                'type'=>'text',
                'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
                'validators' => array ('numeric'=>"2,2",
                                       'required'=>true                                        
                                    )
    ),
    'quantity'=>array(
        'label'=>'Litro',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('numeric'=>"2,3",
            'required'=>true
        )
    ),
);


$post = array ('stationName'=>'Estion Urgel',
                'fuelType'=>'Sin plomo 95',
                'fuelPump'=>1,
                'fuelFill'=>99,
                'amount'=>99.99,
                'quantity'=>80                
);

$error = array ('stationName'=>'Estion Urgel',
                'fuelType'=>'Sin plomo 95',
                'fuelPump'=>1,
                'fuelFill'=>99,
                'amount'=>99.99,
                'quantity'=>80,
                'error'=>array(
                    'fuelType'=>'No es email, No es valido',
                    'amount'=>'No es una opcion valida',
                )
);










