<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part5</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part3</h1>
        <!-- EXooooooooooo11111111111111111111111111111111111111111111111111111 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo1</h2>
              <p>Paramètres d'un lien dirigeant sur une autre page et les affichez.</p>
              <a href="index.php?nom=Achiche&amp;prenom=Louiza">Lien Exo1</a>
              <?php
              if (isset($_GET['nom']) && isset($_GET['prenom'])){
                echo 'Nom: '.$_GET['nom'].' Prenom: '.$_GET['prenom'];
                }
              ?>
        </div>
        <!-- EXooooooooooooooooooo222222222222222222222222222222222 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo2</h2>
              <p>Paramètres d'un lien dirigeant sur la même page et les affichez.</p>
              <a href="exo2.php?nom=Achiche&amp;prenom=Louiza&amp;age=35">Lien Exo2</a>
        </div>
        <!-- EXooooooooooooo33333333333333333333333333333333 -->
        <div class="col-12 col-md-4  text-center border border-dark">
          <h2>Exo3</h2>
              <p>Si (18 < âge < 130) et ne peut être qu'un entier affichez les paramètres.</p>
              <a href="exo3.php?nom=Achiche&amp;prenom=Louiza&amp;age=4">Lien Exo3</a>
        </div>
        <!-- EXooooooooooo444444444444444444444444444444 -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo4</h2>
              <p>Vérifiez si un paramètre existe, affichez le sinon affichez erreur.</p>
              <a href="exo4.php?langage=PHP&amp;serveur=https://www.php.net/">Lien Exo4</a>
        </div>
          <!-- EXoooooooooo5555555555555555555555555555555555555  -->
        <div class="col-12 col-md-4 text-center border border-dark">
          <h2>Exo5</h2>
          <p>Vérifiez si les paramètres existent, affichez les sinon affichez erreur.</p>
          <a href="exo5.php?langage=Python&amp;serveur=https://www.python.org/">Lien Exo5</a>

        </div>
        <!-- BONUUUUUUUUUUUUUUUUUSSSSSSSSSSSSSS -->
        <div class="col-12 col-md-4 border border-dark text-center">
          <h2>Exo6</h2>
            <p>Empêchez l'inclusion de balises html dans les paramètres</p>
            <a href="exo6.php?langage=Bootstrap&amp;serveur=https://getbootstrap.com/" class="disabled">Lien Exo6</a>

        </div>
      </div>
    </div>
  </body>
</html>
