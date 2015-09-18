<?php
/*
Exemplo de saída:
Pessoa está no 3o andar. Elevador está no 5o andar.
Pessoa chama o elevador. Elevador está no 5 o andar.
Pessoa está no 3o andar. Elevador está no 4o andar.
Pessoa está no 3o andar. Elevador está no 3o andar.

Pessoa entra no elevador. Elevador está no 3 o andar.

Pessoa aperta 8o andar. Elevador está no 3o andar.
Pessoa está no elevador. Elevador está no 4o andar.
Pessoa está no elevador. Elevador está no 5o andar.
Pessoa está no elevador. Elevador está no 6o andar.
Pessoa está no elevador. Elevador está no 7o andar.
Pessoa está no elevador. Elevador está no 8o andar.
Pessoa sai do elevador. Elevador está no 8 o andar.
Pessoa está no 8o andar. Elevador está no 8o andar
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
	echo "Não passou no teste \n";
}