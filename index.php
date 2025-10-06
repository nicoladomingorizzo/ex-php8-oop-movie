<?php

require_once './Traits/extraInfo.php';
require_once './Models/film.php';
require_once './Models/genere.php';
require_once './db/db.php';

$films = [];

foreach ($db_films_data as $film_data) {
    $generi_del_film = [];

    foreach ($film_data['generi_keys'] as $key) {
        if (isset($db_generi[$key])) {
            $genere_data = $db_generi[$key];

            $generi_del_film[] = new Genere($genere_data['nome'], $genere_data['vietatoAiMinori']);
        }
    }

    $films[] = new Film(
        $film_data['titolo'],
        $film_data['anno'],
        $film_data['voto'],
        $generi_del_film,
        $film_data['regista']
    );
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Film</title>
</head>
    <body class="bg-black text-white"> 
        <div class="container text-center mx-auto py-4">
            <h1 class="my-5">LISTA FILM</h1>
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-start">
            <?php
            foreach ($films as $film) {
                $vietato = false;
                foreach ($film->generi as $gen) {
                    if ($gen->vietatoAiMinori) {
                        $vietato = true;
                        break;
                    }
                }
                ?>
                <div class="col d-flex justify-content-center">
                    <div class="card h-100 w-100 bg-secondary text-white shadow-lg border-0" style="min-width: 250px;">
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            
                            <h5 class="card-title text-uppercase fw-bold mb-3">
                                <?php echo $film->titolo; ?>
                            </h5>
                            
                            <p class="card-text mb-2">
                                <small class="text-white-50">
                                    Regista: 
                                    <span class="fw-normal"><?php echo $film->regista; ?></span>
                                    <?php if ($film->hasDirectorInfo()) { ?>
                                        <br>
                                        <!-- <span class="badge bg-success text-dark ms-1 py-1">
                                        ✔️ Info OK</span> -->
                                    <?php } ?>
                                </small>
                            </p>
                            
                            <p class="card-text fs-5 fw-bold mb-3">
                                Anno: <?php echo $film->anno; ?>
                            </p>
                            
                            <div class="mt-auto pt-2 w-100">
                                
                                <div class="mb-3">
                                    <strong class="d-block text-white-50 small mb-1">Generi:</strong>
                                    <span class="d-block">
                                        <?php echo $film->getGeneriAsString(); ?>
                                        <?php if ($vietato) { ?>
                                            <span class="badge bg-danger ms-1">🚫 18+</span>
                                        <?php } ?>
                                    </span>
                                </div>
                                
                                <div>
                                    <strong class="d-block text-white-50 small mb-1">Valutazione:</strong>
                                    <span class="d-block">
                                        Voto: <?php echo $film->voto; ?>
                                        <br>
                                        <?php if ($film->voto > 4) { ?>
                                            <span class="badge bg-success ms-1">TOP FILM</span>
                                        <?php } elseif ($film->voto <= 4 && $film->voto > 2) { ?>
                                            <span class="badge bg-primary ms-1">BUON FILM</span>
                                        <?php } else { ?>
                                            <span class="badge bg-danger ms-1">FILM SCONSIGLIATO</span>
                                        <?php } ?>
                                    </span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>