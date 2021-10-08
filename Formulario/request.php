<?php

    $nombres = $_REQUEST['nombrek'];
	$correo = $_REQUEST['correok'];
    $clave = $_REQUEST['clave'];

    class persona
{
  private $nombres;
  private $correo;
  private $clave;
  
  public function __construct($nombres, $correo, $clave)
  {
    $this->nombres = $nombres;
    $this->correo = $correo;
    $this->clave= $clave;
  }
 
  public function obtenerNombres()
  {
    return $this->nombres;
  }
 
  public function obtenerCorreo()
  {
    return $this->correo;
  }
 
  public function obtenerClave()
  {
    return $this->clave;
  }
}

$objetoPersona= new persona($nombres,$correo,$clave);
 echo "Su nombre es:";
 echo "<br>";
 echo $objetoPersona->obtenerNombres(); 
 echo "<hr>";

echo "<br>";
echo "Su correo es:";
echo "<br>";
echo $objetoPersona->obtenerCorreo();
echo "<hr>";

echo "<br>";
echo "Su clave creada es:";
echo "<br>";
echo $objetoPersona->obtenerClave(); 



?>