<?php ;?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>D3.js Updating Radar Chart</title>

		<!-- Jquery -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

		<!-- Google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- D3.js -->
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-legend/1.3.0/d3-legend.js" charset="utf-8"></script>
	
	</head>
	<body>

	<?php include 'phpmysqlconnect.php' ?>

	<script>
		function fetchdata(){
		 $.ajax({
		  url: 'phpmysqlconnect.php',
		  type: 'post',
		  success: function(data){
		    // Perform operation on the return value
		    // alert(data);	

	   		// Set result to div or target
	   		$('#fbi-result').html(data);

		  }
		 });
		}
		// interval fetch
		$(document).ready(function(){
		 setInterval(fetchdata,5000);
		});
	</script>

	<div id="fbi-result"></div>

	  <div id="radarChart"></div>
      <script src="radarChart.js"></script>

		<script>
			var color = d3.scale.ordinal()
				.range(["#EDC951","#CC333F","#00A0B0"]);
				
			var radarChartOptions = {
           		width: 600,
           		height: 600,
			  	color: color
			};

			var data =
			  [  
		        {  
		          "key":"D3",
		          "values":[  
		            {  "axis":"Battery Life", "value":<?php echo json_encode($data[0]['field_18']) ?> }, {  "axis":"Brand", "value":<?php echo json_encode($data[0]['field_19']) ?> },
		            {  "axis":"Contract Cost", "value":<?php echo json_encode($data[0]['field_20']) ?> }, {  "axis":"Design And Quality", "value":<?php echo json_encode($data[0]['field_21']) ?> },
		            {  "axis":"Have Internet Connectivity", "value":0.22 }, {  "axis":"Large Screen", "value":0.04 },
		            {  "axis":"Price Of Device", "value":0.41 }, {  "axis":"To Be A Smartphone", "value":0.30 }
		          ]
		        }
		      ];

         radarChart = RadarChart()

         d3.select('#radarChart')
           .call(radarChart);

         radarChart.options(radarChartOptions).update();

		</script>

      	<script src="radarDemo.js"></script>

	</body>
</html>

