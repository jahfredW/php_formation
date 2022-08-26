<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <div>
            Cette ligne a été écrite entièrement en HTML ok ok .<br />
            <?php $myvar = true; ?>
            <?php if ($myvar): ?>
                <p>la condition est vraie</p>
            <?php else: ?>
                <p>la condition est fausse</p>
            <?php endif; ?>
            
            </div>
        
            <h2>utilisation d'une condition ternaire</h2>
            <?php
            $isAdulte = false;
            $age = 15;
             if ($age >= 15) {
                $isAdulte = false;
             }
             echo $isAdulte;
            ?>

            <?php
                $name = "fredator";
                $condition_test = false;
                $validator = true;

                if (! $condition_test) {
                echo 'salut ' . $name . ' j\'espère que tout va bien'; 
                }

                else {
                    echo ' utilisateur inconnu';
                }

                $name = ( ! $validator) ? "bilo": "fred";
                echo $name;

            ?>
    </body>
</html>
