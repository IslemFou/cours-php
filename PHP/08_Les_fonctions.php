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
            <div class="border border-info">
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
                //------- 
                $maChaine = str_ireplace('bonjour', 'Hello',$maChaine);
                echo '<br> En utilisant la fonction <strong>str_ireplace()</strong> qui remplace Bonjour par Hello, $maChaine renvoie :'. $maChaine. '<br>';
                #----- Vérifier si la chaine contient un mot particuliere
                echo 'En utilisant <strong>str_contains($maChaine, \'JS\')</strong> renvoie le nombre de fois : '.str_contains($maChaine, 'JS'); // 1 : La chaine JS existe une seule fois
                echo '<br>';
                var_dump(str_contains($maChaine, 'JS')); // les paramètres : la variable qui contient la chaine et le mot à vérifier. sensible à la casse // Le résultat est un boolean  : true ou false (exsite ou n'exsiste pas)
                echo '<br>';
                #------- Vérifier si la chaine commence
                var_dump(str_starts_with($maChaine, 'Hel')); // true
                echo '<br>';
                # ------ Vérifier si la chaine se termine par
                var_dump(str_ends_with($maChaine, '!')); // true
                echo '<br>';

                #supprimer les espaces inultule au début et à la fin
                $testTrim = "    Je suis une phrase avec des espaces au début et à la fin     ";
                echo 'Au niveau de l\'echo la chaine s\'affiche sans espaces'.$testTrim ;
                echo '<br>';
                echo 'La longeur de la chaine est : '.strlen($testTrim);
                echo '<br>';

                $nouveau = trim($testTrim);
                echo $nouveau;
                echo '<br>';
                echo 'La nouvelle longeur de la chaine (en appliquant le trim) est : '.strlen($nouveau);
                ?>
            </div>
          </div>   
          <div class="col-sm-12 mt-5">
            <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des Tableaux</h3>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <li><span>array_push()</span> : permet d'ajouter plusieurs valeurs à la fin d' un tableau</li>
                        <li class="alert alert-warning">Si on veut ajouter une seule valeur à la fin on utilise la syntaxe : <strong>$tableau[] = valeur_à_ajouter</strong> </li>
                        <li><span>array_unshift</span>: permet d'ajouter une valeur au début d'un tableau</li>
                        <li><span>array_pop</span>: permet de supprimer la dernière valeur d'un tableau</li>
                        <li><span>array_shift</span>: permet de supprimer la première valeur d'un tableau</li>
                        <li><span>unset()</span>: permet de supprimer un élément d'un tableau</li>
                        <li><span>shuffle</span>: permet de mélanger et réorganiser un tableau</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <li><span>array_chunk</span>: permet de déviser un tableau en plusieurs parties et avec un nombre de valeurs à définir</li>
                        <li><span>count() / sizeof()</span> : permet de retourner la taille du tableau passé en paramètre.</li>
                        <li><span>in_array()</span>: permet de vérifier qu'une valeur est présente dans un tableau.</li>
                        <li><span>array_key_exists()</span> : permet de vérifier si une clé existe dans un tableau.</li>
                        <li><span>explode()</span> : permet de transformer une chaîne de caractère en tableau</li>
                        <li><span>implode()</span> : permet de Transformer un tableau en chaîne de caractères.</li>
                        <li><span>array_slice()</span> : permet de récuperer une partie d'un tableau </li>
                    </ul>
                </div>
            
            </div>

            <?php
 #              Les fonctions prédéfinies des tableaux 

                //Création de la fonction vardump pour formater directement l'affichage de nos test
                //en utilisant un paramètre de la fonction
                function vardump($parametre){
                    echo '<pre class="alert alert-info">';
                        var_dump($parametre);
                    echo '</pre>';
                }

                $tableau = ['Rouge', 'Rose', 'Violet'];
                // Affichage du tableau
                echo '<p class="alert alert-success">1. Nous affichons notre tableau</p>';
                vardump($tableau); // usage de la fonction vardump utilisateur

                #ajouter des valeurs à la fin du tableau
                array_push($tableau, 'Vert', 'Noir');
                echo '<p class="alert alert-success">2. usage array_push</p>';
                vardump($tableau);

                #ajouter des valeur au début du tableau
                array_unshift($tableau, 'Gris', 'Jaune');
                echo '<p class="alert alert-success">3. usage array_unshift</p>';
                vardump($tableau);

                #supprimer la derniere valeur du tableau
                $valeurSupprimerFin = array_pop($tableau);
                echo '<p class="alert alert-success">4. usage array_pop</p>';
                vardump($valeurSupprimerFin); //affichage de la valeur supprimer
                vardump($tableau); // affichage du tableau avec suppression de la derniere valeur

                #supprimer la premiere valeur du tableau
                $valeurSupprimerDebut = array_shift($tableau);
                echo '<p class="alert alert-success">5. usage array_shift</p>';
                vardump($valeurSupprimerDebut); //affichage de la valeur supprimer
                vardump($tableau); // affichage du tableau avec suppression de la premiere valeur

                # Mélanger un tableau
                echo '<p class="alert alert-success">6. usage suffle()</p>';
                shuffle($tableau);
                vardump($tableau);

                # Diviser un tableau en plusieurs tableaux
                echo '<p class="alert alert-success">7. Diviser un tableau en plusieurs tableaux : array_chunk</p>';
                $tableau2 = array_chunk($tableau,3,true);
                vardump($tableau2);

                #compter les elements dans un tableau
                echo '<p class="alert alert-success">8. compter les elements dans un tableau avec count() et size()</p>';

                $nbr1 = count($tableau);
                $nbr2 = sizeof($tableau);
                vardump($nbr1); // int (5)
                vardump($nbr2); // int (5)

                # Vérifier une valeur
                echo '<p class="alert alert-success">9.Vérifier une valeur in_array()</p>';
                $result = in_array('Bleu', $tableau);
                vardump($result);

                #vérifier une clé / indice dans un tableau
                echo '<p class="alert alert-success">10.vérifier une clé / indice dans un tableau</p>';
                $result2 = array_key_exists(2, $tableau);
                vardump($result2);

                #union de deux tableaux 
                echo '<p class="alert alert-success">11.Créer un tableau à partir de deux tableaux</p>';
                $couleursFav = ['Beige', 'Bordeaux', 'VertFoncé'];
                vardump($couleursFav);

                echo '<p class="alert alert-warning">un tableau qui reçoit les valeurs l\'union de deux tableaux</p>';
                $all = [...$tableau, ...$couleursFav]; // $all est un tableau qui reçoit les valeurs l'union de deux tableaux 
                vardump($all);

                
                #Créer un tableau à partir de deux tableaux
                echo '<p class="alert alert-warning">un tableau multidimensionnel</p>';
                $all2 = [$tableau,$couleursFav]; // ici all2 a pour deux tableaux index 0 et index 1
                vardump($all2);          
                
                /* ------------- Transformer une chaine de caractère en tableau
                */
                echo '<p class="alert alert-warning">Transformer une chaine de caractère en tableau</p>';
                $maChaine2 = "Je me transforme en tableau";
                $chaineEnTab = explode(' ', $maChaine2); // (le séparateur, la variable tableau)
                vardump($chaineEnTab);
                


                # Transformer un tableau en chaîne de caractère

               $monTab = ['Salut', 'je', 'viens', 'du', 'tableau', '!'];
               $tableauEnChaine = implode(' ', $monTab); // Les paramètres : le caractére de séparation dans la chaîne et la variable du tableau à fusionner 
               echo '<pre>';
               var_dump($tableauEnChaine);
               echo '</pre>';
               echo $tableauEnChaine;

               # Récupérer une partie d'un tableau

               $monArray = [
                    'a' => 100,
                    'b' => 200,
                    'c' => 300,
                    'd' => 'Alexandre',
                    'e' => 'Roger'
               ];

               $nvArray = array_slice($monArray, 1, 3);

               //echo($monArray);

              // echo($nvArray);

               echo '<pre>';
               var_dump($nvArray);
               echo '</pre>';

                ?>
        </div> 
        <div class="col-sm-12 mt-5">
            <h3 class="text-primary text-center mb-5">Les fonctions <span>isset()</span> et <span>empty()</span></h3>
            <ul>
                <li class="alert alert-success">Ces fonctions sont utiles lorsque vous souhaitez effectuer une validation de données.</li>
            </ul>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4 class="text-success text-center">isset()</h4>
                    <ul>
                        <li>La fonction<span> isset()</span> détermine si une variable existe.</li>
                        <li>La fonction vérifie si la variable est définie, et non NULL </li>
                        <li>La fonction retourne true quand la variable testé est définie ou elle ne contient pas la valeur NULL</li>
                    </ul>

                </div>
                <div class="col-sm-12 col-md-6">
                    <h4 class="text-success text-center">empty()</h4>
                    <ul>
                        <li>La fonction <span>empty()</span> vérifie si une variable est vide.</li>
                        <li>La focntion retourne true si la variable testé est égale à :
                            <ul>
                                <li>"" (une chaîne vide)</li>
                                <li>0 (0 en tant qu'entier)</li>
                                <li>"0" (0 en tant que chaîne de caractères)</li>
                                <li>NULL</li>
                                <li>false</li>
                                <li>array() (un tableau vide)</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <!-- php -->
             <?php
             $var1 = 0;
             $var2 = '';

             if (isset($var1))
             {
                echo 'La variable \$var1 existe et not NULL<br>';
             } else
             { // dans le cas de la var3 par exemple, elle n'existe pas
                echo 'Cette variable n\'exsite pas ou elle est Nulle<br> ';
             }

             ##############
             if (empty($var2))
             { // si true
                echo "\$var2 est vide (0, string vide, NULL, false, non définie) <br>";
             } else
             {
                echo "\$var2 n'est pas vide";
             }
             // Difference entre isset() et empty(): si on supprime les déclarations des variables $var1 et$var2;
             //empty() reste vraie car $var2 n'est pas définie
             //isset() devient false car $var1 n'est pas définie non plus
             //Utilisation : empty() pour valider et vérifier qu'un champs de formulaire est remplie.
             //              isset() pour vérifier l'existence d'une variable avant de l'utiliser.
             
            
             ?>
        </div>
    </div> 
    <!-- ---------------------------- Les fonctions utilisateurs ----------------------------------------------------------- -->
    <div class="row">
          <h2 class="mt-5">2 - Les fonctions Utilisateurs </h2>
          <ul>
               <li>Les fonctions utilisateurs sont des morceaux de code écrits dans des accolades et portant un nom.</li>
               <li>On appelle la fonction au besoin</li>
               <li>Il est recommendée de créer des fonctions afin d'éviter la redondance au niveau du code quand on veut exécuter plusieurs fois le même traitement . On parle alors de <strong>"factoriser"</strong>son code.</li>
          </ul>
    <!-- code php -->
    <?php
         function separation()
         { // on déclare une fonction avec le mot clé "function" suivi du nom de la fonction et d'une paire de () qui accueillerons des paramètres ultérieurement

              echo "<hr>";
         }
         separation(); // pour exécuter une fonction (donc le code qui s'y trouve), on l'appelle en écrivant son nom suivi d'une paire de ()

         ////////////////////// Fonctions avec paramétres et return ///////////////////////////////////


         // Fonction sans return

         function bonjour1($prenom, $nom)
         { // $prenom et $nom sont les paramètres de notre fonction. Ils permettent de recevoir une valeur car il s'agit de variables de reception

              echo "<p> Bonjour $prenom $nom ! </p>";
         }
         bonjour1('Hawa', 'KONE'); // si la fonction attend des valeurs  il faut obligatoirement les lui donner. Ces valeurs s'apellent des arguments
         bonjour1('Ouarda', 'CHIED');


         // La même fonction avec return

         function bonjour2($prenom, $nom)
         {

              return "<p> Bonjour $prenom $nom ! </p>"; // return permet de sortir la phrase "Bonjour ..." et de la renvoyer à l'endroit où la fonction est applée

              //Après le return tout les instructions ne sront pas exécuter

         }

         echo bonjour2('Mamadou', 'AMADOU'); // Ici on met un echo car la fonction nous retourne la phrase mais ne l'affiche pas directement
         echo bonjour2('Islem', 'FOURATI');


         //Ici on peut remplacer les arguments par des variables (provenant d'un formulaire par exemple )
         $prenom1 = 'Alexandre';
         $nom1 = 'CAVET';
         echo bonjour2($prenom1, $nom1); // Les deux arguments sont variables et peuvent recevoir n'importe quelle valeur

         $prenom1 = 'Yacine';
         $nom1 = 'DJEDIDEN';
         echo bonjour2($prenom1, $nom1);


         // Exercice : vous écriver une fonction qui multiplie un nombre 1 par un nombre 2 fournis lors de l'appel . cette fonction retourne le résultat de la multiplication . Vous afficher le résultat

         function multiplier($nombre1, $nombre2)
         {
              $resultat = $nombre1 * $nombre2;
              return "<p> Le résultat de la multiplication de la valeur $nombre1 x $nombre2 est égale à : $resultat</p>";
              // return "<p> Le résultat de la multiplication de la valeur $nombre1 * $nombre2 est égale à : " . $nombre1 * $nombre2 . "</p>";

         }

         echo  multiplier(200, 5859);
         $nbr1 = 20;
         $nbr2 = 6;

         echo  multiplier($nbr1, $nbr2 = 4); // je réaffecte une nouvelle valeur à ma variable  directement dans les arguments de ma fonction

         //Le résultat de la multiplication de la valeur $nombre1 * $nombre2 est égale à : (la valeur de la multiplication)


         //Fonction avec paramètres optionnel

         // certains paramétres peuvent ne pas être passés. Une valeur est fournie lors de la dérclaration.
         // Afin de se servir d'un paramètre optionnel il faut utiliser les arguments nommées

         function bonjour3($bonjour = "Salut", $prenom, $nom)
         {
              //Sans les paramétres nommés je suis obligée de mettre le paramétre optionnel à la fin des paramétres dans les () de la fonction

              echo "<p> $bonjour $prenom $nom</p>";
         }
         bonjour3(prenom: 'Andrea', nom: 'LEO', bonjour: 'Hello');


         ?>
    </div>
    <!-- ----------------------------- La portée des variables ---------------------------------------------------------------- -->
    <div class="row">
          <h2 class="my-5">3- Portée des variables dans les fonctions</h2>
          <div class="col-sm-12 col-md-4">
               <h3 class="text-primary text-center mb-5">Variable locale</h3>
               <p>Les variables déclarées dans vos scripts ne sont pas accessibles dans vos fonctions et inversement.</p>
               <?php
               define("A", "je suis une constante");
               $a = 5;
               function maFonction()
               {
                    echo A; // la constante est appelé à l'exterieur de la fonction et je peux bien récupérer sa valeur de l'intérieur de la fonction
                    $b = 3;
                    // echo $a; // affiche variable non définie
                    echo "<p> La variable \$b  = $b .</p>"; // Affiche 3 : ici nous nous trouvons dans l'espace local de la focntion. cette variable est dite "locale"
               }
               maFonction();

               echo "<p> La variable \$a  = $a .</p>";
               //  echo "<p> La variable \$b  = $b .</p>"; // je demande à afficher la variable $b qui est définie dans la fonction => affiche variable indéfinie : on ne peut pas accéder à cette variable car elle n'est connue que à l'intérieur de la fonction
               ?>
          </div>
          <div class="col-sm-12 col-md-4">
               <h3 class="text-primary text-center mb-5">Variable globale</h3>
               <p>Les variables déclaréses dans vos scripts peuvent être accessible dans vos fonctions à condition d'être déclarées avce le mot clé <span>global</span> dans celles-ci.</p>
               <?php
               $a = 2;
               function maFonction2()
               {
                    define("B", "je suis une constante");
                    global $a; // permet d'aller chercher la variable à l'éxtérieur de la fonction pour pouvoir l'exploiter à l'intérieur
                    $b = 6;
                    echo "<p> La variable \$a  = $a .</p>"; // affiche 5
                    echo "<p> La variable \$b  = $b .</p>"; // Affiche 3
                    $a = 8;
               }
               maFonction2();

               echo "<p> La variable \$a  = $a .</p>";
               echo B;

               ?>


          </div>
          <div class="col-sm-12 col-md-4">
               <h3 class="text-primary text-center mb-5">Variable static</h3>
               <p>Les variables d'une fonction sont réinitialisées à chaque appel de cette fonction.</p>
               <p>Si l'on veut conserver la valeur précédente, il faut déclarer la variable comme static</p>
               <?php
               function maFonction3()
               {

                    static $a = 9;
                    $a++;

                    echo "<p> La variable \$a  = $a .</p>";
               }
               maFonction3();
               maFonction3();
               maFonction3();

               ?>
          </div>
     </div>
</main>


<?php
require_once("inc/footer.inc.php");
?>