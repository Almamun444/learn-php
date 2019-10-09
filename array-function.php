<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Array Function</title>

</head>

    <body>
        <h1><?php echo "Array Function learing";?></h1>
        
            <?php 
                $array = [200, 3, 4, 29, 33, 550];

                echo max($array);
                echo "<br>";
                echo min($array);

                echo "<br>";
                print_r($array);
            ?>

    </body>
</html>