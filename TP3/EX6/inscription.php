<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php
  $nom = $prenom = $civilite = $date = $mdp1 = $mdp2 = "";
  $formations = [];
  $nomErr = $prenomErr = $dateErr = $mdp1Err = $mdp2Err = $formationsErr = "";
  $valid = true;

  if (!empty($_POST)) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $civilite = htmlspecialchars($_POST["civilite"]);
    $date = htmlspecialchars($_POST["date"]);
    $mdp1 = htmlspecialchars($_POST["mdp1"]);
    $mdp2 = htmlspecialchars($_POST["mdp2"]);

    if (isset($_POST["formations"])) {
      $formations = $_POST["formations"];
    }

    if (empty(trim($nom))) {
      $nomErr = "Nom laissé vide";
      $valid = false;
    }
    if (empty(trim($prenom))) {
      $prenomErr = "Prénom laissé vide";
      $valid = false;
    }
    if (empty(trim($date))) {
      $dateErr = "Date de naissance laissée vide";
      $valid = false;
    }
    if (empty(trim($mdp1))) {
      $mdp1Err = "Mot de passe laissé vide";
      $valid = false;
    }
    if ($mdp1 != $mdp2) {
      $mdp2Err = "Les mots de passe ne correspondent pas";
      $valid = false;
    }
    if (empty($formations)) {
      $formationsErr = "Aucune formation sélectionnée";
      $valid = false;
    }
  } else {
    $valid = false;
  }

  if ($valid == false) { ?>

  <form class="form m-4" method="post" action="">
    <div class="form-group">
      <div class="form-row">
        <div class="col-3">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?php echo $nom; ?>">
          <span class="text-danger"><?php echo $nomErr; ?></span>
        </div>
        <div class="col-3">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
            value="<?php echo $prenom; ?>">
          <span class="text-danger"><?php echo $prenomErr; ?></span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-3">
          <label for="civilite">Civilité</label>
          <select class="form-control" id="civilite" name="civilite" placeholder="name@example.com">
            <option value="M." <?php echo $civilite == "M." ? "selected" : ""; ?>>M.</option>
            <option value="Mme." <?php echo $civilite == "Mme." ? "selected" : ""; ?>>Mme.</option>
          </select>
        </div>
        <div class="col-3">
          <label for="date">Date de naissance</label>
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>">
          <span class="text-danger"><?php echo $dateErr; ?></span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-3">
          <label for="mdp1">Mot de passe</label>
          <input type="password" class="form-control" id="mdp1" name="mdp1" placeholder="Mot de passe"
            value="<?php echo $mdp1; ?>">
          <span class="text-danger"><?php echo $mdp1Err; ?></span>
        </div>
        <div class="col-3">
          <label for="mdp2">Confirmation du mot de passe</label>
          <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Confirmation du mot de passe"
            value="<?php echo $mdp2; ?>">
          <span class="text-danger"><?php echo $mdp2Err; ?></span>
        </div>
      </div>
    </div>

    <div class="form-group col-3 border pl-3 rounded">
      <div class="form-row">
        <div class="form-col col-form-label">
          <label>Formations</label>
        </div>
        <div class="form-col ml-4 mt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="php" value="PHP"
              <?php echo in_array("PHP", $formations) ? "checked" : ""; ?>>
            <label for="php" class="form-check-label">PHP</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="java" value="Java"
              <?php echo in_array("Java", $formations) ? "checked" : ""; ?>>
            <label for="java" class="form-check-label">Java</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="csharp" value="C#"
              <?php echo in_array("C#", $formations) ? "checked" : ""; ?>>
            <label for="csharp" class="form-check-label">C#</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="javascript" value="JavaScript"
              <?php echo in_array("JavaScript", $formations) ? "checked" : ""; ?>>
            <label for="javascript" class="form-check-label">JavaScript</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="python" value="Python"
              <?php echo in_array("Python", $formations) ? "checked" : ""; ?>>
            <label for="python" class="form-check-label">Python</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="ruby" value="Ruby"
              <?php echo in_array("Ruby", $formations) ? "checked" : ""; ?>>
            <label for="ruby" class="form-check-label">Ruby</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="swift" value="Swift"
              <?php echo in_array("Swift", $formations) ? "checked" : ""; ?>>
            <label for="swift" class="form-check-label">Swift</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="go" value="Go"
              <?php echo in_array("Go", $formations) ? "checked" : ""; ?>>
            <label for="go" class="form-check-label">Go</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="kotlin" value="Kotlin"
              <?php echo in_array("Kotlin", $formations) ? "checked" : ""; ?>>
            <label for="kotlin" class="form-check-label">Kotlin</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="formations[]" id="scala" value="Scala"
              <?php echo in_array("Scala", $formations) ? "checked" : ""; ?>>
            <label for="scala" class="form-check-label">Scala</label>
          </div>

        </div>
      </div>
      <span class="text-danger"><?php echo $formationsErr; ?></span>

    </div>

    <input type="submit" class="btn btn-primary">
  </form>

  <?php

  } else { ?>

  <table class="table table-bordered m-3 w-75">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Civilité</th>
        <th>Date de naissance</th>
        <th>Formations</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $nom; ?></td>
        <td><?php echo $prenom; ?></td>
        <td><?php echo $civilite; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo implode(", ", $formations); ?></td>
      </tr>
    </tbody>

  </table>
  <?php
  }
  ?>





</body>

</html>