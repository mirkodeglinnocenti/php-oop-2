<?php

require_once "./models/Prodotti.php";
require_once "./models/Cibo.php";
require_once "./models/Categoria.php";

$cibo1 = new Cibo("14/05/2023", "cane", "umido", "Scatoletta doggy", 5, 20);

// var_dump($cibo1);

$cibi = [
    $cibo1,
    new Cibo("18/08/2024", "gatto", "solido", "Croccantini special", 10, 50)
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <main class="container pb-3">

        <h1 class="my-5">E-commerce di prodotti per animali</h1>

        <section>
            <h2>Cibo</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($cibi as $cibo) {
                ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $cibo->titolo ?></h5>
                                <ul>
                                    <li><strong>Categoria:</strong> <?php echo $cibo->categoria ?></li>
                                    <li><strong>Consistenza:</strong> <?php echo $cibo->consistenza ?></li>
                                    <li><strong>Scadenza:</strong> <?php echo $cibo->scadenza ?></li>
                                    <li><strong>Quantità rimaste:</strong> <?php echo $cibo->quantità ?> pezzi</li>
                                    <li><strong>Prezzo:</strong> <?php echo $cibo->prezzo ?>€</li>
                                    <li><strong>Tipologia:</strong> <?php echo $cibo->tipologia ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </section>

    </main>

</body>
</html>