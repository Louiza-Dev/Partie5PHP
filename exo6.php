<?php
// echo htmlspecialchars;
if (isset($_GET['serveur']) && isset($_GET['langage'])){
  echo 'Serveur: '.strip_tags($_GET['serveur']).'<br>';
  echo ' Langage: '.strip_tags($_GET['langage']);
 }else {       //htmlspecialchars() 
    echo "Une belle erreur";
  }
?>
