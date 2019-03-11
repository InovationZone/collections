<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 11/03/19
 * Time: 10:25
 */

class Album
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
}