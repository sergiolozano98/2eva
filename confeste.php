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
           <td><h3><em><a href="temporada.php">Temporada 99/00</a></em></h3></td>
        </tr>
        <table border=1px>
          <tr>
            <th>Nombre Equipo</th>
            <th>Ciudad</th>
            <th>Division</th>
          </tr>
        <?php

        $east = $nba->mostraConfEste();
        echo "<h3>Conferencia Este</h3>";
        while ($Confe = $east->fetch_assoc()) {

          echo "<tr>";
          echo "<td>";
          echo $Confe["Nombre"];
          echo "</td>";
          echo "<td>";
          echo $Confe["Ciudad"];
          echo "</td>";
          echo "<td>";
          echo $Confe["Division"];
          echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
      }


           ?>
  </body>
</html>
