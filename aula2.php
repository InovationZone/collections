<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 09:19
 */

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);

$musicas[0] = 'One Dance';
$musicas[1] = 'Closer';
$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Yourself';

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->avancarMusica();

$tocador->avancarMusica();

echo $tocador->tocarMusica();
