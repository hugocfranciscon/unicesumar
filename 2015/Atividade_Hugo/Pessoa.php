<?php

class Pessoa
{

    protected $andarAtualPessoa;

    public function __construct($andarAtualPessoa)
    {
        $this->andarAtualPessoa = $andarAtualPessoa;
    }

    public function chamaElevador()
    {
        echo "Pessoa chama o elevador. Pessoa est� no " . $this->andarAtualPessoa . "� andar \n";
        Elevador::getInstance()->irParaOAndar($this->andarAtualPessoa);
    }

    public function entrarNoElevador()
    {
        echo "Pessoa entra no elevador. Pessoa est� no " . $this->andarAtualPessoa . "� andar \n";
        Elevador::getInstance()->pessoaEntrar($this);
    }

    public function vaiParaAndar($andar)
    {
        echo "Pessoa chama o " . $andar . "� andar. Pessoa est� no " . $this->andarAtualPessoa . "� andar. \n";
        Elevador::getInstance()->irParaOAndar($andar);
        $this->andarAtualPessoa = $andar;
    }

    public function sairElevador()
    {
        echo "Pessoa sai do elevador. Pessoa est� no " . $this->andarAtualPessoa . "� andar \n";
        Elevador::getInstance()->pessoaSair($this);
    }
}