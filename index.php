<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Kennel.php";


$categories = [
    new Category("dog"),
    new Category("cat")
];


$acana = new Food("Acana", 13.99, $categories[0], "food", "https://arcaplanet.vtexassets.com/arquivos/ids/275553/acana-dog-classic-red.jpg?v=1757267980", "meat");
$monge = new Food("Monge", 20.50, $categories[0], "food", "https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757267570", "fish");

$kong = new Game("kong", 6.99, $categories[0], "game", "https://arcaplanet.vtexassets.com/arquivos/ids/207398/Kong-Dotz-Circle-Small.jpg?v=1757249547", "plastic");
$trixie = new Game("kong", 6.99, $categories[1], "game", "https://arcaplanet.vtexassets.com/arquivos/ids/223801/trixie-gatto-tiragraffi-badalona-beige.jpg?v=1757121092", "pvc");

$lovedi = new Kennel("lovedi", 23.89, $categories[1], "kennel", "https://arcaplanet.vtexassets.com/arquivos/ids/225142/merci-cane-cuccia-ovale-morbida-tartan.jpg?v=1757207437", "80x90");
$mast = new Kennel("mast", 14.89, $categories[0], "kennel", "https://arcaplanet.vtexassets.com/arquivos/ids/253138/BRANDINA-BLU.jpg?v=1757268198", "70x80");

$products = [
    $acana,
    $monge,
    $kong,
    $trixie,
    $lovedi,
    $mast
];

var_dump($acana);
var_dump($monge);

var_dump($kong);
var_dump($trixie);

var_dump($lovedi);
var_dump($mast);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BolleanPlanet</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="p-5">
        <h1 class="text-center mb-5">Ecco una lista dei nostri prodotti</h1>
        <div class="row row-cols-3 gy-4">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <?php include __DIR__ . "/Partials/Product-card.php"; ?>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>