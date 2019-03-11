<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 08:40
 */

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(2);

$musicas[0] = 'One Dance';
$musicas[1] = 'Closer';

$musicas->setSize(4);

$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Yourself';

//echo $musicas->getSize();

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->adicionarMusicaNoComecoDaPlayList('Havana');

$tocador->avancarMusica();

$tocador->removerMusicaDoComecoDaPlaylist();

echo $tocador->tocarUltimaMusicaTocada();