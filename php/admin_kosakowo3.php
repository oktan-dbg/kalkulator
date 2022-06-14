<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="admin_kosakowo3-functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Form Name</legend>
						<div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Gmina</label>
                            <div class="col-md-4">
                                <?php
									ini_set('display_errors', 1);
									include 'connection.php';
									$query = mysqli_query($con,"SELECT id,nazwa FROM wyd_gminy");
									
									echo "<select name='gmina'>";
									while ($temp = mysqli_fetch_assoc($query)) {
										echo "<option value='".$temp['id']."'>".$temp['nazwa']."</option>";
									};
									echo "</select>";

								?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Gmina</label>
                            <div class="col-md-4">

									<select name='rodzaj'>

										<option value='1'>Wydatki</option>
										<option value='2'>Wpływy</option>
									</select>


                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Rok</label>
                            <div class="col-md-4">
                                <input type="text" name="rok" id="rok" class="input-large">
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" accept=".csv" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</body>
</html>