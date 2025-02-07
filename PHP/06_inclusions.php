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
    <title>Cours PHP - Les inclusions</title>
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
            <h1>Les importations des fichiers avec require() et includes()</h1>
            <p class="col-md-12 fs-4"> La grande majorité des sites web dynamiques ou des applications ont besoin de réutiliser des parties de code identique à plusieurs endroits d'une même page, ou bien dans plusieurs pages différentes. C'est le cas par exemple des librairies de fonctions utilisateurs ou bien des fichiers de configuration. Plutôt que de réécrire à chaque fois le code, il existe des fonctions (structures de langage en réalité) capables d'importer et exécuter le code à réutiliser dans la page. Il s'agit des fonctions <span>include()</span> et <span>require()</span>.</p>
            <p>Lorsque l'on crée un fichier que l'on veut inclure, la convention dit que l'on ajoute .inc avant .php est ces fichier on les crée dans un dossier nomé inc. Il n'y a pas d'influence sur la lecture du fichier, c'est une convention et une organisation.</p>
            <div class="col-sm-12">
          <h2>Comment utiliser include() et require()</h2>
          <p>Ces deux fonctions prennent un seul paramètre de type chaîne de caractères. C'est le chemin qui mène au fichier à importer. Le chemin est par défaut relatif par rapport au répertoire dans lequel se trouve le script.</p>
          <p>Lorsqu'un fichier est importé, le code se trouvant à l'intérieur est exécuté. Les variables, constantes, objets, tableaux... du fichier importé peuvent donc être réutilisés dans la suite du programme.</p>
          <ul>Exemple d'utilisation: 
            <li>le footer qui revient identique sur toutes les pages de notre site</li>
            <li>dans certains cas, un header qui reviendrait sur plusieurs pages</li>
            <li>notre connexion à la BDD : <code>init.inc.php</code></li>
            <li>notre fichier de fonctions que nous avons créer nous même : <code>functions.inc.php</code>. Dans un fichier de fonctions on retrouvera par exemple des fonctions de debuggage, des fonctions de vérification de statut del'utilisateur et de connexion de l'utilisateur.</li>
              
          </ul>
        </div>
        <div class="col-sm-12 mt-5">
            <h2 class="text-center border-top pt-5 my-5">La fonction include</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center text-primary">include()</h3>
                    <!-- partie php -->
                    <?php
                    /*
                    on va créer un dossier inc à la racine de notre dossier php dans ce dossier on va créer un fichier test1.inc.php 
                    on craie la balise p avec une phrase : ceci est le premier fichier d'inclusion
                    */
                // utilisation de la fonction include
                include("inc/test1.inc.php");

                    ?>
                </div>
            </div>
        </div>
        </section>
  </header><!-- fin header -->
  <main class="container px-5">
<!--  -->

<!--  -->
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