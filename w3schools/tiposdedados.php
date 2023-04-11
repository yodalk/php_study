<?php

# Tipo de dados flutuante
$versao = 1.0;
echo "Tipo de dado " . var_dump($versao);

# Array simples
$frutas = array("Morango", "Banana", "Maçã");
foreach($frutas as $f) {
    echo "Frutas que gostamos: {$f} \n";
}

# Array associativo
$idade = array("Robson" => 30, "Bianca" => 25, "Nicolas" => 4);
foreach($idade as $pessoa => $idade) {
    print_r("O {$pessoa} tem {$idade} de idade\n");
}

# Objetos são criados como classe
class Carro {
    public $modelo;
    public $cor;
    public $ano;
}