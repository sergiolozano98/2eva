<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'dbNBA.php';
    $nba=new dbNBA();
      if ($nba->geterror()==false) {
        //echo "Funciona";

        ?>
        <h1>Base de datos NBA</h1>
        <table>
          <tr>
           <td><h3><em><a href="index.php">Indice</a></em></h3></td>
           <td><h3><em><a href="#.php">Conferencia Oeste</a></em></h3></td>
           <td><h3><em><a href="confeste.php">Conferencia Este</a></em></h3></td>
        </tr>
        <table border=1px>
          <tr>
            <th>Nombre Equipo</th>
            <th>Nombre Visitante</th>
            <th>Puntos Local</th>
            <th>Puntos Visitantes</th>
          </tr>
        <?php
        //aqui en temporada le pasamos la temporada que quiere que nos muestre por pantalla
        //en la dbNBA la temporada que le pasamos por mostraTemporada()=$temporada;
        $temporada = $nba->mostrarTemporada("'03/04'");
        echo "<h3>Temporadas</h3>";
        while ($Temp99 = $temporada->fetch_assoc()) {

          echo "<tr>";
          echo "<td>";
          echo $Temp99["equipo_local"];
          echo "</td>";
          echo "<td>";
          echo $Temp99["equipo_visitante"];
          echo "</td>";
          echo "<td>";
          echo $Temp99["puntos_local"];
          echo "</td>";
          echo "<td>";
          echo $Temp99["puntos_visitante"];
          echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
      }


           ?>
  </body>
</html>
