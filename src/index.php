<?php

require_once './dbhelper.php';
require_once './codehelper.php';

$conn = getDb();
// テーブルを作成
createTable($conn);

// リクエストがPOST=項目、金額入力されたとみて、テーブルにデータ追加
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $category = $_POST['category'];
  $price = intval($_POST['price']);
  addItem($conn, $category, $price);
  header("Location: http://{$_SERVER['HTTP_HOST']}");
  exit();
}

// アイテムを10件取得
$items = getItems($conn, 10);
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>accountbook-for-php</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"
    />
  </head>
  <body>
    <section class="hero is-warning">
      <div class="hero-body">
        <p class="title">accountbook-for-php</p>
        <p class="subtitle">study php</p>
      </div>
    </section>
    <div class="container">
      <section class="section">
        <h1 class="title">項目/金額入力</h1>
        <form action="./index.php" method="post">
          <div class="field">
            <label class="label">項目</label>
            <div class="control">
              <input class="input" type="text" name="category" placeholder="category" required />
            </div>
          </div>
          <div class="field">
            <label class="label">金額</label>
            <div class="control">
              <input class="input" type="number" name="price" placeholder="0"  required />
            </div>
          </div>
          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success">submit</button>
            </p>
          </div>
        </form>
      </section>

      <section class="section">
        <div class="is-flex">
          <h1 class="title mr-3">最新の10件</h1>
          <a class="button is-primary is-light" href="./summary.php">
            集計を行う
          </a>
        </div>
        <?php if(empty($items)) : ?>
          <p>参照できるアイテムが存在しません。
        <?php else : ?>
          <table class="table is-striped is-fullwidth">
            <thead>
              <tr>
                <th style="width: 20px">#</th>
                <th>項目</th>
                <th>金額</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($items as $key => $val) : ?>
                <tr>
                  <td><?php echo h($val['id']) ?></td>
                  <td><?php echo h($val['category']); ?></td>
                  <td><?php echo h($val['price']); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </section>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>accountbook-for-php</p>
      </div>
    </footer>
  </body>
</html>
