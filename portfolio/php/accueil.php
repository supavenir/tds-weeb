<?php
$data=yaml_parse_file('data/accueil.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>ACCUEIL</h1>";
foreach($data as $accueil){
    echo "<div>";
    echo $accueil["nom"]. "<br />" ;
    echo $accueil['prenom']. "<br />";
    echo $accueil["age"]. "<br />";
    echo $accueil["information"]. "<br />";
    echo "</div>";
echo '<img class="img" src="image/moi.png">';
}