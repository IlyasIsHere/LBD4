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
  $emails = [ "johndoe1234@gmail.com",
              "sarahsmith5678@yahoo.com",
              "michaelbrown9012@hotmail.com",
              "jenniferlee2468@outlook.com",
              "elizabethjohnson2468@gmail.com",
              "davidsmith1634@hotmail.com",
              "mariaparker8642@yahoo.com",
              "williamlewis0246@gmail.com",
              "jenniferclark7138@hotmail.com"];

  // Extraction des domaines
  $domains = [];
  foreach ($emails as $email) {
    $temp = explode("@", $email)[1];
    $domain = explode(".", $temp)[0];
    array_push($domains, $domain);
  }  

  // Calcul des occurences de chaque domaine
  $occurences = [];
  foreach ($domains as $domain) {
    if (! isset($occurences[$domain])) {
      $occurences[$domain] = 1;
    }
    else {
      $occurences[$domain] += 1;
    }
  }

  foreach ($occurences as $domain => $count) {
    echo "$domain : $count <br>";
  }
  
   
  ?>
</body>
</html>