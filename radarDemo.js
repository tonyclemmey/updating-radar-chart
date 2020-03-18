$(function () {
   fetchData()

   function fetchData () {
      $.getJSON('phpmysqlconnect.php')
         .done(function (data) {
            // dataset = data;
            returnData(data);
         });
   }

   // interval
   setInterval(fetchData, 15000);

   var color = d3.scale.ordinal()
      .range(["#00dcbe", "#CC333F", "#00A0B0"]);

   var radarChartOptions = {
      width: window.innerWidth * 0.75,
      height: window.innerHeight * 0.95,
      color: color
   };

   radarChart = RadarChart();

   d3.select('#radarChart').call(radarChart);

   function returnData (data) {
      // dataset2 = dataset;
      console.log(data);

      var data =
         [
            {
               "key": "Test D3",
               "values": [
                  { "axis": "Personality", "value": data.field_18 },
                  { "axis": "Story", "value": data.field_19 },
                  { "axis": "Trust", "value": data.field_20 },
                  { "axis": "Consistency", "value": data.field_21 },
                  { "axis": "Seamlessness", "value": data.field_22 },
                  { "axis": "People", "value": data.field_23 },
                  { "axis": "Pleasure", "value": data.field_24 },
                  { "axis": "Wellbeing", "value": data.field_25 },
                  { "axis": "Respect", "value": data.field_26 },
                  { "axis": "Mission", "value": data.field_27 },
                  { "axis": "Inspiration", "value": data.field_28 },
                  { "axis": "Authenticity", "value": data.field_29 },
                  { "axis": "Innovation", "value": data.field_30 },
                  { "axis": "Thought Leadership", "value": data.field_31 },
                  { "axis": "Individuality", "value": data.field_32 },
                  { "axis": "Indispensability", "value": data.field_33 },
                  { "axis": "Resource Management", "value": data.field_34 },
                  { "axis": "Price Premium", "value": data.field_35 }
               ]
            }
         ];

      radarChart.options(radarChartOptions).data(data).duration(50).update();
   };
});