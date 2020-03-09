<?php ;?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>FutureBrand Index</title>

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

	<!-- Ajax start -->
	<script>
	
		$(document).ready(function () {

				var dataset2 = [];

				function fetchData() {

					  $.getJSON('phpmysqlconnect.php')

					  .done( function(data) {

					    dataset = data;
						console.log(dataset);	

						var $field18 = dataset[0].field_18;
						var $field19 = dataset[0].field_19;
						var $field20 = dataset[0].field_20;
						console.log($field18);
						console.log($field19);
						console.log($field20);

						returnData(data);

					  })

				}

				// interval
				setInterval(fetchData,5000);

				function returnData(data){
				    dataset2 = dataset;
				    console.log("Return Data", dataset2);
				};

		})

	</script>
	<!-- Ajax end -->

	  <section>
	  	<div class="container">
			<div class="col-12 mt-4">
				<h2 class="flex items-center" style="font-size: 35px;"><span class="inline-block mr-2 svgfull text-white fill-current"><svg width="200" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 680 92" class="block"><path d="M650.78 38.74a13.53 13.53 0 0 1 11.28 5.32 21.17 21.17 0 0 1 4 13.42 21.17 21.17 0 0 1-4.15 13.42 14.6 14.6 0 0 1-22.54 0 21.17 21.17 0 0 1-4.15-13.42 21.17 21.17 0 0 1 4.15-13.42 13.53 13.53 0 0 1 11.41-5.32m-3.06 50.71a27.33 27.33 0 0 0 17.65-6.22v3.82a1.07 1.07 0 0 0 1.2 1.2h12.23a1.07 1.07 0 0 0 1.2-1.2V3.74c0-.84-.41-1.25-1.2-1.25h-12.23a1.12 1.12 0 0 0-1.2 1.25v28a27.59 27.59 0 0 0-17.65-6.16 25.85 25.85 0 0 0-20.22 8.61q-7.64 8.61-7.64 23.36t7.64 23.36a25.85 25.85 0 0 0 20.22 8.61m-131-50.79A13.53 13.53 0 0 1 528 44.06a21.17 21.17 0 0 1 4.15 13.42A21.17 21.17 0 0 1 528 70.91a14.6 14.6 0 0 1-22.54 0 21.17 21.17 0 0 1-4.15-13.42 21.17 21.17 0 0 1 4.25-13.42 13.53 13.53 0 0 1 11.28-5.32m-2.93 50.71a27.33 27.33 0 0 0 17.65-6.22v3.82a1.07 1.07 0 0 0 1.2 1.2h12.3a1.07 1.07 0 0 0 1.2-1.2V28c0-.84-.41-1.25-1.2-1.25h-12.3a1.12 1.12 0 0 0-1.2 1.25v3.67a27.59 27.59 0 0 0-17.78-6.06 25.85 25.85 0 0 0-20.22 8.61q-7.64 8.61-7.64 23.36t7.64 23.36a25.85 25.85 0 0 0 20.22 8.61M1.25 88.38h12.94a1 1 0 0 0 1.2-1.2V52.26h34.79a1.12 1.12 0 0 0 1.2-1.26V39.3q0-1.25-1.2-1.25H15.39V16.86h36.25a1.15 1.15 0 0 0 1.25-1.25V3.89a1.15 1.15 0 0 0-1.06-1.22H1.25A1.15 1.15 0 0 0 0 3.92v83.29c0 .79.41 1.2 1.25 1.2M127.06 40h10.52v28.9a19.87 19.87 0 0 0 5.68 15.28 20.89 20.89 0 0 0 14.9 5.32 39.76 39.76 0 0 0 14.11-1.91q1-.36 1-2.09V75.39q0-1.07-.84-1.07a2.55 2.55 0 0 0-.84 0 31.61 31.61 0 0 1-10.83 1.81 7.82 7.82 0 0 1-6.47-2.55 12 12 0 0 1-2-7.64V40h18.47c.84 0 1.25-.41 1.25-1.2V28a1.12 1.12 0 0 0-1-1.2H152.3V9.14a1 1 0 0 0-1.2-1.2h-12.3q-1.25 0-1.25 1.2v17.65h-10.49a1.07 1.07 0 0 0-1.2 1.2v10.83a1.07 1.07 0 0 0 1.2 1.2m190.58 1.73a16.23 16.23 0 0 1 9.65-3q12.43 0 16.1 11.18H311.5a16.53 16.53 0 0 1 6.14-8.18m-13 38.79a30.57 30.57 0 0 0 22.47 8.92q22.31 0 30-19.79a4.56 4.56 0 0 0 .23-1.25.74.74 0 0 0-.84-.84H344a2.06 2.06 0 0 0-1.73 1.07q-4.53 7.64-15.08 7.64a15.69 15.69 0 0 1-10.88-3.85A16.48 16.48 0 0 1 311 62.25h46.64A1.15 1.15 0 0 0 358.9 61v-2.29a34.36 34.36 0 0 0-8.58-23.61 29.39 29.39 0 0 0-23-9.5 31.1 31.1 0 0 0-31.59 30.6v1.39a31 31 0 0 0 9 22.92M383 16.86h18.77a10.6 10.6 0 0 1 7.16 2.39 8.92 8.92 0 0 1 2.78 7.16 9.35 9.35 0 0 1-2.75 7.28 10.19 10.19 0 0 1-7.18 2.55H383zm0 33.55h20.1a11.92 11.92 0 0 1 8.66 3.21 11.46 11.46 0 0 1 3.39 8.63A11.36 11.36 0 0 1 411.8 71a12.2 12.2 0 0 1-8.71 3.11H383zm-14.16 38h35.66a25.47 25.47 0 0 0 19.05-7.23 24.89 24.89 0 0 0 7.16-18.24q0-15.28-12.38-20.73A20.81 20.81 0 0 0 427 25.26a20.38 20.38 0 0 0-7.28-16.45 27.15 27.15 0 0 0-18.11-6.14h-32.8a1.15 1.15 0 0 0-1.25 1.25v83.29c0 .79.41 1.2 1.25 1.2m71 0h12.29q1.25 0 1.25-1.2V55.4q0-9 3.49-12.74a12.74 12.74 0 0 1 9.83-3.74 29.27 29.27 0 0 1 12.74 3.41 2.7 2.7 0 0 0 .84.23c.69 0 1-.41 1-1.3V29.82a2.19 2.19 0 0 0-1.5-2.22 33.85 33.85 0 0 0-11.23-2 21.4 21.4 0 0 0-15.08 5.78v-3.24a1.12 1.12 0 0 0-1-1.2H440q-1.25 0-1.25 1.2v59.1c0 .79.41 1.2 1.25 1.2m-250.95-4.57a21.52 21.52 0 0 0 15.72 5.55 28 28 0 0 0 18.47-6.83V87a1.12 1.12 0 0 0 1 1.2h12.47a1.07 1.07 0 0 0 1.2-1.2V28a1 1 0 0 0-1.2-1.2h-12.2c-.84 0-1.25.41-1.25 1.2v27.78q0 10.19-4.15 15.28a13 13 0 0 1-10.49 5.09q-10.52 0-10.52-12.74V28a1.12 1.12 0 0 0-1-1.2h-12.45a1 1 0 0 0-1.2 1.2v40.72a20.2 20.2 0 0 0 5.68 15.13m59.76 4.53h12.18q1.25 0 1.25-1.2V55.4q0-9 3.49-12.74a12.74 12.74 0 0 1 9.83-3.74 29.27 29.27 0 0 1 12.74 3.41 2.7 2.7 0 0 0 .84.23c.69 0 1-.41 1-1.3V29.82a2.19 2.19 0 0 0-1.5-2.22 33.85 33.85 0 0 0-11.23-2 21.4 21.4 0 0 0-15.08 5.78v-3.24a1.12 1.12 0 0 0-1-1.2h-12.52q-1.25 0-1.25 1.2v59.1c0 .79.41 1.2 1.25 1.2M68.78 83.87a21.52 21.52 0 0 0 15.72 5.55A28 28 0 0 0 103 82.6V87a1.12 1.12 0 0 0 1 1.2h12.47a1.07 1.07 0 0 0 1.2-1.2V28a1 1 0 0 0-1.2-1.2h-12.24c-.84 0-1.25.41-1.25 1.2v27.78Q103 66 98.83 71.06a13 13 0 0 1-10.49 5.09q-10.52 0-10.52-12.74V28a1.12 1.12 0 0 0-1-1.2H64.29A1 1 0 0 0 63.1 28v40.72a20.2 20.2 0 0 0 5.68 15.13m488.64 4.53h12.2q1.25 0 1.25-1.2V59.35q0-10.19 4.18-15.28A13.07 13.07 0 0 1 585.57 39q10.52 0 10.52 12.74v35.62a1.07 1.07 0 0 0 1.2 1.2h12.25c.84 0 1.25-.41 1.25-1.2V46.61a20.38 20.38 0 0 0-5.71-15.28 21.55 21.55 0 0 0-15.72-5.73 28.35 28.35 0 0 0-18.47 6.85v-4.3a1.12 1.12 0 0 0-1-1.2h-12.44q-1.25 0-1.25 1.2v59.09c0 .79.41 1.2 1.25 1.2"></path></svg></span> <span class="mt-px inline-block align-bottom">Index</span></h2>
			</div>



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

         
		</script>

      	<script src="radarDemo.js"></script>

	</body>
</html>

