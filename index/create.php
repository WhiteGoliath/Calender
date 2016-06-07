<?php
    require_once "create.logic.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Verjaardagskalender</title>
		<link href="../common/main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<form method="post">
		<h1>Nieuwe Verjaardag</h1>
		<div>
			<label>Persoon:</label>
			<input type="text" name="persoon">
		</div>
		<div>
			<label>Dag:</label>
				<select>
			<?php 
			for ($x = 1; $x <= 31; $x++) {
			?>

			<option value=""><?=$x?></option>
			
			<?php 
			}
			?>
				</select>
				<select>
					<option value="1">Januari</option>
					<option value="2">Februari</option>
					<option value="3">Maart</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Juni</option>
					<option value="7">Juli</option>
					<option value="8">Augustus</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select>
					
				</select>
		</div>
		<div>
			<input type="submit" value="Opslaan">
		</div>
		</form>
	</body>
</html>