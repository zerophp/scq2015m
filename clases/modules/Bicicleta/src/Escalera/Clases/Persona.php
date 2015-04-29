<?php


class Persona
{
    /**
     * Estado de la persona con respecto a una escalera
     * @var string abajo|arriba
     */
    public $estado = 'abajo'; 
    
    /**
     * Altura de la perona en escalones
     * @var int
     */
    public $altura = 0;
    
    /**
     * Orientacion con respecto a la escalera
     * @var strint frente|lado|espada
     */
    public $orientacion = 'frente';
     
}