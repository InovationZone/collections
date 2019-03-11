<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 10:25
 */

require 'Album.php';
require 'Musica.php';

$albuns = new SplObjectStorage();

$divide = new Album("Divide");

$albuns->attach($divide);

$scorpion = new Album("Scorpion");

$albuns->attach($scorpion);


$musicaDvivide = new SplFixedArray(2);
$musicaDvivide[0] = new Musica('Shape of You');
$musicaDvivide[1] = new Musica('Casttle on the Hill');

$musicasScorpion = new SplFixedArray(3);
$musicasScorpion[0] = new Musica("Peak");
$musicasScorpion[1] = new Musica("Summer Games");
$musicasScorpion[2] = new Musica("Jaded");

$albuns[$divide] = $musicaDvivide;
$albuns[$scorpion] = $musicasScorpion;

foreach ($albuns as $album) {
    echo "Album: " . $album->getNome() . "\n";

    foreach ($albuns[$album] as $musica) {
        echo "Música: " . $musica->getNome() . "\n";
    }

    echo "\n";
}