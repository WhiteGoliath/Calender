<?php
    require_once "index.logic.php";
?>

<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="../common/main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <?php
             foreach($result as $birthday) {
        ?>

		<h1><?=$birthday['month']?></h1>


		<h2><?=$birthday['day']?></h2> 

        <p>
            <a href="edit.php?id=<?=$birthday['id']?>">
            <?=$birthday['person']?>
            
            </a>
            
                
                
            <a href="delete.php?id=<?=$birthday['id']?>">x</a>
        </p>

        <?php
        }
        ?>
<p><a href="create.php">+ Toevoegen</a></p>

	</body>
</html>