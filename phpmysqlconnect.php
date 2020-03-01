<?php
  require_once 'dbconfig.php';
	try {
		//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		// prepare the sql query
			$sql = 'SELECT cast(avg(field_18) as unsigned) AS field_18, cast(avg(field_19) as unsigned) AS field_19, cast(avg(field_20) as unsigned) AS field_20, cast(avg(field_21) as unsigned) AS field_21, cast(avg(field_22) as unsigned) AS field_22, cast(avg(field_23) as unsigned) AS field_23, cast(avg(field_24) as unsigned) AS field_24, cast(avg(field_25) as unsigned) AS field_25, cast(avg(field_26) as unsigned) AS field_26, cast(avg(field_27) as unsigned) AS field_27, cast(avg(field_28) as unsigned) AS field_28, cast(avg(field_29) as unsigned) AS field_29, cast(avg(field_30) as unsigned) AS field_30, cast(avg(field_31) as unsigned) AS field_31, cast(avg(field_32) as unsigned) AS field_32, cast(avg(field_33) as unsigned) AS field_33, cast(avg(field_34) as unsigned) AS field_34, cast(avg(field_35) as unsigned) AS field_35 FROM rstutdmkgk.craft_freeform_submissions WHERE formId =1';
		$row = $pdo->prepare($sql);
		//execute the query
		$row->execute();
		//create the array 
		$data=array(); 	
			//foreach loop
			foreach($row as $rec)  
			{
	              $json_array['field_18']=$rec['field_18']; 
                  $json_array['field_19']=$rec['field_19'];
                  $json_array['field_20']=$rec['field_20']; 
                  $json_array['field_21']=$rec['field_21'];
                  $json_array['field_22']=$rec['field_22'];
                  $json_array['field_23']=$rec['field_23'];
                  $json_array['field_24']=$rec['field_24'];
                  $json_array['field_25']=$rec['field_25'];
                  $json_array['field_26']=$rec['field_26'];
                  $json_array['field_27']=$rec['field_27'];
                  $json_array['field_28']=$rec['field_28'];
                  $json_array['field_29']=$rec['field_29'];
                  $json_array['field_30']=$rec['field_30'];
                  $json_array['field_31']=$rec['field_31'];
                  $json_array['field_32']=$rec['field_32'];
                  $json_array['field_33']=$rec['field_33'];
                  $json_array['field_34']=$rec['field_34'];
                  $json_array['field_35']=$rec['field_35'];
					//here pushing the values in to an array  
				    array_push($data,$json_array);
			}

	} catch (PDOException $pe) {
	    die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
?>

<script>
  // Echo the data directly to JavaScript
  var data = <?php echo json_encode($data) ?>;
  // console log
  console.log(data[0]['field_18']); // field 18
  console.log(data[0]['field_19']); // field 19
  console.log(data[0]['field_20']); // field 20
  console.log(data[0]['field_21']); // field 21
  console.log(data[0]['field_22']); // field 22
  console.log(data[0]['field_23']); // field 23
  console.log(data[0]['field_24']); // field 24
  console.log(data[0]['field_25']); // field 25
  console.log(data[0]['field_26']); // field 26
  console.log(data[0]['field_27']); // field 27
  console.log(data[0]['field_28']); // field 28
  console.log(data[0]['field_29']); // field 29
  console.log(data[0]['field_30']); // field 30
  console.log(data[0]['field_31']); // field 31
  console.log(data[0]['field_32']); // field 32
  console.log(data[0]['field_33']); // field 33
  console.log(data[0]['field_34']); // field 34
  console.log(data[0]['field_35']); // field 35
</script>
