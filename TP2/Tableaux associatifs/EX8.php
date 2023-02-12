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
  // Question 1
  $tab = array(
    "Et123" => ["Nom" => "AB",
                "Prénom" => "AC",
                "Notes" => [
                  "Module1" => 15,
                  "Module2" => 3,
                  "Module3" => 20,
                  "Module4" => 7,
                  "Module5" => 9,
                  "Module6" => 12,
                  "Module7" => 5,
                  "Module8" => 18,
                  "Module9" => 8,
                  "Module10" => 16,
                  "Module11" => 1,
                  "Module12" => 19,
                  "Module13" => 14,
                  "Module14" => 6,
                  "Module15" => 10,
                  "Module16" => 17
                ]
              ],
    "Et676" => ["Nom" => "BC",
                "Prénom" => "BD",
                "Notes" => [
                  "Module1" => 6,
                  "Module2" => 16,
                  "Module3" => 19,
                  "Module4" => 5,
                  "Module5" => 10,
                  "Module6" => 7,
                  "Module7" => 18,
                  "Module8" => 8,
                  "Module9" => 11,
                  "Module10" => 1,
                  "Module11" => 4,
                  "Module12" => 14,
                  "Module13" => 2,
                  "Module14" => 9,
                  "Module15" => 17,
                  "Module16" => 3
                ]
    ],
    "Et998" => ["Nom" => "CD",
                "Prénom" => "CE",
                "Notes" => [
                  "Module1" => 10,
                  "Module2" => 18,
                  "Module3" => 1,
                  "Module4" => 12,
                  "Module5" => 7,
                  "Module6" => 20,
                  "Module7" => 15,
                  "Module8" => 3,
                  "Module9" => 16,
                  "Module10" => 5,
                  "Module11" => 14,
                  "Module12" => 6,
                  "Module13" => 9,
                  "Module14" => 19,
                  "Module15" => 17,
                  "Module16" => 8
                ]
    ],
    "Et764" => ["Nom" => "DE",
                "Prénom" => "DF",
                "Notes" => [
                  "Module1" => 9,
                  "Module2" => 7,
                  "Module3" => 15,
                  "Module4" => 10,
                  "Module5" => 12,
                  "Module6" => 18,
                  "Module7" => 16,
                  "Module8" => 6,
                  "Module9" => 1,
                  "Module10" => 20,
                  "Module11" => 5,
                  "Module12" => 13,
                  "Module13" => 14,
                  "Module14" => 2,
                  "Module15" => 19,
                  "Module16" => 8
                ]
    ]
  );

  // Question 2
  foreach ($tab as $std_code => $info) {
    $notes = $info["Notes"];
    $max_module = array_key_first($notes);
    $min_module = array_key_first($notes);

    foreach ($notes as $module => $note) {
      if ($note > $notes[$max_module]) {
        $max_module = $module;
      }
      if ($note < $notes[$min_module]) {
        $min_module = $module;
      }
    }
    echo "<b>Etudiant : </b>" . $info["Nom"] . " " . $info["Prénom"] . "<br>";
    echo "Le module ayant eu la note minimale: $min_module<br>";
    echo "Le module ayant eu la note maximale: $max_module<br>";
    echo "---------------------------------------------------------------<br>";
  }
  echo "<br><br><br>";

  // Question 3
  for ($i=1; $i<=16; $i++) {
    $nom_module = "Module" . $i;
    $note_min = $tab[array_key_first($tab)]["Notes"][$nom_module];
    $note_max = $tab[array_key_first($tab)]["Notes"][$nom_module];

    foreach ($tab as $std_code => $info) {
      if ($info["Notes"][$nom_module] < $note_min) {
        $note_min = $info["Notes"][$nom_module];
      }
      if ($info["Notes"][$nom_module] > $note_max) {
        $note_max = $info["Notes"][$nom_module];
      }
    }

    echo "<b>$nom_module : </b><br>";
    echo "Note minimale: $note_min<br>";
    echo "Note maximale: $note_max<br>";
    echo "-------------------------<br>";
    
  }


  echo "<br><br><br>";
  
  // Question 4
  foreach ($tab as $std_code => $info) {
    $moyenne = array_sum($info["Notes"]) / count($info["Notes"]);
    echo "<b>Etudiant : </b>" . $info["Nom"] . " " . $info["Prénom"] . "<br>";
    echo "Moyenne: $moyenne<br>";
    if ($moyenne >= 10) {
      echo "Cet étudiant a réussi l'année universitaire.<br>";
    }
    else {
      echo "Cet étudiant n'a pas réussi l'année universitaire<br>";
    }
    echo "--------------------------------------------------<br>";
  }

  ?>
</body>
</html>