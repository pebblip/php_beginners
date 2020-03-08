<?php

require_once 'food/fruits/Orange.php';
require_once 'food/fruits/Apple.php';

use Food\Fruits\Orange;
use Food\Fruits\Apple;

$orange = new Orange();
$apple = new Apple();

?>

<h3>フルーツ</h3>
<?php echo $orange->name(); ?>
<br/>
<?php echo $apple->name(); ?>
