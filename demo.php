<?php ;?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>D3.js Updating Radar Chart</title>

		<!-- Jquery -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

		<!-- BS4 -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- D3.js -->
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-legend/1.3.0/d3-legend.js" charset="utf-8"></script>

      	<style>
			body {
				background:#282823;
				font-family: 'Open Sans', sans-serif;
				font-size: 11px;
				font-weight: 300;
				fill: #ffffff;
				color: #ffffff;
				text-align: center;
				cursor: default;
			}
			
			.legend {
				font-family: 'Raleway', sans-serif;
				fill: #333333;
			}
			
			.tooltip {
				fill: #333333;
			}
		</style>
	
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


	  <section>
	  	<div class="container">
	  		<div class="col-12">
	  			
	  			<div id="radarChart"></div>

	  		</div>
	  	</div>
	  </section>


      <script src="radarChart.js"></script>

		<script>
			var color = d3.scale.ordinal()
				.range(["#00dcbe","#CC333F","#00A0B0"]);
				
			var radarChartOptions = {
           		width: window.innerWidth * 0.75,
           		height: window.innerHeight * 0.95,
			  	color: color
			};

			var data =
			  [  
		        {  
		          "key":"Test D3",
		          "values":[  
			        { "axis":"Personality", "value":<?php echo json_encode($data[0]['field_18']) ?>},
					{ "axis":"Story", "value":<?php echo json_encode($data[0]['field_19']) ?>},
					{ "axis":"Trust", "value":<?php echo json_encode($data[0]['field_20']) ?>},
					{ "axis":"Consistency", "value":<?php echo json_encode($data[0]['field_21']) ?>},
					{ "axis":"Seamlessness", "value":<?php echo json_encode($data[0]['field_22']) ?>},
					{ "axis":"People", "value":<?php echo json_encode($data[0]['field_23']) ?>},
					{ "axis":"Pleasure", "value":<?php echo json_encode($data[0]['field_24']) ?>},
					{ "axis":"Wellbeing", "value":<?php echo json_encode($data[0]['field_25']) ?>},
					{ "axis":"Respect", "value":<?php echo json_encode($data[0]['field_26']) ?>},
					{ "axis":"Mission", "value":<?php echo json_encode($data[0]['field_27']) ?>},
					{ "axis":"Inspiration", "value":<?php echo json_encode($data[0]['field_28']) ?>},
					{ "axis":"Authenticity", "value":<?php echo json_encode($data[0]['field_29']) ?>},
					{ "axis":"Innovation", "value":<?php echo json_encode($data[0]['field_30']) ?>},
					{ "axis":"Thought Leadership", "value":<?php echo json_encode($data[0]['field_31']) ?>},
					{ "axis":"Individuality", "value":<?php echo json_encode($data[0]['field_32']) ?>},
					{ "axis":"Indispensability", "value":<?php echo json_encode($data[0]['field_33']) ?>},
					{ "axis":"Resource Management", "value":<?php echo json_encode($data[0]['field_34']) ?>},
					{ "axis":"Price Premium", "value":<?php echo json_encode($data[0]['field_35']) ?>}
		          ]
		        }
		      ];

         radarChart = RadarChart()

         d3.select('#radarChart')
	           .call(radarChart);
	     radarChart.options(radarChartOptions).update();


		 setInterval(function() {
		     console.log('test')
		     radarChart.options(radarChartOptions).update();
		 }, 5000); 

         
		</script>

      	<script src="radarDemo.js"></script>

	</body>
</html>

