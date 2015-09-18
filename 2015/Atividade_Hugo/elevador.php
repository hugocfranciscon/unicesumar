<?php
class elevador {
	
	private $andarElevador;
	
	public function setAndarElevador($andarElevador) {
		$this->andarElevador = $andarElevador;
	}
	
	public function getAndarElevador() {
		return $this->andarElevador;
	}
	
	public function chamaElevador($andar) {
		
		echo "Pessoa está no " . $andar . "º andar. Elevador está no " . $this->andarElevador . "º andar \n";
		echo "Pessoa chama o elevador. Elevador está no " . $this->andarElevador . "º andar \n";

		if ($andar > $this->andarElevador) {
			
			for ($i = $this->andarElevador; $i <= $andar; $i++) {				
				echo "Pessoa está no " . $andar . "º andar. Elevador está no " . $i . "º andar \n";				
				$this->andarElevador = $andar;				
			}
						
		} else if ($andar < $this->andarElevador) {			
			
			for ($i = $this->andarElevador; $i >= $andar; $i--) {				
				echo "Pessoa está no " . $andar . "º andar. Elevador está no " . $i . "º andar \n";				
				$this->andarElevador = $andar;				
			}
			
		} else {
						
			echo "Pessoa está no " . $andar . "º andar. Elevador está no " . $this->andarElevador . "º andar \n";
									
		}
	}
	
	public function entraElevador() {
		
		echo "Pessoa entra no elevador. Elevador está no " . $this->andarElevador . "º andar. \n";
				
	}
	
	public function chamaAndar($andar) {
		
		echo "Pessoa aperta o " . $andar . "º andar. Elevador está no " . $this->andarElevador . "º andar \n";
		
		if ($andar > $this->andarElevador) {
		
			for ($i = $this->andarElevador; $i <= $andar; $i++) {		
				echo "Pessoa está no elevador. Elevador está no " . $i . "º andar \n";
				$this->andarElevador = $andar;		
			}
				
		} else if ($andar < $this->andarElevador) {
				
			for ($i = $this->andarElevador; $i >= $andar; $i--) {		
				echo "Pessoa está no elevador. Elevador está no " . $i . "º andar \n";				
				$this->andarElevador = $andar;		
			}
		
		} else {
						
			echo "Pessoa está no elevador. Elevador está no " . $this->andarElevador . "º andar \n";
						
		}
	}
	
	public function desceElevador() {
		
		echo "Pessoa sai do elevador. Elevador está no " . $this->andarElevador . "º andar. \n";
		echo "Pessoa está no " . $this->andarElevador . "º andar. Elevador está no " . $this->andarElevador . "º andar \n";
		
	}	
}