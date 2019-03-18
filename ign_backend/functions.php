<?php

include('connection.php');
error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"ign") or die("Error: ". mysqli_error($con));
 


   if(isset($_POST["Import"])){		
		echo $filename=$_FILES["file"]["tmp_name"];	

		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
			   $sql = "INSERT into ign_backend (no,content_id,content_type,title,headline,description1,publish_date,slug,description2,state,duration,video_series,author_1,author_2,tag_1,tag_2,tag_3,thumbnail_1_URL,thumbnail_1_size,thumbnail_1_width,thumbnail_1_height,thumbnail_2_URL,thumbnail_2_size,thumbnail_2_width,thumbnail_2_height,thumbnail_3_URL,thumbnail_3_size,thumbnail_3_width,thumbnail_3_height) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."')";
	           $result = mysqli_query($con, $sql);
			    // var_dump(mysqli_error_list($con));
			    // exit();
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
	
	
	
function get_all_records(){
    error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"ign") or die("Error: ". mysqli_error($con));

    $Sql = "SELECT * FROM ign_backend";
    $result = mysqli_query($con, $Sql); 

    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-hover table-bordered '>
     <thead>
     <tr>
     						
				  		<th>no</th>
				  		<th>content_id</th>
				  		<th>content_type</th>
				  		<th>title</th>
						<th>headline</th>
						<th>description1</th>
						<th>publish_date</th>
						<th>slug</th>
				  		<th>description2</th>
				  		<th>state</th>
				  		<th>duration</th>
						<th>video_series</th>
						<th>author_1</th>
						<th>author_2</th>
						<th>tag_1</th>
				  		<th>tag_2</th>
				  		<th>tag_3</th>
				  		<th>thumbnail_1_URL</th>
						<th>thumbnail_1_size</th>
						<th>thumbnail_1_width</th>
						<th>thumbnail_1_height</th>
						<th>thumbnail_2_URL</th>
						<th>thumbnail_2_size</th>
						<th>thumbnail_2_width</th>
						<th>thumbnail_2_height</th>
						<th>thumbnail_3_URL</th>
						<th>thumbnail_3_size</th>
						<th>thumbnail_3_width</th>
						<th>thumbnail_3_height</th>
				  		
						
                        </tr></thead><tbody>";
					

     while($row = mysqli_fetch_assoc($result)) {

		echo "<tr>
				
		<td>" . $row['no']."</td>
		<td>" . $row['content_id']."</td>
		<td>" . $row['content_type']."</td>
		<td>" . $row['title']."</td>
		<td>" . $row['headline']."</td>
		<td>" . $row['description1']."</td>
		<td>" . $row['publish_date']."</td>
		<td>" . $row['slug']."</td>
		<td>" . $row['description2']."</td>
		<td>" . $row['state']."</td>
		<td>" . $row['duration']."</td>
		<td>" . $row['video_series']."</td>
		<td>" . $row['author_1']."</td>
		<td>" . $row['author_2']."</td>
		<td>" . $row['tag_1']."</td>
		<td>" . $row['tag_2']."</td>
		<td>" . $row['tag_3']."</td>
		<td>" . $row['thumbnail_1_URL']."</td>
		<td>" . $row['thumbnail_1_size']."</td>
		<td>" . $row['thumbnail_1_width']."</td>
		<td>" . $row['thumbnail_1_height']."</td>
		<td>" . $row['thumbnail_2_URL']."</td>
		<td>" . $row['thumbnail_2_size']."</td>
		<td>" . $row['thumbnail_2_width']."</td>
		<td>" . $row['thumbnail_2_height']."</td>
		<td>" . $row['thumbnail_3_URL']."</td>
		<td>" . $row['thumbnail_3_size']."</td>
		<td>" . $row['thumbnail_3_width']."</td>
		<td>" . $row['thumbnail_3_height']."</td>
		

</tr>";	

         
         
     }
     echo "</tbody></table></div>";
	 
} else {
     
}
}



?>