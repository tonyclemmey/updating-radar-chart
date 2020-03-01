<?php
  require_once 'dbconfig.php';
	try {
		//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		// prepare the sql query
		$sql = 'SELECT cast(avg(field_18) as unsigned) AS field_18, cast(avg(field_19) as unsigned) AS field_19, cast(avg(field_20) as unsigned) AS field_20, cast(avg(field_21) as unsigned) AS field_21, cast(avg(field_22) as unsigned) AS field_22, cast(avg(field_23) as unsigned) AS field_23 FROM rstutdmkgk.craft_freeform_submissions WHERE formId =1';
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
</script>
