<?php

function __autoload($name) {
    echo '__autoload called, ', $name , PHP_EOL;

    $filename = $name . '.php';
    require $filename;
}

//定義されていないクラスを参照した場合は、__autoload関数が呼び出される。
$counter = new Counter();
?>

<br/>
<br/>
<?php echo $counter->get(), PHP_EOL; ?>
<br/>
<?php echo $counter->get(), PHP_EOL; ?>
<br/>
<?php echo $counter->get(), PHP_EOL; ?>
<br/>
<?php echo $counter->get(), PHP_EOL; ?>

