<?php

include('connection.php');

if(isset($_POST["Import"])){
		$con = getdb();

		echo $filename=$_FILES["file"]["tmp_name"];
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {

	           $sql = "INSERT into ign_backend ('no','content_id','content_type','title','headline','description1','publish_date','slug','description2','state','duration','video_series','author_1','author_2','tag_1','tag_2','tag_3','thumbnail_1_URL','thumbnail_1_size','thumbnail_1_width','thumbnail_1_height','thumbnail_2_URL','thumbnail_2_size','thumbnail_2_width','thumbnail_2_height','thumbnail_3_URL','thumbnail_3_size','thumbnail_3_width','thumbnail_3_height') 
	            	values('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$getData[6]','$getData[7]','$getData[8]','$getData[9]','$getData[10]','$getData[11]','$getData[12]','$getData[13]','$getData[14]','$getData[15]','$getData[16]','$getData[17]','$getData[18]','$getData[19]','$getData[20]','$getData[21]','$getData[22]','$getData[23]','$getData[24]','$getData[25]','$getData[26]','$getData[27]','$getData[28]')";
				var_dump($sql);
					exit();
	         //we are using mysql_query function. it returns a resource on true else False on error
	           $result = $con->query($sql);
				if(!$result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";		
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";	
			
		 }
	}	 
?>		 
