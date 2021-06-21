<?php
if (isset($_GET['serveur']) && isset($_GET['langage'])){
  echo 'Serveur: '.$_GET['serveur'].'<br>';
  echo ' Langage: '.$_GET['langage'];
  }else {
    echo "Une belle erreur";
  }
?>
