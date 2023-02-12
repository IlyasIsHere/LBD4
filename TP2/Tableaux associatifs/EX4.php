<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    tr:first-child > td:first-child {
      visibility: hidden;
    }

    td {
      border: solid;
      text-align: center;
      padding: 10px;
    }

    tr:nth-child(even) td {
      background-color: yellow;
    }

    tr:nth-child(odd) td {
      background-color: pink;
    }

    td:first-child, tr:first-child * {
      font-weight: bold;
      background-color: orange !important;
    }


  </style>
</head>
<body>
  <table>
    <?php
    for ($i=1; $i<=10; $i++) {
      echo "<tr>";
      for ($j=1; $j<=10; $j++) {
        echo "<td>" . $i*$j . "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>