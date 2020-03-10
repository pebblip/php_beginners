<html>
<head>
  <title>Todoサンプル</title>
</head>
<body>

<?php
$pdo = new PDO(
    'sqlite:./db',
    null,
    null
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    //$sql = 'insert into Todo(title, status, description) values (?, ?, ?);';
    $sql = "insert into Todo(title, description, status) values (?, ?, ?);";

    $stmt = $pdo->prepare($sql);

    if ($stmt === false) {
        echo 'alkd';
    }
    $stmt->execute([$title, $description]);
}

$stmt = $pdo->query('select * from Todo');

?>

<style>
  html, body {
    width: 100vh;
    height: 100vh;
  }
  #id {
    display: flex;
    flex-direction: column;
  }

  #title {
    font-size: 2rem;
  }

</style>

<div id="contents">
  <span id="title">簡易TODOアプリ</span>

  <div id="list">
    <table>
      <thead>
      <tr>
        <th>タイトル</th>
        <th>状態</th>
        <th>説明</th>
        <th>締切日</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($stmt as $row): ?>
        <tr>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['status']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['deadline_date']; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

  </div>

  <div id="form">
    <form method="post">
      <div>
        <label>タイトル</label><input type="text" name="title">
      </div>
      <div>
        <label>説明</label><input type="textarea" name="description">
      </div>
      <div>
        <input type="submit" value="登録">
      </div>
    </form>
  </div>

</body>
</html>

</div>
<?php
