<?php

require_once 'User.php';

$user = file_get_contents('store.data');
$user = unserialize($user);

echo $user->name();

