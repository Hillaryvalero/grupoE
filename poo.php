<?php
class Aprendiz
{
    //atributos
    private $nombre;
    private $programa;
    private $ficha;
    //metodos
    function saludar()
    {
        echo "Estamos Retomando conceptos de la POO en la ficha  $this->ficha <br>";
    }

    //METODOS SETTER
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setPrograma($programa)
    {
        $this->programa = $programa;
    }
    function setFicha($ficha)
    {
        $this->ficha = $ficha;
    }

    //METODOS GETTER

    function getNombre()
    {
        return $this->nombre;
    }
    function getPrograma()
    {
        return $this->programa;
    }
    function getFicha()
    {
        return $this->ficha;
    }
}



//$galleta = new Aprendiz();
//$galleta->setNombre("galletita");
//echo '...'.$galleta->nombre;//nombre tendría que ser público

$ob1 = new Aprendiz();
$ob1->setNombre("Lary");
$ob1->setPrograma('ADSI');
$ob1->setFicha("2142345");

echo 'Me llamo ' . $ob1->getNombre() . 'estudio...' . $ob1->getPrograma();
echo '<br>';
$ob1->saludar();
