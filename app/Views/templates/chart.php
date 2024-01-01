<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .chart {
    width: 400px;
    margin: 50px auto;
  }
  .bar {
    display: inline-block;
    width: 20px;
    margin-right: 5px;
    background-color: #007bff;
  }
  .bar-label {
    display: inline-block;
    width: 50px;
    text-align: center;
  }
</style>
</head>
<body>
<div class="chart" id="chart">
</div>

<script>
  const data = {
    adminA: 7,
    adminB: 4,
    adminC: 9,
    adminD: 5,
  };

  const chart = document.getElementById('chart');

  for (let key in data) {
    const bar = document.createElement('div');
    bar.classList.add('bar');
    bar.style.height = data[key] * 20 + 'px';
    const barLabel = document.createElement('div');
    barLabel.classList.add('bar-label');
    barLabel.textContent = key;
    chart.appendChild(bar);
    chart.appendChild(barLabel);
  }
</script>
</body>
</html>
