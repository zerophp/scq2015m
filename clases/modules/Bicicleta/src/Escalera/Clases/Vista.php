<?php


class Vista
{
    /**
     * Direccion de la vista
     * @var string frente|abajo|arriba
     */
    public $direccion = 'frente';
    
    public function mirar($direccion)
    {
        $this->direccion = $direccion;
    }
}