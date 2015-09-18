<?php
/*
Exemplo de sa�da:
Pessoa est� no 3o andar. Elevador est� no 5o andar.
Pessoa chama o elevador. Elevador est� no 5 o andar.
Pessoa est� no 3o andar. Elevador est� no 4o andar.
Pessoa est� no 3o andar. Elevador est� no 3o andar.

Pessoa entra no elevador. Elevador est� no 3 o andar.

Pessoa aperta 8o andar. Elevador est� no 3o andar.
Pessoa est� no elevador. Elevador est� no 4o andar.
Pessoa est� no elevador. Elevador est� no 5o andar.
Pessoa est� no elevador. Elevador est� no 6o andar.
Pessoa est� no elevador. Elevador est� no 7o andar.
Pessoa est� no elevador. Elevador est� no 8o andar.
Pessoa sai do elevador. Elevador est� no 8 o andar.
Pessoa est� no 8o andar. Elevador est� no 8o andar
*/

spl_autoload_register(function($className){
	require $className . '.php';
});

$elevador = new elevador();

$elevador->setAndarElevador(5);

$elevador->chamaElevador(3);
$elevador->entraElevador();
$elevador->chamaAndar(8);
$elevador->desceElevador();

if ($elevador->getAndarElevador() == 8) {
	echo "Passou no teste \n";
} else {
	echo "N�o passou no teste \n";
}