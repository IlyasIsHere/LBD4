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
  $montant_err = "";
  ?>

  <form class="form m-3 card p-3 bg-light" method="post" action="">
    <div class="row form-group">
      <label for="status" class="col-form-label col-2">Status</label>
      <select name="status" id="status" class="form-control col-3">
        <option value="salarie">Salarié</option>
        <option value="fonctionnaire">Fonctionnaire</option>
        <option value="liberale">Profession Libérale</option>
      </select>
    </div>
    <div class="row form-group">
      <label for="salaire" class="col-form-label col-2">Salaire</label>
      <input required type="number" step="any" name="salaire" id="salaire" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="totalcredit" class="col-form-label col-2">Montant mensuel total des crédits que vous payez</label>
      <input required type="number" step="any" name="totalcredit" id="totalcredit" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="nom" class="col-form-label col-2">Nom</label>
      <input required type="text" name="nom" id="nom" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="prenom" class="col-form-label col-2">Prénom</label>
      <input required type="text" name="prenom" id="prenom" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="dateDeNaissance" class="col-form-label col-2">Date de naissance</label>
      <input required type="date" name="dateDeNaissance" id="dateDeNaissance" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="montant" class="col-form-label col-2" for="montant">Montant de financement</label>
      <input type="number" required min="0" step="any" class="form-control col-3 " id="montant" name="montant">
    </div>
    <div class="row form-group">
      <label for="duree" class="col-form-label col-2">Durée (en mois)</label>
      <input type="number" required min="6" max="300" class="form-control col-3" id="duree" name="duree">
    </div>
    <div class="row form-group">
      <label for="assurance" class="col-form-label col-2 form-check-label">Voulez-vous une assurance?</label>
      <input type="checkbox" class="form-check" checked name="assurance" id="assurance">
    </div>
    <input type="submit" value="Afficher le tableau d'amortissement" class="btn btn-primary">
  </form>

  <?php
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateDeNaissance']) && isset($_POST['salaire']) && isset($_POST['totalcredit']) && isset($_POST['montant']) && isset($_POST['duree'])) {
    $status = $_POST['status'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateDeNaissance = $_POST["dateDeNaissance"];
    $salaire = $_POST["salaire"];
    $totalcredit = $_POST["totalcredit"];
    $capitale = $_POST['montant'];
    $montant_restant = $capitale;
    $duree = $_POST['duree'];
    $date = strtotime("today");
    $date_str = date("d/m/Y", $date);
    $dateDeNaissance = DateTime::createFromFormat("Y-m-d", $_POST["dateDeNaissance"]);
    $duree_interval = new DateInterval("P" . $duree . "M");
    $date_fin = (new DateTime())->add($duree_interval);
    $age_apres_duree = $date_fin->diff($dateDeNaissance)->y;

    $valid1 = ($age_apres_duree >= 62) ? false : true;

    switch ($status) {
      case 'salarie':
        $taux = 0.05 / 12;
        break;
      case 'fonctionnaire':
        $taux = 0.04 / 12;
        break;
      case 'liberale':
        $taux = 0.06 / 12;
        break;
    }
    $montant_assurance = isset($_POST["assurance"]) ? ((0.04 / 100) * $capitale) : 0;
    $mensualite = ($capitale * $taux * pow(1 + $taux, $duree)) / (pow(1 + $taux, $duree) - 1);

    $valid2 = true;
    if (($mensualite + $totalcredit) > ($salaire * 0.5)) {
      $valid2 = false;
      $mensualite_max = ($salaire * 0.52) - $totalcredit;
      $montant_max = ($mensualite_max * (pow(1 + $taux, $duree) - 1)) / ($taux * pow(1 + $taux, $duree));
      $montant_err = "Le montant du crédit est trop élevé par rapport à votre salaire. Le montant maximal que vous pouvez emprunter (vu votre salaire) est de " . number_format($montant_max, 2, ",", " ") . " MAD (approximativement).";
    }

    if ($valid1 && $valid2) {
  ?>

  <div class="container d-flex justify-content-center">
    <table class="table table-striped table-bordered table-hover w-75 mb-4">
      <thead>
        <tr class="bg-secondary text-white">
          <th>Date Ech</th>
          <th>Mensualité (MAD)</th>
          <th>Intérêt (MAD)</th>
          <th>Amortissement (MAD)</th>
          <th>Cap. restant dû (MAD)</th>
        </tr>
      </thead>
      <tbody class="text-right">
        <?php
            for ($i = 0; $i < $duree; $i++) {
              $interet = $montant_restant * $taux;
              $amortissement = $mensualite - $interet;
              $montant_restant -= $amortissement;
            ?>
        <tr>
          <td><?php echo $date_str; ?></td>
          <td><?php echo number_format($mensualite + $montant_assurance, 2, ",", " ") ?></td>
          <td><?php echo number_format($interet, 2, ",", " ") ?></td>
          <td><?php echo number_format($amortissement, 2, ",", " ") ?></td>
          <td><?php echo number_format($montant_restant, 2, ",", " ") ?></td>
        </tr>
        <?php
              $date = strtotime("+1 month", $date);
              $date_str = date("d/m/Y", $date);
            }

            ?>



      </tbody>
    </table>
  </div>

  <?php } else {
      if (!$valid1) {
        echo "<div class='alert alert-danger'>Vous n'êtes pas éligible à ce prêt (Vous serez retraité après la durée choisie)</div>";
      }
      if (!$valid2) {
        echo "<div class='alert alert-danger'>$montant_err</div>";
      }
    }
  }
  ?>


</body>

</html>