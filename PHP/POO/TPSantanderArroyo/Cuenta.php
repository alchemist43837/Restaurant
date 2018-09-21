<?php
abstract class Cuenta{
    protected $saldo;
    protected $cliente;
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->saldo = 0;
    }
    public function depositar(int $saldo)
    {
        $this->saldo+=$saldo;
    }
    public function extraer(int $saldo)
    {
        if ($saldo <= $this->saldo) {
            $this->saldo-=$saldo;
            return $saldo;
        }else {
            echo "No cuentas con esa cantidad de dinero";
        }
    }
    public function informarSaldo()
    {
        return $this->saldo;
    }
}
