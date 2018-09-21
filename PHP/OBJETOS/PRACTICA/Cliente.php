<?php
  Abstract Class Cliente
  {
      private $nroCliente ;

      function __construct(int $nroCliente){
        $this->nroCliente = $nroCliente;
      }

      public function identificarse($nroCliente){
        return $this->nroCliente;
      }
  }
 ?>
