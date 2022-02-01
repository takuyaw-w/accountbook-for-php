<?php
    $aaaa = json_encode([100,200,300,400]);
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
        <div id="piechart" style="width: 100%; height: 600px;"></div>
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
            const data = google.visualization.arrayToDataTable([
                ['品目', '値段'],
                ['a', 2130],
                ['b', 45321],
                ['c', 5647],
            ]);

            const a = <?php echo $aaaa; ?>;
            console.log(a);

            const options = { title: '割合' };
            const chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
  </body>
</html>
