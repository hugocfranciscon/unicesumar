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
        echo "Pessoa chama o elevador. Pessoa está no " . $this->andarAtualPessoa . "º andar \n";
        Elevador::getInstance()->irParaOAndar($this->andarAtualPessoa);
    }

    public function entrarNoElevador()
    {
        echo "Pessoa entra no elevador. Pessoa está no " . $this->andarAtualPessoa . "º andar \n";
        Elevador::getInstance()->pessoaEntrar($this);
    }

    public function vaiParaAndar($andar)
    {
        echo "Pessoa chama o " . $andar . "º andar. Pessoa está no " . $this->andarAtualPessoa . "º andar. \n";
        Elevador::getInstance()->irParaOAndar($andar);
        $this->andarAtualPessoa = $andar;
    }

    public function sairElevador()
    {
        echo "Pessoa sai do elevador. Pessoa está no " . $this->andarAtualPessoa . "º andar \n";
        Elevador::getInstance()->pessoaSair($this);
    }
}