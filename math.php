<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Math</title>

</head>

    <body>
        <h1><?php echo "Math learing";?></h1>
        
            <?php 
                echo pow(2,7);
                echo "<br>";
                echo rand(20,40);
                echo "<br>";
                echo ceil(20);

                echo "<br>";
                echo floor(4);

                echo "<br>";
                echo round(5.2);
            ?>


            <?php

                $string = "I am learning again PHP course again";
                echo "<br>";

                echo strlen($string); 
                echo "<br>";

                echo strtoupper($string);
            ?>

    </body>
</html>