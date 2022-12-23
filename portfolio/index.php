<html lang="fr">
    <head>
        <link rel="stylesheet" href="css/style.css" :>
        <title>lherondellevivien</title>
        <link rel="icon" href="image/icon.png">

    </head>

    <header>
        <nav>

            <?php
            $data=yaml_parse_file('data/menu.yml');
            foreach($data AS $label => $onglet){
                echo '<a href="#'.$label.'">'.$onglet.'</a> ';
            }
            
            ?>
        </nav>
    </header>

    <body>
        <main>
            <?php
            $data=yaml_parse_file('data/menu.yml');
            foreach($data as $cle=>$val){
                echo '<section id="'.$cle.'">';
                include("php/".$cle.".php") ;
                echo '</section>';
            
            }
            ?>
        <p>salut</p>
        </main>
    </body>
</html>