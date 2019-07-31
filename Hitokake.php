<?php
//クラスの分け方に正解はない
require_once('Pokemon.php');
//継承にはextendsを使う

//Pokemonクラスを継承したヒトカゲクラス
//継承される側（この場合Pokemon）を親クラスという
//継承する側（この場合HitoKage）を子クラスという
//継承のルール
　//子クラス is a 親クラス
　//親クラス has 子クラス
//子クラスは親クラスのプロパティとメソッドを持っている
class Hitokage extends Pokemon{

}

$hitokage =  new Hitokage('あつし'); 