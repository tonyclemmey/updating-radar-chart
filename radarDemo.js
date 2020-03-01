!function() {

   var operation = d3.select('body').append('div').append('h2');

   data = 
      [  
        {  
          "key":"Test",
          "values":[  
            {  "axis":"Battery Life", "value":5 }, {  "axis":"Brand", "value":4 },
            {  "axis":"Contract Cost", "value":3 }, {  "axis":"Design And Quality", "value":1 },
            {  "axis":"Have Internet Connectivity", "value":2 }, {  "axis":"Large Screen", "value":4 },
            {  "axis":"Price Of Device", "value":5 }, {  "axis":"To Be A Smartphone", "value":3 }
          ]
        }
      ];

   setTimeout(function() { 
      operation.text(' radarChart.data(data).duration(50).update(); ');
      radarChart.data(data).duration(50).update();
   }, 200);

   setTimeout(function() { 
      operation.html(" data.forEach(function(e) { e.values.forEach(function(v) { v.value = (Math.random() * .6) + .2; }) })<br> radarChart.data(data).update(); ");
      chart_data = JSON.parse(JSON.stringify(data));
      chart_data.forEach(function(e) { e.values.forEach(function(v) { v.value = (Math.random() * .6) + .2; }) })
      radarChart.data(chart_data).update();
   }, 24000);

}();
