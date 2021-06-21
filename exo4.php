<?php
if (isset($_GET['serveur'])){
  echo $_GET['serveur'];
}else {
  echo "Une belle erreur";
}
?>
<?php
  // $url = "https://waytolearnx.com";
  // if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  //   echo("URL est valide");
  // } else {
  //   echo("URL n'est pas valide");
  // }



//   $adresse = "http://www.test.com/test.php";
//
// $file_headers = @get_headers($adresse);
//
// if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found')
// {
//     echo "$adresse ne réponde pas ou  retourne une erreur 404";
// }
// else
// {
//     echo "$adresse est correctement accessible";
// }
?>
