<?php

require_once 'User.php';

$user = new User('doraemon', 200);
file_put_contents('store.data', serialize($user));