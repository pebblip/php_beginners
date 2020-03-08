<?php
class Foo {

    public static function callByStatic() {
        static::staticHello();
    }

    public static function callBySelf() {
        self::staticHello();
    }

    public static function staticHello() {
        echo 'Foo,', 'Static Hello', PHP_EOL;
    }

    public function hello() {
        echo 'Foo,', 'Hello', PHP_EOL;
    }
}

class Bar extends Foo {

    public static function staticHello() {
        echo 'Bar,', 'Static Hello', PHP_EOL;
    }

    public function hello() {
        echo 'Bar,', 'Hello', PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
?>

<h3>Foo call static method</h3>
<?php Foo::callByStatic(); ?>
<br/>
<?php Foo::callBySelf(); ?>

<h3>Foo call instance method</h3>
<?php $foo->hello();?>

<br/>

<h3>Bar call static method</h3>
<?php Bar::callByStatic(); ?>
<br/>
<?php Bar::callBySelf(); ?>

<h3>Bar call instance method</h3>
<?php $bar->hello();?>




