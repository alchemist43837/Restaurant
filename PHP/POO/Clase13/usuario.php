<?php

  class Usuario
  {
    private $nombre;
    private $email;
    private $contrasena;

    public function __construct(string $nombre_usuario,string $email_usuario,string $contrasena_usuario){
      $this->nombre= $nombre_usuario;
      $this->email= $email_usuario;
      $this->contrasena= $contrasena_usuario;
    }
    public function getemail($email){
      return $this->email=$email ;
    }



    public function saludar($name){
      echo "Hola ".$this->nombre;
      echo "<br>";
    }

  }


 ?>
