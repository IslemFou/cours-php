<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cours PHP - Les boucles</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

</head>

<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg" >
    <div class="container-fluid">
      <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="01_index.php">Introduction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="02_bases.php">Les bases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="03_variables_constantes.php">Les variables et les constantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="04_conditions.php">Les conditions en PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="05_boucles.php">Les boucles en PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="06_inclusions.php">Les importations des fichier</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <header class="p-5 m-4 bg-light rounded-3 border ">
        <section class="container py-5">
            <h1>Les boucles en PHP</h1>
            <p class="col-md-12 fs-4"> Les boucles (qu'on appelle aussi des structures itératives) sont un moyen de faire répéter plusieurs fois un même morceau de code. Une boucle est donc une répétition, comme on a pu le voir en JavaScript</p>
        </section>
  </header><!-- fin header -->
  <main class="container px-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2>La boucle while</h2>
            <p>La boucle est, comme en JS, une boucle qui permet d'éxécuter un code TANT QUE  la condition d'entrée est toujours remplie.</p>
<?php
$a = 0; // Initialisation de la variable à 0 => valeur de départ de la boucle
while($a < 5){ //On boucle tant que $a est strictement inférieur à 5

    echo "<p>Tour n° $a</p>";// on affiche à quel tour on se trouve

    $a++; // On incrément la valeur de la variable pour que la condition d'entrée devienne false à un moment donné quand a > 5
    /* Affichage: 
Tour n° 0

Tour n° 1

Tour n° 2

Tour n° 3

Tour n° 4
    */
}
/*// Exercice :
     à l'aide d'une boucle while, vous affichez les années de 1920 à 2025 dans un menu déroulant.
*/

$i =1925;

echo '
    <form>
    <select class="form-select form-select-lg" aria-label="Default select example" name="" id="">';
    while ($i <= 2025)
    {
        echo "<option value=\"$i\">$i</option>";
        $i ++;
    }
    echo '</select>
        </form>'
?>

<!-- // Exercice bonus : faire la même chose dans l'autre sens, de 2025 à 1920 -->
<br>
<!-- 1er syntaxe -->
<?php
$annee = 2025;

echo '
    <form>
    <select class="form-select form-select-lg" aria-label="Default select example" name="" id="">';
    while ($annee >= 1920)
    {
        echo "<option value=\"$annee\">$annee</option>";
        $annee--;
    }
    echo '</select>
        </form>'
?>
<!-- 2ème syntaxe -->
 <h4>Autre syntaxe</h4>
 <p> de ?php echo .... ? vers ?= ... ?
 </p>
 <form action="#" class="mt-3">
    <select name="" id="" class="form-select form-select-lg">

        <?php
        $j = 2025;
        while ($j > 1919)
        {
        ?>

            <option value=" <?= $j ?>"> <?= $j; ?></option>
            <!-- <option value=" <?php echo $j ?>"> <?php echo $j; ?></option>" -->

        <?php
        $j--;
        }
        ?>

    </select>
 </form>
 </div>

 <!-- La boucle for -->
<div class="col-sm-12 col-md-6">
            <h2>La boucle for</h2>
            <p>La boucle for , comme toutes les boucles, sert à répéter un morceau de code tant que la condition n'est pas respectée. Sa structure est cependant différente : "for ($i=0; $i <15 ; $i++) {}" </p>
            <ol>
                <li><span>Initialisation de la variable</span></li>
                <li><span>Condition de sortie</span></li>
                <li><span>Incrémentation de la variable</span></li>
            </ol>

            <?php
            for ($i=0; $i < 15 ; $i++) //je lance ma boucle for avec les options citées au dessus
            {
              echo "<p>Tour N ° $i </p> "; // Dans les accolades, je précise de code à répéter
            }

            ?>

        </div>

<div class="container p-5 col-6 text-bg-light">
  <h4>Excercice formulaire de naissance</h4>
  <div class="row">
 <!-- Excercice : Créer en Php un formulaire de selection de date de naissance (jour - mois - année (1970 - 2025)) -->
 <?php
//correction

echo '<form>

            <label for="jour">Jour de naissance</label>
            <select class="form-select col-4" name="jour" id="jour">';
            for ($jour = 1 ; $jour <= 31 ; $jour++)
            {
              echo "<option value=\"$jour\">$jour</option>";
            }
            echo '</select>


            <label for="jour">Mois de naissance</label>
            <select class="form-select col-4" name="mois" id="mois">';

            for($mois = 1 ; $mois <=12 ; $mois++)
            {
              echo "<option value=\"$mois\">$mois</option>";
            }


            echo '</select>
            <label for="annee">Année de naissance</label>
            <select class="form-select col-4" name="annee" id="annee">';

            for($annee = 2025 ; $annee > 1969 ; $annee--)
            {
              echo "<option value=\"$annee\">$annee</option>";
            }
            echo '</select>

    </form>';

?>

  </div>
</div>

<br>  

<!-- Excercice Remplissage tableau par boucle for -->
<div class="container p-5 col-6 text-bg-light">
  <h4>Excercice tableau</h4>
  <!-- // Exercice : créer un tableau qui affiche 0 à 9 sur une seule ligne -->
<?php

echo '<table class="table table-striped-columns table-bordered border-info">
          <thead>
              <tr>';

              for ($colonne = 1; $colonne <= 10 ; $colonne++)
              {
                echo "<th scope=\"col\">column $colonne</th>";
              }
              echo '</tr>
          </thead>


            <tbody>
              <tr>
                ';
                for ($number = 0; $number <=9 ; $number++)
                {
                  echo "<td class=\"text-center\">$number</td>";
                }
              echo '</tr>
              </tbody>
        </table>';

?>
  </div>
  </main>
  <footer>
    <div class="d-flex justify-content-evenly align-items-center bg-dark text-white p-3">
      <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/langref.php">Doc PHP</a>
      <a class="nav-link" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
      <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>