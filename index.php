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


foreach ($tableau as $index => $eleves){
    echo "<a href='informations.php?index=$index'>$eleves[0] $eleves[1]</a><br>";
}

