<a href="?tableau">tableau XS</a><br>
<a href="?tableau">tableau S</a><br>
<a href="?tableau">tableau M</a>

<html>
<body>
<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : le nombre de lignes
// -------------------------------------------------------
echo '<table>';
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
         echo '<td>';
          // ------------------------------------------
          // AFFICHAGE ligne $i, colonne $j
         echo $affichage;
          // ------------------------------------------
         echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
</body>
</html> 