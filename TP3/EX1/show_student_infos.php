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
        "Et123" => [
            "Nom" => "AB",
            "Prénom" => "AC",
            "Notes" => [
                "Module1" => 15,
                "Module2" => 3,
                "Module3" => 20,
                "Module4" => 7,
                "Module5" => 9,
                "Module6" => 12,
                "Module7" => 5,
                "Module8" => 18,
                "Module9" => 8,
                "Module10" => 16,
                "Module11" => 1,
                "Module12" => 19,
                "Module13" => 14,
                "Module14" => 6,
                "Module15" => 10,
                "Module16" => 17
            ]
        ],
        "Et676" => [
            "Nom" => "BC",
            "Prénom" => "BD",
            "Notes" => [
                "Module1" => 6,
                "Module2" => 16,
                "Module3" => 19,
                "Module4" => 5,
                "Module5" => 10,
                "Module6" => 7,
                "Module7" => 18,
                "Module8" => 8,
                "Module9" => 11,
                "Module10" => 1,
                "Module11" => 4,
                "Module12" => 14,
                "Module13" => 2,
                "Module14" => 9,
                "Module15" => 17,
                "Module16" => 3
            ]
        ],
        "Et998" => [
            "Nom" => "CD",
            "Prénom" => "CE",
            "Notes" => [
                "Module1" => 10,
                "Module2" => 18,
                "Module3" => 1,
                "Module4" => 12,
                "Module5" => 7,
                "Module6" => 20,
                "Module7" => 15,
                "Module8" => 3,
                "Module9" => 16,
                "Module10" => 5,
                "Module11" => 14,
                "Module12" => 6,
                "Module13" => 9,
                "Module14" => 19,
                "Module15" => 17,
                "Module16" => 8
            ]
        ],
        "Et764" => [
            "Nom" => "DE",
            "Prénom" => "DF",
            "Notes" => [
                "Module1" => 9,
                "Module2" => 7,
                "Module3" => 15,
                "Module4" => 10,
                "Module5" => 12,
                "Module6" => 18,
                "Module7" => 16,
                "Module8" => 6,
                "Module9" => 1,
                "Module10" => 20,
                "Module11" => 5,
                "Module12" => 13,
                "Module13" => 14,
                "Module14" => 2,
                "Module15" => 19,
                "Module16" => 8
            ]
        ]
    );
    $code = $_POST["code"];
    $info = $tab[$code];
    $nom = $info["Nom"];
    $prenom = $info["Prénom"];
    $notes = $info["Notes"];

    ?>
    <div>
    <table class="table table-sm table-bordered text-center align-middle fs-6 m-3" style="width: 500px;">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th colspan="16">Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2"><?php echo $code; ?></td>
                <td rowspan="2"><?php echo $nom; ?></td>
                <td rowspan="2"><?php echo $prenom; ?></td>
                <?php 
                foreach ($notes as $module => $note) {
                echo "<th>$module</th>"; }
                ?>

                
            </tr>
            <tr>
                <?php
                foreach ($notes as $module => $note) {
                    echo "<td>$note</td>" ; 
                }
                ?>
            </tr>
        </tbody>

        
    </table>
    </div>

</body>

</html>