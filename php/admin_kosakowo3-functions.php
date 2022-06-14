  <head>
  <meta charset="UTF-8">
</head>
<?php
include 'connection.php';

 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
		$rok = $_POST["rok"];
		$rodzaj=$_POST["rodzaj"];
		$id_gminy=$_POST["gmina"];
		if($rodzaj == 1){
			wydatki($filename, $rok, $id_gminy);
		}else if($rodzaj == 2){
			wplywy($filename, $rok, $id_gminy);
		}

	}	 
$con->close();

 ?>
 
 <?php
 function wydatki($filename, $rok, $id_gminy){
	global $con;
	deleteOldData($id_gminy,$rok);
	if($_FILES["file"]["size"] > 0)
	{
		$file = fopen($filename, "r");
		while (($getData = fgetcsv($file, 0, ";")) !== FALSE)
		 {
			if((strlen($getData[0])>0 || strlen($getData[2])>0 || strlen($getData[3])>0) && strncmp($getData[0], "Dzia",4) !== 0 && strncmp($getData[0], "Stro",4) !== 0 && strncmp($getData[0], "Wyda",4) !== 0 && strncmp($getData[0], "1",1) !== 0){
				if(strlen($getData[0])>0){
					$type_id=0;
					$kod= $getData[0];
					$nalezy_do_=0;
				}else if(strlen($getData[2])>0){
					$type_id=1;
					$kod= $getData[2];
					$nalezy_do_=$nalezy_do_dzial_id;
				}else if(strlen($getData[3])>0){
					$type_id=2;
					$kod= $getData[3];
					$nalezy_do_=$nalezy_do_rozdzial_id;
				}
				$dzial_id = get_dzial_id($type_id, $kod, $getData[4],$nalezy_do_);
				if(strlen($getData[0])>0 ){
					$nalezy_do_dzial_id = $dzial_id;
				}else if(strlen($getData[2])>0){
					$nalezy_do_rozdzial_id = $dzial_id;
				}
				
			   $sql = "INSERT into wyd_kolumny 
				   values (NULL,'".$rok."','".$type_id."',".$id_gminy.",'".$dzial_id."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[7])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[9])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[10])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[11])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[12])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[13])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[14])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[15])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[16])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[17])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[18])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[19])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[20])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[22])[0])."',
				   '".str_replace(chr(0xA0), '', explode(',',$getData[23])[0])."')";
				   print($sql);
				   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					print("NOK");
					/*echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";		*/
				}
				else {
					print("OK");
					  /*echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";*/
				}
			}
		}
		fclose($file);	
	}
 }
 
 function wplywy($filename, $rok, $id_gminy){
	global $con;
	deleteOldDataWplywy($id_gminy,$rok);
	if($_FILES["file"]["size"] > 0)
	{
		$file = fopen($filename, "r");
		while (($getData = fgetcsv($file, 0, ";")) !== FALSE)
		 {
			if(count($getData)<5) continue;
			print $getData[0];
			if((strlen($getData[0])>0 || strlen($getData[1])>0 || strlen($getData[2])>0) && strncmp($getData[0], "Dzia",4) !== 0 && strncmp($getData[0], "Stro",4) !== 0 && strncmp($getData[0], "Wyda",4) !== 0 && strncmp($getData[0], "Og",2) !== 0 && strncmp($getData[0], "maj",3) !== 0 && strncmp($getData[0], "bie",3) !== 0 && strncmp($getData[0], "1",1) !== 0){
				if(strlen($getData[0])>0){
					$type_id=0;
					$kod= $getData[0];
					$nalezy_do_dzial_id=0;
				}else if(strlen($getData[2])>0){
					$type_id=1;
					$kod= $getData[2];
				}
				$dzial_id = get_dzial_id_wplywy($type_id, $kod, $getData[3],$nalezy_do_dzial_id);
				if(strlen($getData[0])>0){
					$nalezy_do_dzial_id = $dzial_id;
				}
				
			   $sql = "INSERT into wpl_kolumny 
				   values (NULL,'".$rok."','".$type_id."',".$id_gminy.",'".$dzial_id."',
				   '".str_replace(chr(0x20), '', explode(',',$getData[5])[0])."')";
				   print($sql);
				   $result = 0;
				   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					print("NOK");
					/*echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";		*/
				}
				else {
					print("OK");
					  /*echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";*/
				}
			}
		}
		fclose($file);	
	}
 }
  function deleteOldDataWplywy($id_gminy,$rok){
	 global $con;
	$sql = "DELETE FROM wpl_kolumny WHERE gmina_id=".$id_gminy." AND rok=".$rok;
	print $sql;
	 if ($con->query($sql) === TRUE) {
		  print "Record deleted successfully";
	} else {
		  print "Error deleting record: " . $conn->error;
	}
 }
 
 function deleteOldData($id_gminy,$rok){
	 global $con;
	$sql = "DELETE FROM wyd_kolumny WHERE gmina_id=".$id_gminy." AND rok=".$rok;
	print $sql;
	 if ($con->query($sql) === TRUE) {
		  print "Record deleted successfully";
	} else {
		  print "Error deleting record: " . $conn->error;
	}
 }
  function get_dzial_id_wplywy($type_id,$kod, $nazwa, $nalezy_do_dzial_id ){
    global $con;
    $Sql = "SELECT * FROM wpl_dzialy WHERE kod=".$kod."";
    $result = mysqli_query($con, $Sql);  
	if(!isset($result))
	{
		print("NOK");
	}else{
		print("OK");
	}

    if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];     
    }
	return $id;
     
	} else {
		  $Sql = "INSERT INTO wpl_dzialy VALUES(NULL,".$type_id.", '".$kod."',".$nalezy_do_dzial_id.",'".iconv("Windows-1250", "UTF-8", $nazwa)."')"; 
		  print $Sql;
		  $result = mysqli_query($con, $Sql); 
		  print "R=".$con->insert_id;
		  return  $con->insert_id;
	}
}
 
 function get_dzial_id($type_id,$kod, $nazwa, $nalezy_do_dzial_id ){
    global $con;
    $Sql = "SELECT * FROM wyd_dzialy WHERE kod=".$kod."";
    $result = mysqli_query($con, $Sql);  
	if(!isset($result))
	{
		print("NOK");
	}else{
		print("OK");
	}

    if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];     
    }
	return $id;
     
	} else {
		  $Sql = "INSERT INTO wyd_dzialy VALUES(NULL,".$type_id.", '".$kod."',".$nalezy_do_dzial_id.",'".iconv("Windows-1250", "UTF-8", $nazwa)."')"; 
		  print $Sql;
		  $result = mysqli_query($con, $Sql); 
		  print "R=".$con->insert_id;
		  return  $con->insert_id;
	}
}
 ?>