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
  $notes = [4, 20, 19, 8, 7, 14, 11, 20, 3, 12, 15, 17, 10, 2, 6, 16, 1, 5, 18, 9];

  function afficher($notes) {
    foreach ($notes as $note) {
      echo "$note | ";
    }
  }

  function moyenne($notes) {
    $sum = 0;
    foreach ($notes as $note) {
      $sum += $note;
    }
    return $sum/count($notes);
  }

  function notesSuperieur10($arr) {
    $count = 0;
    foreach ($arr as $note) {
      if ($note > 10) {
        $count++;
      }
    }
    return $count;
  }

  function nombreDe20($arr) {
    $count = 0;
    foreach ($arr as $note) {
      if ($note == 20) {
        $count++;
      }
    }
    return $count;
  }
  
  function tri(&$arr) {
    for ($i=1; $i<count($arr); $i++) {
      $j = $i;
      $key = $arr[$i];
      while ($j - 1 >= 0 && $key < $arr[$j - 1]) {
        $arr[$j] = $arr[$j - 1];
        $j--;
      }
      $arr[$j] = $key; 
    }
  }

  function valeurExisteDansTableau($val, $arr) {
    for ($i=0; $i<count($arr); $i++) {
      if ($arr[$i] == $val) {
        return "La valeur existe et son indice est $i";
      }
    }
    return "La valeur n'existe pas dans le tableau";
  }
  ?>
</body>
</html>