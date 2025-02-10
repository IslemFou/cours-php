<?php

$title = "Les fonctions";
$h1 = "Les fonctions en PHP";
$paragraphe = "";

require_once("inc/header.inc.php");
?>
<main class="container px-5 border border-dark">
    <div class="row">
        <h2 class="mt-5 "> 1- Les fonctions prédéfinies</h2>
        <ul>
               <li> Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le language PHP</li>
          </ul>
          <div class="col-sm-12 mt-5">
          <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des chaînes de carcatères </h3>
          <div class="row">
            <div class="col-sm-12 col-md-6">
            <ul>
                <!-- https://www.php.net/manual/en/function.rtrim.php -->
                <li><span>substr()</span> : permet d'extraire une partie d'une chaine de caractère</li>
                <li><span>strpos()</span>: permet de récuperer la position d'un caractère dans une chaîne de caractère </li>
                <li><span>strlen()</span> : permet de récupérer la taille d'une chaîne de carctére</li>
                <li><span>substr_replace()</span> : permet de remplacer un segment de la chaîne</li>
                <li><span>substr_ireplace()</span>: Version insensible à la casse de str_replace()</li>
                <li><span>str_contains()</span> : permet de vérifier si la chaîne contient un mot particulier</li>
                <li><span>str_starts_with()</span> : permet de vérifier si une chaîne commence par une sous-chaîne donnée</li>
                
            </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <ul>
                <li><span>str_ends_with()</span> : permet de vérifier si une chaîne se termine par une sous-chaîne donnée</li>
                <li><span>trim()</span> : permet de supprimer les espaces avant et après une chaîne de caractère </li>
                <li><span>strtolower()</span> : permet de retourner la chaîne en miniscule</li>
                <li><span>strtoupper()</span> : permet de retourner la chaîne en majuscules</li>
                <li><span>ucfirst()</span> : permet de mettre le premier caractère en majuscule. </li>
                <li><span>lcfirst()</span> : permet de mettre le premier caractère en miniscule. </li>
            </ul>
          </div>
          </div>
          <!-- php -->
            <?php
    $maChaine = "Bonjour J'aime le PHP !!";
    // Je voulais afficher un seul caractère issu de $maChaine
    echo $maChaine[3].'<br>'; // j
    // Modifier un caractère de la chaine
    $maChaine[0] ='B'; // remplacement de b par B
    echo $maChaine.'<br>'; // Bonjour J'aime le PHP !!

    //extraction d'une partie de la chaine de caractère
    $mvlChaine = substr($maChaine, 0, 9);  // ($chaine, index de départ,nbr longeur) : cette fonction prend en paramètre la variable, le point de départ ,  et la longeur souhaité
    echo $mvlChaine.'<br>'; // Bonjour J


echo "<h3>Excercie </h3>";

    // EXcercice
    /* Récupérer un fragment de texte ( de l'indice 0 à l'indice 40, et remplacer la partie enlevée avec ce morceau de code :...<a href="#"> Lire la suite</a>
    */
    $texte = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus illum, sequi harum vitae tempore veritatis? Aliquam saepe quia delectus molestiae aut repudiandae expedita autem, dolorem dolorum cum nesciunt dolor.
    Praesentium eum, molestiae autem quas numquam temporibus et cupiditate corporis quo eos deserunt magni non cum explicabo doloribus, fugiat illum necessitatibus maxime! Similique corporis veniam sunt consequuntur soluta est aliquam?
    Mollitia, sint incidunt est vero, blanditiis, officiis nostrum quisquam maxime rem sed at neque dolor magni ratione. Veniam, obcaecati. Voluptate consequuntur consectetur provident voluptates ex mollitia, saepe odio necessitatibus voluptas?
    Facilis, officia illo accusantium libero quidem laborum inventore, eveniet excepturi nobis neque doloremque itaque expedita voluptatum molestias hic quo facere! Aliquam suscipit deserunt perferendis nesciunt illo earum eaque quo excepturi.";
    // correction
    $segment = substr($texte, 0, 40);
    echo "En utilisant la fonction <strong>substr()</strong> qui affiche : <p>$segment ... <a href='#'>Lire la suite</a></p>"; // Lorem ipsum dolor sit amet, consectetur ... Lire la suite
    // récupérer la position d'une chaine de caractère dans une chaine de caractère avec strpos()
    echo '<strong>strpos()</strong> qui affiche La position de la lettre H dans ma phrase est : '.strpos($maChaine, 'H') . '<br>'; // La position de la lettre H dans ma phrase est : 19
    var_dump($maChaine, 'h'); //string(24) "Bonjour J'aime le PHP !!" string(1) "h" // Affiche le dump des deux elements $maChaine et 'h'
    // Attention la fonction est sensible à la casse, elle fait attention à la casse des lettres
    // ----- Récupérer la taille d'une chaine de caractère"----------- strlen()
    echo '<br> En utilisant la fonction <strong>strlen()</strong> qui affiche la taille de ma chaine de caractère $maChaine est : '.strlen($maChaine);
// ----- Remplacer une partie de la chaine
$maChaine = str_replace('PHP', 'JS', $maChaine); // les paramètres de la fonction : la chaine de caractère à changer, la nouvelle chaine, la variable de la chaine)
echo '<br> En utilisant <strong>str_replace("PHP", "JS", $maChaine)</strong> qui renvoie : '.$maChaine;


            ?>
    </div>
    
</main>


<?php
require_once("inc/footer.inc.php");
?>