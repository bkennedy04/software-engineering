
<head>
    <title>Pie Chart</title>
	<script src="Chart.min.js"></script>
	   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="dashboard.css">

    <!-- Import jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <canvas id="myChart" height="200px"></canvas>
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
		  <div>

			<script>
					var ctx = document.getElementById("myChart");

					new Chart(ctx,{
						type:"pie",
				  data: {
				labels: [
					"Red",
					"Blue",
					"Yellow"
				],
				datasets: [{
						data: <?php include "firstphp.php";?>,
						backgroundColor: [
							"#FF6384"
						],
						hoverBackgroundColor: [
							"#FF6384",
							"#36A2EB",
							"#FFCE56"
						]
					}]
			},
						options: {
							animation:{
								animateScale:true
							},
					legend: {
					  display: true
					}
						}
					});
		  </script>
		  </div>
</body>