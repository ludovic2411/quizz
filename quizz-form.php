<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>quizz</title>
  </head>
  <body>
    <?php
    $marque=$_GET['marque'];
    $titre=$_GET['titres'];
  if ($marque==KTM and $titre=5) {
    echo "Parfait!";
  }
  elseif ($marque==KTM and $titre!=5) {
    echo "pas mal";
  }
  elseif ($marque=aprilia and $titre!=5) {
    echo "mauvais!";
  }
  else{
    echo "pas mal";
  }
     ?>
  </body>
</html>
