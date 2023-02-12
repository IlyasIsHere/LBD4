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
  $tab = [27, 56, 92, 71, 50, 11, 63, 75, 89, 31];
  echo "Avant inversion: ";
  foreach ($tab as $val) {
    echo "$val | ";
  }

  $i = 0;
  $j = count($tab)-1;
  while ($i < $j) {
    $temp = $tab[$i];
    $tab[$i] = $tab[$j];
    $tab[$j] = $temp;
    
    $i++; $j--;
  }

  echo "<br>Après inversion: ";
  foreach ($tab as $val) {
    echo "$val | ";
  }
  ?>
</body>
</html>