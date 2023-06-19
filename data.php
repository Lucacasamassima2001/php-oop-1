<?php

$Movies = [
    $inception = new Movie(
    'Inception',
    'Christopher Nolan',
    'Usa',
    '2010',
        [
            new Genre('Action', '1'),
            new Genre('Trhiller', '6'),
            new Genre('Drama', '7'),
        ]
    ),
    $Troy = new Movie(
        'Troy',
        'Wolfgang Petersen',
        'Usa',
        '2004',
        [
            new Genre('War', '2'),
            new Genre('Drama', '7'),
        ]
    ),
    $TheGodfather = new Movie(
        'The Godfather',
        'Francis Ford Coppola',
        'Usa',
        '1972',
        [
            new Genre('Crime', '3'),
            new Genre('Drama', '7'),
        ]
    ),
    $StarWarsAnewHope = new Movie(
        'Star wars: a new hope',
        'George Lucas',
        'Usa',
        '1977',
        [
            new Genre('Sci-fi', '4'),
            new Genre('Adventure', '8')

        ]
    ),
    $LordofTheRings = new Movie(
        'The Lord of the Rings: The Fellowship of the Ring',
        'Peter Jackson',
        'Usa',
        '2002',
        [
            new Genre('Fantasy', '5'),
            new Genre('Adventure', '8')
        ]
    ),
    $Goodfellas = new Movie(
        'Goodfellas',
        'Martin Scorsese',
        'Usa',
        '1990',
        [
            new Genre('Crime', '3'),
            new Genre('Drama', '7'),
        ]
    ),
];
