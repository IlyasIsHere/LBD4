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
    $moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
    'Octobre', 'Novembre', 'Décembre');
    
    // Question 1-a
    for ($i=1; $i<=12; $i++) {
      echo "$i - $moisFr[$i] <br>";
    }

    echo "<br><br>";

    // Question 1-b
    foreach ($moisFr as $num => $month) {
      echo "$num - $month <br>";
    }

    echo "<br><br>";

    // Question 2: 
    // On peut pas car la fonction date("m") retourne le mois (string), alors que notre tableau a des clés (int)
    
    // Question 3
    echo "Nom du mois correspondant: " . $moisFr[intval(date("m"))];
    echo "<br><br>";

    // Question 4
    $moisFr = array(1=>'Janvier',
                    2=> 'Février', 
                    3=>'Mars', 
                    4=>'Avril', 
                    5=>'Mai', 
                    6=>'Juin', 
                    13=>'Juillet', 
                    8=>'Aout', 
                    9=>'Septembre',
                    10=>'Octobre', 
                    11=>'Novembre', 
                    12=>'Décembre');
    
    // for ($i=1; $i<=12; $i++) {
    //   echo "$i - $moisFr[$i] <br>";
    // } // Erreur car il n'y a pas la clé 7

    // On doit utiliser la boucle foreach à la place de la boucle for
    foreach ($moisFr as $num => $month) {
      echo "$num - $month <br>";
    }

  ?>
</body>
</html>