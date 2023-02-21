<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>
<body>
    <form action="index.php" method="get" class="m-3">
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label for="nom" class="col-form-label">Nom</label>
            </div>
            <div class="col-3">
                <input class="form-control" id="nom" name="nom">
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label for="prenom" class="col-form-label">Prénom</label>
            </div>
            <div class="col-3">
                <input class="form-control" id="prenom" name="prenom">
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label for="email" class="col-form-label">Email</label>
            </div>
            <div class="col-3">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label for="objet" class="col-form-label">Objet</label>
            </div>
            <div class="col-3">
                <input class="form-control" id="objet" name="objet">
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label class="col-form-label">Service</label>
            </div>
            <div class="col-3">
                <select class="form-select" name="service">
                    <option value="service1">Après-vente</option>
                    <option value="service2">Technique</option>
                </select>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1 text-end">
                <label class="col-form-label">Message</label>
            </div>
            <div class="col-3">
                <textarea class="form-control" name="message"></textarea>
            </div>
        </div>
        <div class="row mb-1">
            <div class="col-1"></div>
            <div class="col-3">
                <input type="submit" class="form-control bg-primary text-white">
            </div>
        </div>
    </form>

  <div class="container m-5 bg-info fs-4">
  <?php
  if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["email"]) && isset($_GET["objet"]) && isset($_GET["service"]) && isset($_GET["message"])) {
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $email = $_GET["email"];
    $objet = $_GET["objet"];
    $service = $_GET["service"];
    $message = $_GET["message"];
    ?>
    <p><b>Nom : </b><?php echo $nom; ?></p>
    <p><b>Prénom : </b><?php echo $prenom; ?></p>
    <p><b>Email : </b><?php echo $email; ?></p>
    <p><b>Objet : </b><?php echo $objet; ?></p>
    <p>
      <b>Service : </b>
      <?php 
      if ($service == "service1") {
          echo "Après-vente";
      }
      else {
          echo "Technique";
      }; 
      ?>
    </p>
    
    <p><b>Message : </b><?php echo $message;} ?></p>
  </div>

</body>
</html>