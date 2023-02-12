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
    "WEB" => [
      [ "Nom" => "PHP", 
        "Lien" => "https://www.php.net/",
        "Avis" => 5 ],
      [ "Nom" => "HTML", 
        "Lien" => "https://www.w3schools.com/html/default.asp",
        "Avis" => 4],
      [ "Nom" => "JavaScript", 
      "Lien" => "https://www.javascript.com/",
      "Avis" => 2],
      [ "Nom" => "CSS", 
      "Lien" => "https://www.w3schools.com/css/",
      "Avis" => 4]
    ],
    "DB" => [
      [ "Nom" => "MySQL", 
        "Lien" => "https://www.mysql.com/",
        "Avis" => 5 ],
      [ "Nom" => "PostgreSQL", 
        "Lien" => "https://www.postgresql.org/",
        "Avis" => 5],
      [ "Nom" => "Oracle", 
      "Lien" => "https://www.oracle.com/",
      "Avis" => 4],
      [ "Nom" => "DB2", 
      "Lien" => "https://www.ibm.com/products/db2",
      "Avis" => 4]
    ]
    );

  // Question 2
  foreach ($tab as $categorie => $sites) {
    echo "<b>Catégorie $categorie: </b> <br>";
    foreach ($sites as $site) {
      foreach ($site as $key => $value) {
        echo "$key: $value <br>";
      }
      echo "--------------------------------------------------------------------- <br>";
    }
  }

  // Question 3
  function cmp($a, $b) {
    return $b["Avis"] - $a["Avis"];
  }

  usort($tab["WEB"], "cmp");
  usort($tab["DB"], "cmp");

  echo "<p style=\"font-size: 18pt; font-weight: bold\">Après tri:<p>";
  foreach ($tab as $categorie => $sites) {
    echo "<b>Catégorie $categorie: </b> <br>";
    foreach ($sites as $site) {
      foreach ($site as $key => $value) {
        echo "$key: $value <br>";
      }
      echo "--------------------------------------------------------------------- <br>";
    }
  }


  ?>
</body>
</html>