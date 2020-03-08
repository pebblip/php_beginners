<?php

require __DIR__ . '/vendor/autoload.php';

use Doctrine\Common\Collections\ArrayCollection;
use Example\Food\Fruits\Apple;

$apple = new Apple();

$collection = new ArrayCollection();
$collection->add('I');
$collection->add('love');
$collection->add('PHP');

?>

<?php
echo $apple->name();
?>

<hr/>

<?php
foreach ($collection as $e) {
    echo $e;
}

?>