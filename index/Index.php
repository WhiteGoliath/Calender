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
            $currMonth = null;        
             foreach($result as $birthday) {
        ?>
        
		<?php if($currMonth != $birthday['month']){ echo "<h1>" . $months[$birthday['month']] . "</h1>";
        $currMonth = $birthday['month'];
        }?>


		<h2><?=$birthday['day']?></h2> 

        <p>
            <a href="edit.php?id=<?=$birthday['id']?>">
            <?=$birthday['person']?>
            (<?=$birthday['year']?>)
            </a>
            
                
                
            <a href="delete.php?id=<?=$birthday['id']?>">x</a>
        </p>

        <?php
        }
        ?>
<p><a href="create.php">+ Toevoegen</a></p>

	</body>
</html>
