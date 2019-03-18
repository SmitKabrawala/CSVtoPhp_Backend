
<?php 
include('functions.php');
?>	
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"> 
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
	
	<style>
body  {
    background-image: url("1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>

</head>

<body>
<div class="container">

 <div class="jumbotron">
 <h1 style="color:#E28023;">IGN Backend Project; :)</h1>
 </div>

 </div>

    <div id="wrap">
        <div class="container">
		<div class="jumbotron">
            <div class="row">

                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>                       

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" required>
                            </div>
                        </div>
						
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                            </div>
                        </div>
						
                    </fieldset>
                </form>				
            </div>
<?php
get_all_records();
?>
        </div>
		</div>
          
    </div>
</body>

</html>
