<?php

$db_generi = [
    'fantasc' => ['nome' => 'Fantascienza', 'vietatoAiMinori' => false],
    'horror' => ['nome' => 'Horror', 'vietatoAiMinori' => true],
    'crimine' => ['nome' => 'Crimine', 'vietatoAiMinori' => true],
    'dramma' => ['nome' => 'Drammatico', 'vietatoAiMinori' => false],
    'noir' => ['nome' => 'Neo-noir', 'vietatoAiMinori' => false],
    'azione' => ['nome' => 'Azione', 'vietatoAiMinori' => false],
];

$db_films_data = [
    [
        'titolo' => 'Interstellar',
        'anno' => 2014,
        'voto' => 4,
        'generi_keys' => ['fantasc'],
        'regista' => 'Christopher Nolan'
    ],
    [
        'titolo' => 'Matrix',
        'anno' => 1999,
        'voto' => 5,
        'generi_keys' => ['fantasc', 'azione'],
        'regista' => 'Lana e Lilly Wachowski'
    ],
    [
        'titolo' => 'Shining',
        'anno' => 1980,
        'voto' => 3,
        'generi_keys' => ['horror', 'dramma'],
        'regista' => 'Stanley Kubrick'
    ],
    [
        'titolo' => 'Blade Runner 2049',
        'anno' => 2017,
        'voto' => 5,
        'generi_keys' => ['fantasc', 'noir'],
        'regista' => 'Denis Villeneuve'
    ],
    [
        'titolo' => 'Predator',
        'anno' => 1987,
        'voto' => 1,
        'generi_keys' => ['azione'],
        'regista' => 'John McTiernan'
    ],
    [
        'titolo' => 'Alien',
        'anno' => 1979,
        'voto' => 5,
        'generi_keys' => ['fantasc', 'horror'],
        'regista' => 'Ridley Scott'
    ],
    [
        'titolo' => 'Mad Max: Fury Road',
        'anno' => 2015,
        'voto' => 4,
        'generi_keys' => ['azione'],
        'regista' => 'George Miller'
    ],
    [
        'titolo' => 'Prometheus',
        'anno' => 2012,
        'voto' => 2,
        'generi_keys' => ['fantasc'],
        'regista' => 'Ridley Scott'
    ],
    [
        'titolo' => "L'Esorcista",
        'anno' => 1973,
        'voto' => 3,
        'generi_keys' => ['horror', 'dramma'],
        'regista' => 'William Friedkin'
    ],
];

?>