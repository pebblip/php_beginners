<?php
$pdo = new PDO(
    'sqlite:./db',
    null,
    null
);

$today = date('Y-m-d');

$sql1
    = "insert into Person(name, sex, age, address, registered_date) values ('伊坂', 1, 48, '千葉', ${today})";
$sql2
    = "insert into Person(name, sex, age, address, registered_date) values ('米澤', 1, 42, '岐阜', ${today})";
$sql3
    = "insert into Person(name, sex, age, address, registered_date) values ('小川', 2, 57, '岡山', ${today})";
$sql4
    = "insert into Person(name, sex, age, address, registered_date) values ('三浦', 2, 43, '東京', ${today})";

$result1 = $pdo->exec($sql1);
$result2 = $pdo->exec($sql2);
$result3 = $pdo->exec($sql3);
$result4 = $pdo->exec($sql4);

?>

<?php echo $result1; ?>
<br/>
<?php echo $result2; ?>
<br/>
<?php echo $result3; ?>
<br/>
<?php echo $result4; ?>



