<?php

$produits = [
    [
        "model"     => "32LC456",
        "brand"     => "Samsung",
        "size"      => 32,
        "frequency" => 200,
        "contrast"  => 40000,
        "smart"     => true,
        "price"     => 249.99,
        "stock"     => 7
    ],
    [
        "model"     => "48PF9810",
        "brand"     => "Panasonic",
        "size"      => 48,
        "frequency" => 600,
        "contrast"  => 300000,
        "smart"     => false,
        "price"     => 749.99,
        "stock"     => 3
    ],
    [
        "model"     => "49A76F2",
        "brand"     => "Sharp",
        "size"      => 49,
        "frequency" => 300,
        "contrast"  => 20000,
        "smart"     => false,
        "price"     => 549.99,
        "stock"     => 12
    ],
    [
        "model"     => "46BC2100",
        "brand"     => "Sony",
        "size"      => 46,
        "frequency" => 1200,
        "contrast"  => 400000,
        "smart"     => true,
        "price"     => 1149.99,
        "stock"     => 2
    ],
    [
        "model"     => "50PF7654",
        "brand"     => "Philips",
        "size"      => 50,
        "frequency" => 800,
        "contrast"  => 2000000,
        "smart"     => false,
        "price"     => 1049.99,
        "stock"     => 6
    ],
    [
        "model"     => "23B450",
        "brand"     => "Samsung",
        "size"      => 23,
        "frequency" => 100,
        "contrast"  => 200000,
        "smart"     => true,
        "price"     => 299.99,
        "stock"     => 1
    ],
    [
        "model"     => "23C450",
        "brand"     => "Samsung",
        "size"      => 23,
        "frequency" => 150,
        "contrast"  => 120000,
        "smart"     => false,
        "price"     => 199.99,
        "stock"     => 10
    ],
    [
        "model"     => "58WA9000",
        "brand"     => "Grundig",
        "size"      => 58,
        "frequency" => 700,
        "contrast"  => 1000000,
        "smart"     => true,
        "price"     => 899.99,
        "stock"     => 0
    ],
    [
        "model"     => "55ZX4300",
        "brand"     => "Sony",
        "size"      => 55,
        "frequency" => 900,
        "contrast"  => 100000,
        "smart"     => true,
        "price"     => 999.99,
        "stock"     => 0
    ],
    [
        "model"     => "52LF5610",
        "brand"     => "LG",
        "size"      => 52,
        "frequency" => 600,
        "contrast"  => 20000,
        "smart"     => true,
        "price"     => 599.99,
        "stock"     => 5
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock magasin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Stock magasin</h1>
                <p>Ci-dessous le tableau que vous devrez utiliser pour l'exercice n°2</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Modele</th>
                            <th>Marque</th>
                            <th>Taille</th>
                            <th>Frequence</th>
                            <th>Contraste</th>
                            <th>SmartTV</th>
                            <th>Prix</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produits as $produit): ?>
                            <tr>
                            <td><?php echo $produit ["model"] ?></td>
                            <td><?php echo $produit ["brand"] ?></td>
                            <td><?php echo $produit ["size"] ?></td>
                            <td><?php echo $produit ["frequency"] ?></td>
                            <td><?php echo $produit ["contrast"] ?></td>
                            <td><?php echo $produit ["smart"] ?></td>
                            <td><?php echo $produit ["price"] ?></td>
                            <td><?php echo $produit ["stock"] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>