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
        
		<?php if($currMonth != $birthday['month']){ echo "<h1>" . $months[$birthday['month']] . "</h1>";
        $currMonth = $birthday['month'];
        }?>


		<?php if($currDay != $birthday['day']){ echo "<h2>" . $birthday['day'] . "</h2>";
        $currDay = $birthday['day'];
        }?>

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