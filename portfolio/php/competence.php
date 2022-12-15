<?php
$data=yaml_parse_file('data/competence.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>COMPETENCE</h1>";
foreach($data as $competence){
    echo "<div>";
    echo $competence["type"]. "<br />";  
    echo $competence["niveau"]. "<br />";
    echo "</div>";
}
?>
