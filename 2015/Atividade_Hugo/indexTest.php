<?php
class indexTest extends PHPUnit_Framework_TestCase {
	
	public function setUp() {
		
		spl_autoload_register ( function ($class) {
			require $class . '.php';
		} );
		
	}
	
	public function testElevador() {		
		
		$pessoa = new Pessoa(3);		
		$this->assertEquals(5, Elevador::getInstance()->getAndarElevador());		
		
		$pessoa->chamaElevador();
		$this->assertEquals(3, Elevador::getInstance()->getAndarElevador());
		
		$pessoa->entrarNoElevador();
		$this->assertEquals(3, Elevador::getInstance()->getAndarElevador());
		
		$pessoa->vaiParaAndar(8);
		$this->assertEquals(8, Elevador::getInstance()->getAndarElevador());
		
		$pessoa->sairElevador();
		$this->assertEquals(8, Elevador::getInstance()->getAndarElevador());
		
	}
	
	/*
	public function testElevador() {
		
		$pessoa = new Pessoa(3);
		
		$this->assertEquals(5, 5);
		
		
		
		
		$this->assertEquals(5, 5);
		
		
	}
	*/
}	
