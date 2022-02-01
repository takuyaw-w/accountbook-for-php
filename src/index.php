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
              <input class="input" type="text" placeholder="category" />
            </div>
          </div>
          <div class="field">
            <label class="label">金額</label>
            <div class="control">
              <input class="input" type="number" placeholder="0" />
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
          <a class="button is-primary is-light" href="./summary.php"
            >集計を行う</a
          >
        </div>
        <table class="table is-striped is-fullwidth">
          <thead>
            <tr>
              <th style="width: 20px">#</th>
              <th>項目</th>
              <th>金額</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>3</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>4</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>5</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>6</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>7</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>8</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>9</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>10</td>
              <td>テスト</td>
              <td>1000</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>accountbook-for-php</p>
      </div>
    </footer>
  </body>
</html>
