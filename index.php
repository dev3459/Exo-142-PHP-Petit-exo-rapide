
<?php

echo "Texte de mon choix". "<br>";

$string = "texte dans variable";
echo $string;

$array = ["Salut","Bonjour","Coucou","Hey"];

echo $array[2];
$count = count($array);
for($i = 0 ; $i < $count ; $i++){
    echo $array[$i];
}
?>

<html lang="fr">
    <ul>
        <?php
        foreach($array as $item){
            echo $item;
        }
        ?>
    </ul>
</html>