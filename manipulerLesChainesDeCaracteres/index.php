<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //phpinfo();

    $chaine = "Ceci est une chaine de caractères";

    //Afficher 1 caractère de la chaine (le 4eme ici)
    //echo $chaine[3];

    //Modifier un caractère de la chaine
    //$chaine[0] = "F";
   //echo $chaine;

    //extraire une partie de la chaine (ici il part de 0 et me donne 4 caractères soit ici Ceci)
    //var_dump(substr($chaine, 0, 4)) ;

    // en partant de la fin
    //var_dump(substr($chaine, -10));

    //remplacer une partie de la chaine attention au majuscule  str_ireplace lui ne prend pas en compte les majuscules
    $chaine = str_replace('Ceci', 'Cela', $chaine);
    //var_dump($chaine);

    //Nouveau avec php 8
    //verifie si il contient le mot (true ou false)
    //var_dump(str_contains($chaine, 'chat'));

    //verifie si la chaine de caractère commence par ....
    //var_dump(str_starts_with($chaine, 'Ce'));
    
    //verifie si la chaine de caractère fini par...
    var_dump(str_ends_with($chaine, 'res' ));

    //cf doc pour les chaines de caractères https://www.php.net/manual/fr/function.substr.php

    ?>
</body>
</html>