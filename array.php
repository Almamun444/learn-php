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
                // Indexed array
                $number= array(200, 300, 500, '933', '<h1>Hello world</h1>');
                print_r($number);
                echo $number[4 ];
            ?>
            <?php
        
                // Associative array
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
                echo "<br>";
            ?>
            
            <?php
        
                $nameLength = count($name);
                for($i =0; $i < $nameLength; $i++){
                    echo "<pre>";
                    echo $name[$i]  ;
                    echo "</pre>";
                    
                }
            ?>
            
            <?php
                // Multidimentional array
                $items = array(
                   array("pen", 20, 10),
                   array("pencil", 10, 3),
                   array("robber", 3, 1),
                );
                $itemsCounts = count($items);
                    echo $itemsCounts;
                    echo "<br>";
     
                    for($i =0; $i<$itemsCounts; $i++){
                        
                        echo "This is items $i";
                        echo "<ul>";
                        for($count =0; $count <3; $count++){
                            echo "<br>";
                            echo "<li>" .$items[$i][$count]. "</li>"; 
                        }
                        echo "</ul>";

                    }
        
            ?>
        
    </body>
</html>