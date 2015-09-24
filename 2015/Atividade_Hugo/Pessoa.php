<?php
class Pessoa {
	protected $andarAtualPessoa;
	
	public function __construct($andarAtualPessoa) {
		$this->andarAtualPessoa = $andarAtualPessoa;
	}
	
	public function entrarNoElevador() {				
		echo "Pessoa entra no elevador. \n";
		Elevador::getInstance ()->receberPessoa ($this);		
	}
	
	public function sairElevador() {
		echo "Pessoa sai do elevador. \n";
		Elevador::getInstance ()->removerPessoa ($this);
	}
	
	public function chamaElevador() {
		echo "Pessoa chama o elevador. \n";
		Elevador::getInstance ()->irParaOAndar ($this->andarAtualPessoa);
	}
	
	public function vaiParaAndar($andar) {
		echo "Pessoa chama andar. \n";
		Elevador::getInstance ()->irParaOAndar ($andar);
	}
	
}