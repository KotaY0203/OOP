<?php
require_once('Hitokage.php');
echo '<br>';
class Trainer{
　
    private $pokemons = []; //privateはこのクラス内からしかアクセスできない
    public function getPokemon(){

    $this->pokemons['ゼニガメ'] = new Pokemon('ゼニガメ');
    }

    public function callPokemon($name){
        return $this->pokemons[$name];
    }
}

$trainer = new Trainer();
$trainer->getPokemon();

$pokemon = $trainer->callPokemon('ゼニガメ');

$pokemon->attack();

//$trainer->favoritePokemon->attack();

