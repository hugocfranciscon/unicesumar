<?php
class Elevador {
	protected $andarElevador;
	protected $pessoas = array ();
	protected $andarDesejado;
	protected static $instance = NULL;
	
	public function getAndarElevador(){
		return $this->andarElevador;
	}	
	
	private function __construct() {
		$this->andarElevador = 5;
	}
	
	public static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new self ();
		}
		return self::$instance;
	}
	
	public function receberPessoa(Pessoa $pessoa) {
		$this->pessoas [] = $pessoa;
	}
	
	public function removerPessoa(Pessoa $pessoa) {
		foreach ( $this->pessoas as $index => $pessoaNoElevador ) {
			if ($pessoaNoElevador === $pessoa) {
				unset ( $this->pessoas [$index] );
			}
		}
	}
	
	public function irParaOAndar($andar){
		
		if ($andar > $this->andarElevador) {
		
			for ($i = $this->andarElevador; $i <= $andar; $i++) {		
				echo "Elevador está no " . $i . "º andar \n";
				$this->andarElevador = $andar;		
			}
				
		} else if ($andar < $this->andarElevador) {
				
			for ($i = $this->andarElevador; $i >= $andar; $i--) {		
				echo "Elevador está no " . $i . "º andar \n";				
				$this->andarElevador = $andar;		
			}
		
		} else {
						
			echo "Elevador está no " . $this->andarElevador . "º andar \n";
						
		}		 		
	}
	
}