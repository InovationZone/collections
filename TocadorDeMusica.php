<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 08:45
 */

class TocadorDeMusica {

    private $musicas;
    private $historico;
    private $filaDeDownloads;
    private $ranking;

    public function __construct()
    {
        $this->musicas = new SplDoublyLinkedList(); //lista ligada, o item é ligado com o anterior e com o próximo;
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->ranking = new Ranking();
    }

    public function adicionarMusicas(SplFixedArray $musicas)
    {
        //rewind - volta o ponteiro para o início do array
        for($musicas->rewind(); $musicas->valid(); $musicas->next()){
            $this->musicas->push($musicas->current());
        }

        $this->musicas->rewind();
    }

    public function tocarMusica()
    {
        if($this->musicas->count() === 0){
           return  "Erro, nenhuma música no tocador";
        }

        $this->musicas->current()->tocar();

    }

    public function adicionarMusica($musica)
    {
        $this->musicas->push($musica);
    }

    public function avancarMusica()
    {
        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }

        $this->musicas->next();
    }

    public function voltarMusica()
    {
        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }

        $this->musicas->prev();
    }

    public function exibirMusicas()
    {
        for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {

            echo "Musica " . $this->musicas->current() . "\n";
            $this->historico->push($this->musicas->current());
        }
    }

    public function totalDeMusicas()
    {
        return $this->musicas->count();
    }

    public function adicionarMusicaNoComecoDaPlayList($musica)
    {
        $this->musicas->unshift($musica);
    }

    public function removerMusicaDoComecoDaPlaylist()
    {
        $this->musicas->shift();
    }

    public function removerMusicaDoFinalDaPlaylist()
    {
        $this->musicas->pop();
    }

    public function tocarUltimaMusicaTocada()
    {
        echo $this->historico->pop();
    }

    public function baixarMusicas()
    {

        if($this->musicas->count() > 0){
            for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {
                $this->filaDeDownloads->push($this->musicas->current());
            }
            //realiza o fifo - first in, first out
            //o stack realiza o lifo - last in, last out
            for ($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()){
                echo $this->filaDeDownloads->current() . "\n";
            }
        } else {
            echo "nenhuma música encontrada para baixar";
        }
    }

    public function exibeRanking()
    {
        foreach ($this->musicas as $musica) {
            $this->ranking->insert($musica);
        }

        foreach ($this->ranking as $musica) {
            echo $musica->getNome() . " - " . $musica->getVezesTocada() . "\n";
        }
    }

}