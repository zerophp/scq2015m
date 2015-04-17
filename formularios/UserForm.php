<?php
return array(
    'id'=>array(
        'type'=>'hidden',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('required'=>true)
    ),
    'name'=>array(
        'label'=>'Nombre',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
            'required'=>true
        )
    ),
    'email'=>array(
        'label'=>'Email',
        'type'=>'email',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
            'required'=>true,
            'email'=>true
        )
    ),
    'password'=>array(
        'label'=>'Contraseña',
        'type'=>'password',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>8,
            'required'=>true            
        )
    ),
    'birthdate'=>array(
        'label'=>'Fecha de nacimiento',
        'type'=>'date',
        'validators' => array ('date'=>true)
    ),
    'description'=>array(
        'label'=>'Descripcion',
        'type'=>'textarea',
        'filters'=> array('Stringtrim',  'Escape')        
    ),
    'gender'=>array(
        'label'=>'Sexo',
        'type'=>'radio',
        'options'=>array('Mujer'=>'mujer',
            'Hombre' =>'hombre',
            'Otro'=>'otro'            
        ),
        'validators'=>array('inArray'=>true,
                            'required'=>true
        )    
    ),
    'transport'=>array(
        'label'=>'Tipo de transporte',
        'type'=>'checkbox',
        'options'=>array('Coche'=>'coche',
                        'Bicicleta' =>'bicycle',
                        'Moto'=>'motorcycle'
        ),
        'validators'=>array('inArray'=>true)
    ),
    'city'=>array(
        'label'=>'Ciudad',
        'type'=>'select',
        'options'=>array('Santiago de Compostela'=>'scq',
            'Vigo' =>'vigo',
            'A Coru�a'=>'aco'
        ),
        'validators'=>array('inArray'=>true)
    ),
    'code'=>array(
        'label'=>'Programas en?',
        'type'=>'selectmultiple',
        'options'=>array('PHP'=>'php',
            'Java' =>'java',
            'C++'=>'c++',
            'Otros'=>'otros',
        ),
        'validators'=>array('inArray'=>true)
    ),
    'submit'=>array(
        'label'=>'Enviar',
        'type'=>'submit'                
    ),
    
    
);