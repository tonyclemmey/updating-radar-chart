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
      .range(["#0000cc", "#00dcbe", "#00A0B0"]);

   var radarChartOptions = {
      width: window.innerWidth * 0.75,
      height: window.innerHeight * 0.95,
      color: color,
      legend: {
         display: true,
      }
   };

   radarChart = RadarChart();

   d3.select('#radarChart').call(radarChart);

   function returnData (data) {
      // dataset2 = dataset;
      console.log(data);

      var newData = []
      if(data.field_18 === null && data.field_19 === null && data.field_20 === null && 
         data.field_21 === null && data.field_22 === null && data.field_23 === null && 
         data.field_24 === null && data.field_25 === null && data.field_26 === null && 
         data.field_28 === null && data.field_29 === null && data.field_30 === null && 
         data.field_31 === null && data.field_32 === null && data.field_33 === null && 
         data.field_34 === null && data.field_35 === null) {
            // Do nothing.
         } else {
            newData =
            [
               {
                  "key": "FBI Average (Click to Hide/Show)",
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
               } ,
               {
                  "key": "Apple (Click to Hide/Show)",
                  "values": [
                     { "axis": "Personality", "value": 4 },
                     { "axis": "Story", "value": 4 },
                     { "axis": "Trust", "value": 4 },
                     { "axis": "Consistency", "value": 4 },
                     { "axis": "Seamlessness", "value": 4 },
                     { "axis": "People", "value": 4 },
                     { "axis": "Pleasure", "value": 5 },
                     { "axis": "Wellbeing", "value": 4 },
                     { "axis": "Respect", "value": 4 },
                     { "axis": "Mission", "value": 5 },
                     { "axis": "Inspiration", "value": 4 },
                     { "axis": "Authenticity", "value": 5 },
                     { "axis": "Innovation", "value": 5 },
                     { "axis": "Thought Leadership", "value": 5 },
                     { "axis": "Individuality", "value": 5 },
                     { "axis": "Indispensability", "value": 5 },
                     { "axis": "Resource Management", "value": 3 },
                     { "axis": "Price Premium", "value": 4 }
                  ]
               }
            ];
         }
      

      radarChart.options(radarChartOptions).data(newData).duration(50).update();
   };
});