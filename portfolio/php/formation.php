<?php
$data=yaml_parse_file('data/formation.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>FORMATION</h1>";
foreach($data as $formation){
    echo "<div>";
    echo $formation["année"]. "<br />";
    echo $formation["diplome"]. "<br />"; 
    echo $formation['option']."<br />";
    echo $formation["etablissement"]. " à ".$formation["lieu"]."<br />";
    echo "</div>";

}
echo '<img class="img" src="image/education.png">';