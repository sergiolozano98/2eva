<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
    <?php
    //incluimos la dbNBA y creamos el objeto nba
    include 'dbNBA.php';
    $nba=new dbNBA();
    //si nba error es falso es que hemos entrado en la base de datos si es true no entra
      if ($nba->geterror()==false) {
        //echo "Funciona";

        ?>
        <h1>Base de datos NBA</h1>
        <table>
          <tr>
           <td><h3><em><a href="confeste.php">Conferencia Este</a></em></h3></td>
           <td><h3><em><a href="#">Conferencia Oeste</a></em></h3></td>
           <td><h3><em><a href="temporada.php">Temporada 99/00</a></em></h3></td>
        </tr>
        </table>
        <table border=1px>
          <tr>
            <th>Nombre Equipo</th>
            <th>Ciudad</th>
            <th>Conferencia</th>
            <th>Division</th>
          </tr>
    <?php
    //llamamos a la funcion mostrar equipos de la base de datos

    $Equipos = $nba->mostraEquipos();
    //con el while vamos recorriendo y mostrando por pantalla los datos de los equipos
    while ($listaequipos = $Equipos->fetch_assoc()) {

      echo "<tr>";
      echo "<td>";
      echo $listaequipos["Nombre"];
      echo "</td>";
      echo "<td>";
      echo $listaequipos["Ciudad"];
      echo "</td>";
      echo "<td>";
      echo $listaequipos["Conferencia"];
      echo "</td>";
      echo "<td>";
      echo $listaequipos["Division"];
      echo "</td>";
      echo "</tr>";

    }
    echo "</table>";

}

     ?>



  </body>
</html>
