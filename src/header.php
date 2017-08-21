<?php
require('settings.php');
$title = "Me ofende, la web de las ofensas.";

function setTile($theTitle){
    $title = $theTitle;
}
function getTitle(){
  return $title;
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Incluimos los frameworks:  -->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Jquery AJAX -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Mi hoja de estilos -->
      <link rel=stylesheet href="CSS/style.css" type="text/css">
      <!-- Funciones Javascript -->
      <script type="text/javascript" src="scripts/functions.js"></script>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css">

    <title><?php echo getTitle(); ?></title>

  </head>
