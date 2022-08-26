<h1>Boucler</h1>
<?php

$array = array('fred', 'GRUWE', '30/09/1983', 'actif');

// boucler avec un range 
for ($index = 0; $index < count($array); $index++) {
    //echo $array[$index];
}

$compteur = 0;

while ($compteur < count($array)){
    //echo $array[$compteur];
    $compteur += 1;
}

$array_asso = [
    [
        'prenom' => $array[0],
        'nom' => $array[1],
        'date_of_birth' => $array[2],
        'status' => $array[3],
    ],
    [
        'prenom' => $array[0],
        'nom' => $array[1],
        'date_of_birth' => $array[2],
        'status' => $array[3],
    ]
];

foreach( $array_asso as $data => $dataValue){
    echo  'clé :'. $data . 'valeur :' . $dataValue['prenom'] . PHP_EOL;
}
/*
// recherche de clé 
if (array_key_exists('prenom', $array_asso)) {
    echo 'la clé "prénom" existe ';
}

else {
    print_r($array_asso);
}
*/

// recherche de la valeur 

foreach($array_asso as $array1) {
    if(in_array($array[0], $array1)){
        echo 'la valeur existe';
        break;
    }
    else {
        print_r($array_asso);
    }
}


// trouver la position d'un élément  : array search -> renvoie la position 

$pos = array_search('fred', $array);
print_r($pos);
?>





<!-- super bout de code qui montre la puissance de php -->

<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
    <div class="container">
        <h1>Affichage des recettes</h1>
        <!-- Boucle sur les recettes -->
        <?php foreach($recipes as $recipe) : ?>
            <!-- si la clé existe et a pour valeur "vrai", on affiche -->
            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true): ?>

                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo $recipe['author']; ?></i>
                </article>

            <?php endif; ?>
        <?php endforeach ?>
    </div>   
</body>
</html>
