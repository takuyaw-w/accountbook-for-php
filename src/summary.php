<?php
    require_once './codehelper.php';
    require_once './dbhelper.php';

    $conn = getDb();
    $summries = getSummaries($conn);
    $js_summries = json_encode($summries);
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
        <h1 class="title">集計</h1>
        <div id="piechart" style="border: 1px solid #000;width: 100%; height: 400px;"></div>
        <?php if(empty($summries)) : ?>
          <p>参照できるアイテムが存在しません。
        <?php else : ?>
          <table class="table is-striped is-fullwidth">
            <thead>
              <tr>
                <th>項目</th>
                <th>合計</th>
                <th>平均</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($summries as $key => $val) : ?>
                <tr>
                  <td><?php echo h($val['category']); ?></td>
                  <td><?php echo h($val['sum']); ?></td>
                  <td><?php echo h(avg($val)); ?></td>
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
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            const summries = <?php echo $js_summries; ?>;
            const d = summries.map((val) => {
              return [val.category, Math.trunc(val.sum)]
            })
            const data = google.visualization.arrayToDataTable([
                ['品目', '値段'],
                ...d
            ]);

            const options = { title: '割合' };
            const chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
  </body>
</html>
