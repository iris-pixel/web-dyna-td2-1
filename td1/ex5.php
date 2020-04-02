<?php
$title='Exercice n°5 (Itérations+fonctions)';
include "include/header.php";
include "include/fonctions.php";

?>
<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>
<?php
//Récupère les paramètres l et c passés dans l'url
$nbLignes=$_GET["l"]??10;
$nbColonnes=$_GET["c"]??10;

echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
createHtmlTable($nbLignes,$nbColonnes);

include "include/footer.php";
 ?>