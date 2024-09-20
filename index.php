<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Créer une liste de 15 nombres;
Créer une condition pour que lorsque le nombre dépasse 200, il s’affiche en rouge et gras;
Afficher chaque nombre dans votre liste par une boucle.-->
    <?php
        $Arrays = [125, 10, 250, 100, 108, 258, 178, 278, 300, 57, 69, 63,  207, 367, 102]
    ?>
    <ul>
        <?php  foreach ($Arrays as $array){
            echo '<li';
            if ($array > 200){
                echo ' class="red-bold" ';
            };
            echo '>' . $array . '</li>';
        }
        ?>
    </ul>
</body>
</html>

