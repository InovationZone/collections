<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 10:02
 */

class Musica
{
    private $nome;
    private $vezesTocada;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->vezesTocada = 0;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return int
     */
    public function getVezesTocada()
    {
        return $this->vezesTocada;
    }

    public function tocar()
    {
        echo "Tocando música: " . $this->getNome() . "\n";

        $this->vezesTocada++;
    }

    public function __toString()
    {
        return $this->nome;
    }

}