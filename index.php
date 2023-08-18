<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA Compatible" content="IE-edge">
      <meta name="viewpoint" content="width-device-width", initial-scale-1.0>
      <title>Data Analysis and Visualization</title>
      <link rel="stylesheet" href="style.css">
      <!-- Add Chart.js library -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  </head>
  <body>
      <div class="container">
          <h1>Data Analysis and Visualization</h1>
          <div class="chart-container">
              <!-- Chart for total earnings and total withdrawal -->
              <canvas id="earningsWithdrawalChart"></canvas>
              <!-- Chart for earnings by country -->
              <canvas id="earningsByCountryChart"></canvas>
              <!-- Add more chart containers as needed -->
          </div>
          <div class="data-summary">
              <h2>Data Summary</h2>
              <p>Total Earnings: <span id="total_earnings"></span></p>
              <p>Total Withdrawal: <span id="total_withdrawal"></span></p>
              <p>Total Number of Users: <span id="totalUsers"></span></p>
              <p>Currency: <span id="currency"></span></p>
              <!-- Add more data summary as needed -->
          </div>
      </div>
  
      <script>
          // Output PHP variables into JavaScript variables
          <?php include 'data.php'; ?>
        
  
          // Rest of your JavaScript code for Chart.js and data updates
          // ...
      </script>
      <script src="script.js"></script>
  
  </body>
</html>