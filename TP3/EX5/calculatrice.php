<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <form action="calculatrice.php" method="get">
    <div class="container m-3 fs-1 bg-info p-4">
      <div class="row">
        <div class="col-3">
          <input type="num" name="op1" class="form-control fs-1 h-100" placeholder="1st operand">
        </div>
        <div class="col-2 text-center">
          <div class="row">
            <div class="col">
              <label for="add" class="form-label text-white">+</label>
              <input type="radio" id="add" name="type" class="form-check-input" value="+">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="sub" class="form-label text-white">-</label>
              <input type="radio" id="sub" name="type" class="form-check-input" value="-">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="mul" class="form-label text-white">×</label>
              <input type="radio" id="mul" name="type" class="form-check-input" value="*">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="div" class="form-label text-white">/</label>
              <input type="radio" id="div" name="type" class="form-check-input" value="/">
            </div>
          </div>
        </div>
        <div class="col-3">
          <input type="num" name="op2" class="form-control fs-1 h-100" placeholder="2nd operand">
        </div>
        <div class="col-1">
          <input type="submit" value="=" class="btn btn-light fs-1 h-100">
        </div>
        <div class="col fs-1 form-control align-items-center d-flex justify-content-center">
          <p>
            <?php
            if (isset($_GET["type"]) && isset($_GET["op1"]) && isset($_GET["op2"])) {
              $type=$_GET["type"];
              $op1=$_GET["op1"];
              $op2=$_GET["op2"];
              switch ($type) {
                case "+":
                  echo $op1+$op2;
                  break;
                case "-":
                  echo $op1-$op2;
                  break;
                case "*":
                  echo $op1*$op2;
                  break;
                case "/":
                  echo $op1/$op2;
                  break;
              }
            }
            ?>
          </p>
        </div>
      </div>
    </div>
  </form>
</body>
</html>