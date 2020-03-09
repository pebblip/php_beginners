<?php

$pdo = new PDO(
    'sqlite:./db',
    null,
    null
);

$pdos = $pdo->query('select * from Person');

?>

<table>
  <thead>
  <tr>
    <th>名前</th>
    <th>性別</th>
    <th>年齢</th>
    <th>住所</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($pdos as $row): ?>
  <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['sex'] == 1 ? '男性' : '女性';?></td>
    <td><?php echo $row['age'];?></td>
    <td><?php echo $row['address']; ?></td>
  </tr>
  <?php  endforeach; ?>
  </tbody>
</table>


