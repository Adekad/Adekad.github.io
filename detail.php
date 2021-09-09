<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Orientation', 'elimson', 'adekoule18');

}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query("SELECT * FROM Etablissement WHERE NomEtab='". $_POST['search'] ."'" );

while ($donnees = $reponse->fetch())
{
echo $donnees['Description'] . '<br />';
echo $donnees['CodEtab'] . '<br />';
}
$reponse->closeCursor();

//echo $_POST["search"];

?>