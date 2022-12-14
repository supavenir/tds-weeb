<?php
$data=yaml_parse_file('data/contact.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1> CONTACT</h1>";
foreach($data as $contact){
    echo "<div>";
    echo $contact["github"]. "<br />";
    echo $contact["linkedin"]. "<br />";
    echo "</div>";
}
/*echo "<div id='photo'>";
echo "<img src='image/'>";
echo "<img src='image/'>";
echo "</div>";*/