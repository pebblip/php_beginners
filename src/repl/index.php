<?php

/**
 * コマンドラインで以下のように実行。
 * php -a Orange.php
 */
while (true) {
    echo ">";

    $line = fgets(STDIN);

    $args = preg_split('/\s+/', $line);

    echo $line, PHP_EOL;
}