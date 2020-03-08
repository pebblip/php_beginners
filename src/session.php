<?php

session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
else {
    $_SESSION['count']++;
}

class Box {
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }
    public function value() {
        return $this->value;
    }
}

if (!isset($_SESSION['box'])) {
    $box = new Box(4);
    $_SESSION['box'] = $box;
}
?>

<?php echo 'count = ', $_SESSION['count']; ?>

<?php echo 'box vlaue = ', $_SESSION['box']->value(); ?>
