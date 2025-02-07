<?php
$title = "Les tableaux";


$paragraphe = "Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés. Ce type est optimisé pour différentes utilisations ; il peut être considéré comme un tableau, une liste, une table de hachage, un dictionnaire, une collection, une pile, une file d'attente et probablement plus. On peut avoir, comme valeur d'un tableau, d'autres tableaux, multidimensionnels ou non."; 

require_once"inc/header.inc.php";

?>
<!-- fin header -->
<!-- html -->
<main class="container px-5 border">
    <div class="row">
    <h2 class="text-center my-5"> 1 - Déclaration des tableaux</h2>
<div class="col-sm-12 col-md-5 mt-5">
    <h3 class="text-primary text-center">Méthode 1</h3>
    <p>La première façon pour déclarer un tableau est en utilisant la fonction <span>array()</span>: <br>
<code>
    $tableau = array('valeur 1 ', 'valeur 2','valeur 3','valeur 4' );
</code>
</p>
</div>
<div class="col-sm-12 col-md-5 mt-5">
    <h3 class="text-primary text-center">Méthode 2</h3>
    <p>La deuxième façon pour déclarer un tableau est en utilisant la syntaxe courte les [] <span>[]</span>: <br>
<code>
    $tableau = ['valeur 1 ', 'valeur 2','valeur 3','valeur 4' ];
</code>
</p>
</div>
    </div>
    <div class="row">
        <h2 class="text-center my-5">2 - Afficher les elements d'un tableau</h2>
        <div class="col-sm-12">
            <ul>
                <li>
                    Pour afficher une valeur du tableau, on écrit son indice entre une paire de [] après le nom du tableau.
                    <?php
                    //Déclaration d'un tableau
                    $liste = array('Omar','Andrea','Alexandre','Fayçal');
                    //echo $liste; //erreur de type Array to string conversion car on ne peut pas afficher directement un tableau 
                    echo '<pre>';
                    var_dump($liste); //affiche le contenu du tableau avec les types
                    echo '<pre>';
                    //on entoure le var_dump avec des balises pre pour garder un format libre
                    /*
                    - Le var_dump renvoie toutes les informations sur ce qui se trouve dans telles ou telle variable.
                    - Il donne un premier lieu le type de variable et si c'est un tableau, le nombre d'elements contenu 
                    - Les elements avec leurs types et leurs longeurs
                    Cette fonction de débug sera utilisera pour vérifier ou récupérer les informations dans une variable
                    */
                    ?>
                    <li>
                    <?php
                    $liste2 = ['Andrei','Islem','Ouarda','Mamadou'];
                    echo '<pre>';
                    var_dump($liste); //affiche le contenu du tableau avec les types
                    echo '<pre>';
                    ?>
                    </li>
                </li>
                <li>
                    <!-- Afficher "Bonjour Islem" depuis votre php grace à un tableau crée -->
                     <?php
                     echo"<p class='alert alert-success w-25'>Bonjour $liste2[1]</p>"
                     ?>
                </li>
            </ul>
        </div>
    </div>




</main>
<!-- début php pour le footer -->
<?php

require_once"inc/footer.inc.php";


 ?>