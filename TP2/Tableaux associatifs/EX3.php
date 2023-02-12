<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td, th {
      border: solid;
      text-align: center;
      padding: 10px;
    }
  </style>
</head>
<body>
  <?php
  $tab = array( "Ahmed" => 14,
                "Joudia" => 19,
                "Samir" => 14,
                "Yasser" => 14.5,
                "Aya" => 12,
                "Ilham" => 16,
                "Yassine" => 17);

  // Question 2
  foreach ($tab as $nom => $note) {
    echo "Nom : $nom, note = $note <br>";
  }
  ?>

  <br><br>
  <table>
    <tr>
      <th>Nom</th>
      <th>Note</th>
    </tr>
    <?php
    // Question 3
    foreach ($tab as $nom => $note) {
      echo "<tr> <td>$nom</td> <td>$note</td> </tr>";
    }
    ?>
  </table>

  <?php
  // Question 4 & 5
  $max = $tab[array_key_first($tab)];
  $min = $tab[array_key_first($tab)];
  foreach ($tab as $note) {
    if ($note > $max) {
      $max = $note;
    }
    if ($note < $min) {
      $min = $note;
    }
  }

  foreach ($tab as $nom => $note) {
    if ($note == $max) {
      echo "<br><br>Le nom de l'étudiant ayant la note la plus élevée est $nom";
      break;
    }
  }

  foreach ($tab as $nom => $note) {
    if ($note == $min) {
      echo "<br>Le nom de l'étudiant ayant la note la plus basse est $nom";
      break;
    }
  }

  // Question 6
  $sum = 0;
  foreach ($tab as $note) {
    $sum += $note;
  }
  $moyenne = $sum / count($tab);
  echo "<br><br>La moyenne de la classe est " . round($moyenne, 2); 

  ?>
</body>
</html>