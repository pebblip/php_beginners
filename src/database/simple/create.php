<?php

$pdo = new PDO(
    'sqlite:./db',
    null,
    null
);

// テーブル作成のSQLを作成
$sql = 'CREATE TABLE IF NOT EXISTS Person (
	name text,
	sex integer,
	age integer,
	address text,
	registered_date text
)';

// create文の実行
$result = $pdo->query($sql);

if ($result) {
    echo 'success';
}
else {
    echo 'fail';
}

//最後に閉じる
$pdo = null;

