<?php

$pdo = new PDO(
    'sqlite:./db',
    null,
    null
);

// TODOテーブル
$sql = 'CREATE TABLE Todo (
	title text,
	description text,
	status integer 
)';

// create文の実行
$result = $pdo->query($sql);

if ($result) {
    echo 'success';
} else {
    echo 'fail';
}

//最後に閉じる
$pdo = null;

