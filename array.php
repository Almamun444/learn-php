<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
       <title>Array</title>

</head>

    <body>
        <h1><?php echo "Array learing";?></h1>
        
           <?php 
                $number= array(200, 300, 500, '933', '<h1>Hello world</h1>');
                print_r($number);
                echo $number[4 ];

                $name = array('Hasan', 'kamal', 'Bashir');
                print_r($name);
                echo "<br>";
                $names = array(
                    'first_name' => 'Hasan',
                    'last_name'  => 'Bashir'
                );
                print_r($names);

                foreach($names as $key=> $list){
                        echo $key;
                    }
            ?>
        
    </body>
</html>