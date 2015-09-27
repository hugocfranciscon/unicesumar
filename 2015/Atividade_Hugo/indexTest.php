<?php

class indexTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        spl_autoload_register(function ($class)
        {
            require $class . '.php';
        });
    }

    public function testElevador()
    {
        
        /**
         * Testar o andar do elevador
         */
        $this->assertEquals(5, Elevador::getInstance()->getAndarElevador());
        
        $pessoa = new Pessoa(3);
        
        $pessoa->chamaElevador();
        /**
         * Testar o andar do elevador
         */
        $this->assertEquals(3, Elevador::getInstance()->getAndarElevador());
        
        /**
         * Testar se existem pessoas no elevador - nesse momento não deve existir
         */
        $this->assertFalse(Elevador::getInstance()->temPessoas());
        
        $pessoa->entrarNoElevador();
        /**
         * Testar o andar do elevador
         */
        $this->assertEquals(3, Elevador::getInstance()->getAndarElevador());
        
        /**
         * Testar se existem pessoas no elevador - nesse momento deve existir 1 pessoa
         */
        $this->assertTrue(Elevador::getInstance()->temPessoas());
        
        $pessoa->vaiParaAndar(8);
        /**
         * Testar o andar do elevador
         */
        $this->assertEquals(8, Elevador::getInstance()->getAndarElevador());
        
        $pessoa->sairElevador();
        /**
         * Testar o andar do elevador
         */
        $this->assertEquals(8, Elevador::getInstance()->getAndarElevador());
        
        /**
         * Testar se existem pessoas no elevador - nesse momento não deve existir
         */
        $this->assertFalse(Elevador::getInstance()->temPessoas());
    }
}	
