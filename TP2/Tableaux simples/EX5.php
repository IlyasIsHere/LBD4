<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p {
      text-align: center;
    }

    .container {
      border: solid black;
    }

    .color-container {
      display: flex;
      flex-wrap: wrap;
      border: solid black;
    }

    .color-container div {
      flex-basis: 20%;
    }

  </style>
</head>
<body>
  <div class="container">
    <p>Tableau de couleurs</p>
    <div class="color-container">
      <?php
      //Question 1
      $colors = ["Yellow", "Blue", "Red", "Purple",
      "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet"];

      foreach ($colors as $color) {
        echo "<div style=\"width:150px; height:70px; background-color:" . $color . ";\"></div>";
      }

      ?>
    </div>
  </div>
  <br>
  <?php
  // Question 2
  function couleurExiste($color) {
    global $colors;
    if (in_array($color, $colors)) {
      echo "La couleur $color existe dans le tableau";
    }
    else {
      echo "La couleur $color n'existe pas dans le tableau";
    }
  }
  // Exemple
  couleurExiste("Purple"); echo "<br><br>";

  // Question 3
  function indiceCouleur($color) {
    global $colors;
    if (array_search($color, $colors) === false) {
      echo "La couleur $color n'existe pas dans le tableau.";
    }
    else {
      echo "La couleur $color existe dans le tableau et son indice est " . array_search($color, $colors);
    }
  }
  
  // Exemple
  indiceCouleur("Red");
  ?>

  
</body>
</html>