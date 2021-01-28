<?php

$tableau = [ 0 => ["Ardoise","Chloé","18","Anor", "passions"=> ["Jeux vidéos","animaux","dessins"]],
             1 => ["Ardoise","Audrey","18","Anor", "passions"=> ["Jeux vidéos","animaux","dessins"]],
             2 => ["Rondeaux","Coralie","18","Fourmies", "passions"=> ["judo","animaux","jeux de scoiétés"]],
             3 => ["Cuvelier","Camille","18","Hirson", "passions"=> ["Jeux vidéos","batterie","dessins", "manga"]],
             4 => ["Prissette","Lily","19","Fourmies", "passions"=> ["Jeux vidéos","piano","musique", "manga"]],
             5 => ["Lengrand","Noëlan","18","Fourmies", "passions"=> ["Jeux vidéos","animaux"]],
             6 => ["Lengrand","Corygan","19","Fourmies", "passions"=> ["Jeux vidéos","manga","musique"]],
             7 => ["Brotonne","Lou","18","Féron", "passions"=> ["Jeux vidéos","animaux","manga"]]
];


if (!isset($_GET["index"])) {
    header('Location: index.php?error=1');
}


echo "<a href='index.php'> Précédent </a>";

$index = intval($_GET['index']);

if ($index < 0){
    $index = 0;
}

foreach ($tableau[$index] as $index => $eleves){
    if ($index === "passions"){
        echo "<p>Passions : </p>";
        foreach ($eleves as $passions){
            echo "<p>$passions, </p>";
        }
    }
    else{
        echo "<p>$eleves</p>";
    }
}
?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informations sur les élèves</title>
    <link rel="stylesheet" href="informations.css">
</head>
<body>


</body>
</html>

