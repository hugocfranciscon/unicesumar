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
		
		echo "Pessoa est� no " . $andar . "� andar. Elevador est� no " . $this->andarElevador . "� andar \n";
		echo "Pessoa chama o elevador. Elevador est� no " . $this->andarElevador . "� andar \n";

		if ($andar > $this->andarElevador) {
			
			for ($i = $this->andarElevador; $i <= $andar; $i++) {				
				echo "Pessoa est� no " . $andar . "� andar. Elevador est� no " . $i . "� andar \n";				
				$this->andarElevador = $andar;				
			}
						
		} else if ($andar < $this->andarElevador) {			
			
			for ($i = $this->andarElevador; $i >= $andar; $i--) {				
				echo "Pessoa est� no " . $andar . "� andar. Elevador est� no " . $i . "� andar \n";				
				$this->andarElevador = $andar;				
			}
			
		} else {
						
			echo "Pessoa est� no " . $andar . "� andar. Elevador est� no " . $this->andarElevador . "� andar \n";
									
		}
	}
	
	public function entraElevador() {
		
		echo "Pessoa entra no elevador. Elevador est� no " . $this->andarElevador . "� andar. \n";
				
	}
	
	public function chamaAndar($andar) {
		
		echo "Pessoa aperta o " . $andar . "� andar. Elevador est� no " . $this->andarElevador . "� andar \n";
		
		if ($andar > $this->andarElevador) {
		
			for ($i = $this->andarElevador; $i <= $andar; $i++) {		
				echo "Pessoa est� no elevador. Elevador est� no " . $i . "� andar \n";
				$this->andarElevador = $andar;		
			}
				
		} else if ($andar < $this->andarElevador) {
				
			for ($i = $this->andarElevador; $i >= $andar; $i--) {		
				echo "Pessoa est� no elevador. Elevador est� no " . $i . "� andar \n";				
				$this->andarElevador = $andar;		
			}
		
		} else {
						
			echo "Pessoa est� no elevador. Elevador est� no " . $this->andarElevador . "� andar \n";
						
		}
	}
	
	public function desceElevador() {
		
		echo "Pessoa sai do elevador. Elevador est� no " . $this->andarElevador . "� andar. \n";
		echo "Pessoa est� no " . $this->andarElevador . "� andar. Elevador est� no " . $this->andarElevador . "� andar \n";
		
	}	
}