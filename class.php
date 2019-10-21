<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Class</title>

</head>

    <body>
        <h1><?php echo "Class learing";?></h1>
			<?php

				class test{

				}

				if(class_exists("test")){
					echo "THis is a correct answer";
				}else{
					echo "Class not exit";
				}
			?>

    </body>
</html>