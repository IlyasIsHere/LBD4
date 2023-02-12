<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td {
      border: solid;
    }
  </style>
</head>
<body>
  <?php
  $people = array(
    "Ahmed" => 35,
    "Fatima" => 28,
    "Mohammed" => 42,
    "Aisha" => 31,
    "Tariq" => 25,
    "Omar" => 39,
    "Hassan" => 32,
    "Sarah" => 30
  );
  
  // Question 2
  foreach ($people as $name => $age) {
    echo "$name a $age ans <br>";
  }
  ?>

  
  <br><br><br>
  <table>
    <?php
    // Question 3
    foreach ($people as $name => $age) {
      echo "<tr> <td>$name</td> <td>$age</td> </tr>";
    }
    ?>
  </table>
</body>
</html>