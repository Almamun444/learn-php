<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Loop</title>

</head>

    <body>
        <h1><?php echo "For Loop learing";?></h1>
        
           <?php 
                for($counter = 0; $counter<10; $counter++){
                    echo $counter . "<br>";
                }
            ?>
        
    </body>
</html>