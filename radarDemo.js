!function() {

   var operation = d3.select('body').append('div').append('h2');
   
   // data = 
   //      [  
   //        {  
   //          "key":"Test D3",
   //          "values":[  
   //                { "axis":"Personality", "value":<?php echo json_encode($data[0]['field_18']) ?>},
   //                { "axis":"Story", "value":<?php echo json_encode($data[0]['field_19']) ?>},
   //                { "axis":"Trust", "value":<?php echo json_encode($data[0]['field_20']) ?>},
   //                { "axis":"Consistency", "value":<?php echo json_encode($data[0]['field_21']) ?>},
   //                { "axis":"Seamlessness", "value":<?php echo json_encode($data[0]['field_22']) ?>},
   //                { "axis":"People", "value":<?php echo json_encode($data[0]['field_23']) ?>},
   //                { "axis":"Pleasure", "value":<?php echo json_encode($data[0]['field_24']) ?>},
   //                { "axis":"Wellbeing", "value":<?php echo json_encode($data[0]['field_25']) ?>},
   //                { "axis":"Respect", "value":<?php echo json_encode($data[0]['field_26']) ?>},
   //                { "axis":"Mission", "value":<?php echo json_encode($data[0]['field_27']) ?>},
   //                { "axis":"Inspiration", "value":<?php echo json_encode($data[0]['field_28']) ?>},
   //                { "axis":"Authenticity", "value":<?php echo json_encode($data[0]['field_29']) ?>},
   //                { "axis":"Innovation", "value":<?php echo json_encode($data[0]['field_30']) ?>},
   //                { "axis":"Thought Leadership", "value":<?php echo json_encode($data[0]['field_31']) ?>},
   //                { "axis":"Individuality", "value":<?php echo json_encode($data[0]['field_32']) ?>},
   //                { "axis":"Indispensability", "value":<?php echo json_encode($data[0]['field_33']) ?>},
   //                { "axis":"Resource Management", "value":<?php echo json_encode($data[0]['field_34']) ?>},
   //                { "axis":"Price Premium", "value":<?php echo json_encode($data[0]['field_35']) ?>}
   //            ]
   //          }
   //        ];

  setTimeout(function() { 
      // operation.text(' radarChart.data(data).duration(50).update(); ');
      radarChart.data(data).duration(50).update();
  }, 200);

}();
