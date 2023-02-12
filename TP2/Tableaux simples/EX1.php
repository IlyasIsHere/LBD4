<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $arr = [4, 2, 5, 3, 1, 3, 4, 2, 5, 7, 6, 6, 7]; 
  
  // Afficher les éléments
  echo "<br>Tableau initial: <br>";
  foreach ($arr as $i) {
    echo $i . " | ";
  }

  // Trier le tableau
  sort($arr);
  echo "<br>Après tri du tableau: <br>";
  foreach ($arr as $i) {
    echo $i . " | ";
  }
  echo "<br>";

  // Supprimer les doublons
  $temp_arr = [$arr[0]];
  for ($i=1; $i<count($arr); $i++) {
    if ($arr[$i] != $arr[$i - 1]) {
      array_push($temp_arr, $arr[$i]);
    }
  }
  $arr = $temp_arr;
  echo "<br>Après suppression des doublons: <br>";
  foreach ($arr as $i) {
    echo $i . " | ";
  }

  ?>
</body>
</html>