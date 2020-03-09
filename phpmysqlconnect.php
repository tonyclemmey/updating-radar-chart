<?php
  // https://stackoverflow.com/questions/25808414/parse-json-object-created-by-a-pdo-statement
  // http://man.hubwiz.com/docset/PHP.docset/Contents/Resources/Documents/php.net/manual/en/pdostatement.fetchall.html
  // https://phpdelusions.net/pdo
  // https://jsonformatter.curiousconcept.com/
  // https://gist.github.com/jonsuh/3739844
  // https://doc.bccnsoft.com/docs/php-docs-7-en/pdostatement.fetchall.html
  require_once 'dbconfig.php';
  $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
  $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];
	try {
		//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.
		$pdo = new PDO($dsn, $username, $password, $options);
		// prepare the sql query
		$sql = 'SELECT cast(avg(field_18) as unsigned) AS field_18, cast(avg(field_19) as unsigned) AS field_19, cast(avg(field_20) as unsigned) AS field_20, cast(avg(field_21) as unsigned) AS field_21, cast(avg(field_22) as unsigned) AS field_22, cast(avg(field_23) as unsigned) AS field_23, cast(avg(field_24) as unsigned) AS field_24, cast(avg(field_25) as unsigned) AS field_25, cast(avg(field_26) as unsigned) AS field_26, cast(avg(field_27) as unsigned) AS field_27, cast(avg(field_28) as unsigned) AS field_28, cast(avg(field_29) as unsigned) AS field_29, cast(avg(field_30) as unsigned) AS field_30, cast(avg(field_31) as unsigned) AS field_31, cast(avg(field_32) as unsigned) AS field_32, cast(avg(field_33) as unsigned) AS field_33, cast(avg(field_34) as unsigned) AS field_34, cast(avg(field_35) as unsigned) AS field_35 FROM rstutdmkgk.craft_freeform_submissions WHERE formId =1';
		$query = $pdo->prepare($sql);
		//execute the query
		$query->execute();
		//create the array
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($data);
    // print_r($data);
    // echo json_encode($data);

    // echo json_encode($data = $query->fetchAll(PDO::FETCH_ASSOC));
    // $data = $row->fetch();

    // echo data
    // echo json_encode($data[0]['field_18']);

	} catch (PDOException $pe) {
	    die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
?>
