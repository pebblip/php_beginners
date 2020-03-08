<?php

//spl_autoload_register関数により、複数のautoload関数を設定できる
spl_autoload_register(function ($class) {
    $filepath = $class. ".php";
    if (is_readable($filepath)) {
        include $filepath;
    }
});


spl_autoload_register(function ($class) {
    $filepath = __CLASS__ . "../lib/" . $class. ".php";
    if (is_readable($filepath)) {
        include $filepath;
    }
});


//定義されていないクラスを参照した場合は、__autoload関数が呼び出される。
$counter = new Counter();

$logger = new Logger();
?>

<h3>counter</h3>
<?php echo $counter->get(), PHP_EOL; ?>
<br/>
<?php echo $counter->get(), PHP_EOL; ?>

<h3>logger</h3>
<?php $logger->print('autoregister'); ?>

