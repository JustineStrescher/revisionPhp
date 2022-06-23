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

    /* On écrit Hello world */
 echo "<h1>Hello World !! </h1>";

 /* Je defini ma variable */
 $namePerson = "Justine";

 /* L'injection de variable fonctionne uniquement avec les " ", pas avec '' */
 echo "<p>Bonjour $namePerson, comment ça va ?</p>";
 
 //Les types de variables
 //Entiers (integer)
 $number = 35;
 echo "<p>$namePerson à $number </p>";

// Décimaux (float)
$number2 = 35.6;

//Chaine de caractères (string)
$string = "Ceci est un texte";

//booléen (boolean)
$boolean = true; //false
echo $boolean;

//connaitre le contenu et le type d'une variable
var_dump($number2);
var_dump($boolean);

 ?>
    
</body>
</html>