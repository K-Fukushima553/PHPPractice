<?php //htmlを書かない場合は閉じタグは省略する
declare(strict_types=1);//引数の型の厳密な指定 式の途中には入れれない
$name = 'Fukushima';

echo 'こんにちは' . PHP_EOL; //PHP_EOLはあらかじめ定義されている改行を表す定数
echo "hello it's \"$name\""  . PHP_EOL; //変数の埋め込みはダブル区ウォーテーションの中で シングルはバツ
//tab: \t
//
echo 'hi it\'s Fukushima' . PHP_EOL; 

//ヒアドキュメント
$name = 'Fukushima';
// $text = <<<'EOT'
// hello!
//  this is loooooong
// text!

// EOT;
// $text = <<<"EOT"
// hello! $name
//  this is loooooong
// text!

// EOT;
$text = <<<EOT
hello! $name
 this is loooooong
text!

EOT;

echo $text;


// 定数
define('NAME', 'Fukushima');
const LASTNAME = 'Kazuki';
echo NAME . ' ' . LASTNAME . PHP_EOL;

$data = <<<'Dtype'

"文字列(string)
数字(int)
浮動小数点数(float)
null 
真偽値(bool)
配列(array)
オブジェクト(object)"


Dtype;

echo $data;


$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);

//真偽値
$false = <<<'false'
 "false
 ±0、±0.0
 '0'
 ''
 null
 []"
 

 false;

 echo $false;

 //論理演算子
//  &&:かつ ||:または !:否定

//switchでif文を
$signal = 'pink';
switch($signal){
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'blue':
  case 'green':
    echo 'Go!' . PHP_EOL;
    break;
    default:
    echo 'Wrong signal!' . PHP_EOL;
    break;
    
}

//for文
for($i = 1; $i <= 5; $i++) {
  echo "$i - Hello" . PHP_EOL;
}
echo PHP_EOL;

//while文
$hp = 100;
while($hp > 0) {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
}
echo PHP_EOL;

//do-while文
$hp = -50;
do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while($hp > 0);
echo PHP_EOL;

//関数
function showAd($message = 'Ad')//Adはデフォルト値
{
  echo '--------------' . PHP_EOL;
  echo "----- $message -----" . PHP_EOL;
  echo '--------------' . PHP_EOL . PHP_EOL;
}

showAd('headerAd');
showAd();
showAd('footerAd') . PHP_EOL;

//返り値
// function sum($a, $b, $c)
// {
//   return $a + $b + $c; //returnで処理は終了
// }

// echo sum(10, 20, 30) . PHP_EOL;

//無名関数
$sum = function ($a, $b, $c){
  return $a + $b + $c; //returnで処理は終了
};

echo $sum(10, 20, 30) . PHP_EOL;

//引数の型の指定

function showInfo(string $name, int $score): void //関数内にreturnがない場合はvoidを指定
{
  echo $name . ':' . $score . PHP_EOL . PHP_EOL;
}

showInfo('fukushima', 5);

//null混同の型指定
function getAward(?int $score): ?string
{
  return $score >= 100 ? 'Gold Medal' . PHP_EOL . PHP_EOL : ($score >= 80  ? 'Silver Medal' : null) . PHP_EOL . PHP_EOL;
}

echo getAward(100);

$scores = [
  'first' => 90,
  'second' => 40,
  'third' => 70,
];

// var_dump($scores);
// print_r($scores);

foreach ($scores as $key => $score) {
  echo $key . '-' . $score . PHP_EOL;
}

echo '' . PHP_EOL;

//配列の展開
$moreScores = 
[
  50,
  80,
  'perfect',
  [48,53,45],
];

$scores = 
[
  43,
  96,
  ...$moreScores,
  100,
];

// print_r($scores);
echo $scores[5][1] . PHP_EOL  . PHP_EOL;

// 可変長引数
function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number){
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

// print_r(getStats(2,4,7,4));

// list($sum, $average) = getStats(1,5,3,6);
[$sum, $average] = getStats(1,5,3,6);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;

// echo sum(2, 4, 5, 4) . PHP_EOL . PHP_EOL;










