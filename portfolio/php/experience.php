<?php
$data=yaml_parse_file('../data/experience.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>EXPERIENCE</h1>";
foreach($data as $experience){
    echo "<div>";
    echo $experience["numero"]. "<br />";
    echo $experience["poste"]. "<br />";
    echo $experience["entreprise"]. " à ". $experience['lieu']."<br />";
    echo "De ".$experience["dateDebut"]. " à ".$experience["dateFin"]."<br />";
    echo $experience["descriptif"]. "<br />";
    echo "</div>";
}