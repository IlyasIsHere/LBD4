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
    }
  </style>
</head>
<body>
  <?php
  $capitales = array(
    "Maroc" => "Rabat",
    "Allemagne" => "Berlin",
    "Serbie" => "Belgrade",
    "Brésil" => "Brasilia",
    "Slovaquie" => "Bratislava",
    "Italie" => "Rome",
    "Venezuela" => "Caracas",
    "Moldavie" => "Chisinau",
    "Guyana" => "Georgetown",
    "Viêt Nam" => "Hanoï",
    "Zimbabwe" => "Harare",
    "Cuba" => "La Havane",
    "Pays-Bas" => "La Haye",
    "Finlande" => "Helsinki");

  // Question 1
  foreach ($capitales as $pays => $capitale) {
    echo "<b>$pays</b> : $capitale <br>";
  }
  ?>

  <br><br>
  <table>
    <tr>
      <th>Pays</th>
      <th>Capitale</th>
    </tr>
    <?php
    // Question 2
    foreach ($capitales as $pays => $capitale) {
      echo "<tr> <td>$pays</td> <td>$capitale</td> </tr>";
    }
    ?>
  </table>

  <br><br>

  <?php
  // Question 3
  function chercher_capitale($pays) {
    global $capitales;
    if (isset($capitales[$pays])) {
      echo "La capitale de $pays est " . $capitales[$pays];
    }
    else {
      echo "La capitale de ce pays n'est pas dans le tableau";
    }
  }

  chercher_capitale("Slovaquie");
  ?>
  
</body>
</html>