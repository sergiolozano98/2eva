<?php
/**
 *
 */
 //definimos la clase dbNBA
class dbNBA
{
  //aqui cremaos la variable conexion y otra que sea error
  private $conexion;
  private $error=false;
  //cremaos el construct que es la conexion hacia el mysqli  y le pasamos el usuario y la base de datos
  function __construct() {
    $this->conexion= new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }
  //Aqui definimos las distintas funciones que son consultas a la base de datos
  public function mostraEquipos(){
    return $equipos=$this->conexion->query("SELECT * FROM equipos");
  }
  //aqui definimos que lo que le pasemos por mostraTemporada()=$temporada y en el where se lo pasamos
  public function mostraTemporada($temporada){
    return $temp=$this->conexion->query("SELECT * FROM partidos where temporada=".$temporada);
  }
  public function mostraConfEste(){
    return $ConEste=$this->conexion->query("SELECT * FROM equipos where Conferencia='East'");
  }
}









 ?>
