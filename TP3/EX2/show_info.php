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
    <?php
    $tab = array(
    "WEB" => [
        [ "Nom" => "PHP", 
        "Lien" => "https://www.php.net/",
        "Avis" => 5 ],
        [ "Nom" => "HTML", 
        "Lien" => "https://www.w3schools.com/html/default.asp",
        "Avis" => 4],
        [ "Nom" => "JavaScript", 
        "Lien" => "https://www.javascript.com/",
        "Avis" => 2],
        [ "Nom" => "CSS", 
        "Lien" => "https://www.w3schools.com/css/",
        "Avis" => 4]
    ],
    "DB" => [
        [ "Nom" => "MySQL", 
        "Lien" => "https://www.mysql.com/",
        "Avis" => 5 ],
        [ "Nom" => "PostgreSQL", 
        "Lien" => "https://www.postgresql.org/",
        "Avis" => 5],
        [ "Nom" => "Oracle", 
        "Lien" => "https://www.oracle.com/",
        "Avis" => 4],
        [ "Nom" => "DB2", 
        "Lien" => "https://www.ibm.com/products/db2",
        "Avis" => 4]
    ]
    );

    $domaine = $_POST["domaine"];
    $n = count($tab[$domaine]);
    $sites = $tab[$domaine];

    ?>

    <table class="table align-middle text-center table-bordered m-3 me-3 w-50">
        <tr>
            <td class="fs-3" rowspan=<?php echo "\"" . $n+1 . "\""; ?>><?php echo $domaine ?></td>
            <th class="bg-secondary text-white">Nom</th>
            <th class="bg-secondary text-white">Lien</th>
            <th class="bg-secondary text-white">Avis</th>
        </tr>
        <?php
        foreach ($sites as $site => $info) {
            echo "<tr>";
            echo "<td>" . $info["Nom"] . "</td>";
            echo "<td>" . $info["Lien"] . "</td>";
            echo "<td>" . $info["Avis"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>