<?php

require_once './dbhelper.php';
require_once './codehelper.php';

$conn = getDb();

// クエリを処理
$id = intval($_GET['id']);

// アイテムを取得
$item = getItem($conn, $id);
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
        <div class="is-flex">
          <h1 class="title mr-3">詳細データ</h1>
          <a class="button is-primary is-light" href="./index.php">
            戻る
          </a>
        </div>
        <form action="./update.php" method="post">
          <div class="field">
            <label class="label">識別番号</label>
            <div class="control">
              <input class="input" type="number" name="id" placeholder="category" value="<?php echo $item['id']; ?>" readonly required />
            </div>
          </div>
          <div class="field">
            <label class="label">項目</label>
            <div class="control">
              <input class="input" type="text" name="category" placeholder="category" value="<?php echo $item['category']; ?>" required />
            </div>
          </div>
          <div class="field">
            <label class="label">金額</label>
            <div class="control">
              <input class="input" type="number" name="price" placeholder="0" value="<?php echo $item['price']; ?>" required />
            </div>
          </div>
          <div class="field">
            <label class="label">メモ</label>
            <div class="control">
              <input class="input" type="text" name="note" placeholder="memo" value="<?php echo $item['note']; ?>" />
            </div>
          </div>
          <div class="field">
            <p class="control">
              <button type="submit" class="button is-success">update</button>
            </p>
          </div>
        </form>
      </section>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>accountbook-for-php</p>
      </div>
    </footer>
  </body>
</html>
