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
  $tab = array(
    "Et123" => ["Nom" => "AB",
                "Prénom" => "AC",
                "Moyenne" => 17],
    "Et676" => ["Nom" => "BC",
                "Prénom" => "BD",
                "Moyenne" => 12],
    "Et998" => ["Nom" => "CD",
                "Prénom" => "CE",
                "Moyenne" => 9],
    "Et764" => ["Nom" => "DE",
                "Prénom" => "DF",
                "Moyenne" => 16.5]
  );
  // Question 1
  foreach ($tab as $code => $info) {
    echo "Code d'étudiant: $code <br>";
    foreach($info as $key => $val) {
      echo "$key: $val<br>";
    }
    echo "----------------------------------<br>";
  }

  // Question 2
  $max_code = array_key_first($tab);
  foreach ($tab as $code => $info) {
    if ($info["Moyenne"] > $tab[$max_code]["Moyenne"]) {
      $max_code = $code;
    }
  }

  echo "<br> <b>L'étudiant ayant la note la plus élevée:</b> <br>";
  echo "Code: $max_code<br>";
  foreach ($tab[$max_code] as $key => $val) {
    echo "$key: $val<br>";
  }

  // Question 3
  $min_code = array_key_first($tab);
  foreach ($tab as $code => $info) {
    if ($info["Moyenne"] < $tab[$min_code]["Moyenne"] && $info["Moyenne"] >= 10) {
      $min_code = $code;
    }
  }

  echo "<br> <b>L'étudiant ayant la note min mais qui a validé l'année:</b> <br>";
  echo "Code: $min_code<br>";
  foreach ($tab[$min_code] as $key => $val) {
    echo "$key: $val<br>";
  }

  // Question 4
  echo "<br><b>Les étudiants qui n'ont pas réussi l'année: </b> <br>";
  foreach ($tab as $code => $info) {
    if ($info["Moyenne"] < 10) {
      echo "Code: $code<br>";
      foreach ($info as $key => $val) {
        echo "$key: $val<br>";
      }
      echo "---------------------<br>";

    }
  }
  ?>

  
</body>
</html>