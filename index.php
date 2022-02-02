<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();
echo "<div>" . $perso->getNom() . "</div>";

echo"<br><br>";


$perso2 = new personnage();
$perso2->setNom("Jane");
echo "<div>" . $perso2->getNom() . "</div>";


$perso->walkRight();
$perso->walkLeft();
$perso->walkTop();
$perso->walkBottom();
