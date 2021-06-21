<?php
$_GET['age'] = (int) $_GET['age'];
if (18 < $_GET['age'] && $_GET['age'] < 130){
  echo 'Nom: '.$_GET['nom'].'<br>';
  echo ' Prenom: '.$_GET['prenom'].'<br>';
  echo ' Age: '.$_GET['age'];
}else {
  echo "L'age est incorrect";
}
?>
