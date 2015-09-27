<?php

class Elevador
{

    private $andarElevador;

    private $pessoas = array();

    private $andarDesejado;

    private static $instance = NULL;

    private function __construct()
    {
        $this->andarElevador = 5;
    }

    public function getAndarElevador()
    {
        return $this->andarElevador;
    }

    public function temPessoas()
    {
        return count($this->pessoas) > 0;
    }

    public static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function pessoaEntrar(Pessoa $pessoa)
    {
        $this->pessoas[] = $pessoa;
    }

    public function pessoaSair(Pessoa $pessoa)
    {
        foreach ($this->pessoas as $index => $pessoaNoElevador) {
            if ($pessoaNoElevador === $pessoa) {
                unset($this->pessoas[$index]);
            }
        }
    }

    public function irParaOAndar($andar)
    {
        if ($andar >= $this->andarElevador) {
            
            for ($i = $this->andarElevador; $i <= $andar; $i ++) {
                echo "Elevador est� no " . $i . "� andar. ";
                if ($this->temPessoas()) {
                    echo "Pessoa est� no " . $i . "� andar. ";
                } else {
                    echo "Pessoa est� no " . $andar . "� andar. ";
                }
                echo "\n";
                $this->andarElevador = $andar;
            }
        } else 
            if ($andar < $this->andarElevador) {
                
                for ($i = $this->andarElevador; $i >= $andar; $i --) {
                    echo "Elevador est� no " . $i . "� andar.";
                    if ($this->temPessoas()) {
                        echo "Pessoa est� no " . $i . "� andar. ";
                    } else {
                        echo "Pessoa est� no " . $andar . "� andar. ";
                    }
                    echo "\n";
                    $this->andarElevador = $andar;
                }
            }
    }
}