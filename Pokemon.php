<?php
//クラス
//プロパティ
//メソッド

//クラス === 設計図
class Pokemon
{
    public $level; //プロパティ＝＝＝変数定義,属性
    private $name;

    //メソッド　ー　振る舞い（ポケモンのできる動作）
    public function attack() {
        echo '攻撃します';
    }
    //アクセス修飾子 - アクセスできる範囲を制限する
    //public,protected,private
    //public - どこからでもアクセス可能
    //protected - 子クラスからアクセス可能
    //private - 自分だけしかアクセスができない

    public function __construct($name)
{
    //$this === このクラスのインスタンス
    //ポケモンクラスのインスタンスのnameプロパティに変数$nameを代入
    $this->name = $name;
}
    //private $nameをこのクラス外から呼び出す方法
    public function getName(){
        return $this->name;
    }
}
    
//インスタンス化
//$Pokemonという変数にPokemonクラスのインスタンスを代入
//new Class名()でインスタンス化
$pokemon = new Pokemon('ピカチュウ');

//インスタンス化すると、設計図にある、プロパティとメソッドを使える
//インスタンス->プロパティ名 / プロパティにアクセス
//インスタンス->メソッド名() / メソッドにアクセス
// -> アロー演算子「の」っていう意味

 $pokemon->level = 3; //これを言語化すると、ポケモンインスタンスのlevelに３を代入
echo $pokemon->level;

//ポケモンインスタンスのattackメソッド
 $pokemon->attack();

 //ポケモンインスタンス
 //$pokemon->name = 'ピカチュウ';　しかしここではpriveteのためできない
 //echo $pokemon->name;

//コンストラクタ・・・インスタンス化した時に自動で呼ばれるメソッド
//書き方  __construct


//ポケモンインスタンスのnameにピカチュウを代入
echo $pokemon->getName();

//インスタンスは何個でも作れる
$fushigidane = new Pokemon('フシギダネ');
$Zenigame = new Pokemon('ゼニガメ');