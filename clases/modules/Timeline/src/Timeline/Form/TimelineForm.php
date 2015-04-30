<?php

// include (APPLICATION_PATH."/src/Application/Model/db/getTransports.php");
// include (VENDOR_PATH."/acl/Core/src/Core/Forms/readFields.php");

// $transports = getTransports($config);

return array(
    'idtimeline'=>array(
        'type'=>'hidden',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('required'=>true)
    ),
    'startdate'=>array(
        'label' => 'Start Date',
        'type' => 'date',
        'validators' => array ('date'=>true,'required'=>true)
    ),
    'enddate'=>array(
        'label' => 'End Date',
        'type' => 'date',
        'validators' => array ('date'=>true)
    ),
    'headline'=>array(
        'label' => 'Headline',
        'type'=>'text',        
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,'required'=>true
        )
    ),
    'text'=>array(
        'label' => 'Text',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'media'=>array(
        'label' => 'Media',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'mediacredit'=>array(
        'label' => 'Media Credit',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'mediacaption'=>array(
        'label' => 'Media Caption',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'mediathumbnail'=>array(
        'label' => 'Thumbnail',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'type'=>array(
        'label' => 'Type',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'tag'=>array(
        'label' => 'Tag',
        'type'=>'text',
        'filters'=> array('Stringtrim', 'StripTags', 'Escape'),
        'validators' => array ('lenghtMax'=>200,
            'lenghtMin'=>1,
        )
    ),
    'submit'=>array(
        'label'=>'Enviar',
        'type'=>'submit'
    ),
);