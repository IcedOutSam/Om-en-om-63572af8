<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thugz mansion</title>
  </head>
  <body>
<table>
  <?php
  for ($tr = 0; $tr <= 8; $tr++) {
      echo "<tr>";
      for ($td = 1; $td <= 9; $td++) {
            $optimusPrime = $tr + $td;
          if ($optimusPrime % 2 == 1) {
                echo "<td class=blokwit height=50px width=50px bgcolor=#FF0000></td>";
          } else {
                echo "<td class=blokzwart height=50px width=50px bgcolor=#000000></td>";
          }
      }
      echo "</tr>";
  }
    ?>
  </table>
  </body>
</html>
