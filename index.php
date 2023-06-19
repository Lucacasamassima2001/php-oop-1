<?php

include __DIR__ . '/models/Movie.php';
include __DIR__ . '/models/Genre.php';
include __DIR__ . '/data.php';

// var_dump($Movies);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>
    <div class="title">
        <h1>Movies:</h1>
    </div>
    <div class="container">
        <?php
        foreach($Movies as $Movie){
            ?><div class="Movie">
                <h2><?= $Movie->MovieTitle ?></h2>
                <h4><?= $Movie->MovieDirector ?></h4>
                <h4><?= $Movie->MovieNation ?></h4>
                <h4><?= $Movie->MovieYear ?></h4>
                <ul><?php
                    foreach ($Movie->genres as $genre) { ?>
                        <li><?= $genre->genName ?></li>
                    <?php } ?>
                </ul>
                <h4>anni passati dal rilascio: <?= $Movie->getTimePassed()?></h4>
                
            </div><?php
        }?>
        
    </div>
</body>
</html>
