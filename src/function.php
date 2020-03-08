<?php

$array = [1, 2, 3, 4, 5, 6];

//array_map は関数を引数として受け取る関数。このような関数を高階関数と呼ぶ
$evens = array_map(function ($e) {
    return $e * 2;
}, $array);

//createCounter関数は関数を戻り値として返す高階関数。
function createCounter() {
    $count = 0;
    return function() use (&$count) {
        $current = $count;
        $count = $count + 1;
        return $current;
    };
}

$counter = createCounter();
?>

<?php echo 'evens = ', implode(',', $evens); ?>

<br/>

<?php echo 'count=', $counter(); ?>
<br/>
<?php echo 'count=', $counter(); ?>
<br/>
<?php echo 'count=', $counter(); ?>



