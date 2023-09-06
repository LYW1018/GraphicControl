<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'WebIndex'])->name('Dashboard.WebIndex');

Route::get('/', function () {
    return view('welcome');

});
Route::get('/level_0', function () {
    $x = 17;
    $y = 8;
    echo($x + $y).'<br>'; # 25
    echo($x - $y).'<br>'; # 9
    echo($x * $y).'<br>'; # 136
    echo($x / $y).'<br>'; # 2.125
    echo($x % $y).'<br>'; # 1
});
Route::get('/level_1', function () {
    $a = "Hello";
    $b = $a . "world";
    echo $b . '<br>'; // Hello world
    $x = "Hello";
    $x .= "world";
    echo $x . '<br>';  // Hello world
});

Route::get('/level_2', function () {
    $x = 17;
    $y = '17';
    echo ($x == $y) . '<br>'; # true 為 1
    echo ($x === $y) . '<br>'; # false 為空白
    echo ($x != $y) . '<br>'; # false 為空白
    echo ($x !== $y) . '<br>'; # true 為 1
    $a = 17;
    $b = 8;
    echo ($a > $b) . '<br>'; # true 為 1
    echo ($a < $b) . '<br>';# false 為空白
});
Route::get('/level_3', function () {
    $t = date('H');
    dd($t);
});
Route::get('/level_4', function () {
    $t = date("H");
    if ($t == "20") {
        echo "等於 20";
    } else {
        echo "不等於 20";
    }
});
Route::get('/level4', function () {
    dd(guid());
});
Route::get('/level_5', function () {
    $t = date("H");
    if ($t == "20") {
        echo "等於 20";
    } else if ($t < "15") {
        echo "小於 15";
    } else {
        echo "未知";
    }
});
Route::get('/level_6', function () {
    $a = 123;
    switch ($a){
        case 1:
            echo '是 1';
            break;
        case 12:
            echo '是 12';
            break;
        case 123:
            echo '是 123';
            break;
        default:
            echo '都不是';
    }
});
Route::get('/level_7', function () {
    $x = 1;
    while ($x <= 5) {
        echo "這個數字是: " . $x . '<br>';
        $x++;
    }
});
Route::get('/level_8', function () {
    $x = 1;
    do {
        echo "這個數字是: " . $x . '<br>';
        $x++;
    } while ($x <= 6);
});

//累加
Route::get('/level_9', function () {
    for ($i = 0; $i < 10; $i++) {
        echo "數字是: " . $i . '<br>';
    }
});

Route::get('/level_10', function () {
    $colors = array('red', 'green', 'blue', 'yellow');
    foreach ($colors as $value) {
        echo $value . '<br>';
    }
});
Route::get('/level_11', function () {
    function sayHi() {
        echo "Hello world";
    }
    sayHi();
});
Route::get('/level_12', function () {
    function Familyname($fname){
        echo "$fname ZZZ.<br>";
    }
    Familyname('Li');
    Familyname('Hong');
    Familyname('Tao');
    Familyname('Xaio Mei');
    Familyname('Jian');
});
Route::get('/level_13', function () {
    function Familyname($fname, $year){
        echo "$fname ZZZ. $year<br>";
    }
    Familyname('Li', 2012);
    Familyname('Hong', 12);
    Familyname('Tao', 32);
    Familyname('Xaio Mei', 11);
    Familyname('Jian', 42);
});
Route::get('/level_14', function () {
    function setHeight($minheight=50){
        echo "高度: $minheight <br>";
    }
    setHeight(250);
    setHeight();
});
Route::get('/level_15', function () {
    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sum(5, 10) . '<br>';
    echo "7 + 13 = " . sum(7, 13) . '<br>';
    echo "2 + 4 = " . sum(2, 4) . '<br>';
});
Route::get('/level_16', function () {
    $cars = array('Porsche', 'BMW', 'Volvo');
    echo "想買 $cars[0] <br>";
});
Route::get('/level_17', function () {
    $cars = array('Porsche', 'BMW', 'Volvo');
    echo "數量: " . count($cars) . '<br>';
});
Route::get('/level_18', function () {
    $age = array('Bill' => 63, 'Steve' => 56, 'Elon' => 47);
    echo "Elon is " . $age['Elon'].' years old.';
});
Route::get('/level_19', function () {
    $Cars = array('Porsche', 'BMW', 'Volvo');
    $arrIndex = count($Cars);
    for ($i = 0; $i < $arrIndex; $i++) {
        echo $Cars[$i] . '<br>';
    }
});
Route::get('/level_20', function () {
    $age = array('Bill' => 63, 'Steve' => 56, 'Elon' => 48);
    foreach ($age as $key => $value) {
        echo "Key=" . $key . ", Value=" . $value . '<br>';
    }
});
Route::get('/level_21', function () {
    $cars = array('Porsche', 'BMW','Volvo');
    sort($cars);
    dd($cars);
});
Route::get('/level_22', function () {
    $cars = array('Porsche', 'BMW','Volvo');
    rsort($cars);
    dd($cars);
});
Route::get('/level_23', function () {
   echo strlen('car accident').'<br>';
   echo strpos("car accident","car");
});
