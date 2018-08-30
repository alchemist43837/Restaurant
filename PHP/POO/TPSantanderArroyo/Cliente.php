<?php
class Cliente{
    protected $numeroCliente;
    protected $apellido;
    protected $dni;
    protected $cuit;
    public function __construct(int $numeroCliente, string $apellido, int $dni, int $cuit){
        $this->numeroCliente = $numeroCliente;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->cuit = $cuit;
    }
}
