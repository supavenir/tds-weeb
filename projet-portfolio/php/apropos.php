<?php
$data=yaml_parse_file('data/apropos.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>A PROPOS</h1>";
//print_r($data);
foreach($data as $apropos){
    echo "<div>";
    echo $apropos["info"]. "<br />";
    echo "</div>";

}
