<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Function</title>

</head>

    <body>
        <h1><?php echo "Fuction learing";?></h1>
        
            <?php 
             function learning_function(){
                echo "This is first time deeply learging PHP again";

             }
              function counter(){
                echo 5388 + 4009;
              }
            ?>


            <?php 

                function test(){
                    learning_function();
                    echo "<br>";
                    counter();
                }

                test();
            ?>
        

        <?php 


            function welcome($hello){
                echo "<br>";
                echo $hello;
            }
            welcome("You are welcome to themexpert");

        ?>

        <?php

            function calculate($number1, $number2){
                echo "<br> <br>";
                $sum = $number1 + $number2;
                echo $sum;

            }
             calculate(600, 566);
        ?>

        <?php 
            function addNumbers($number1, $number2){
                $total = $number1 + $number2;
                return $total;

            }

            $result = addNumbers(400, 7890);
            echo "<br>";
            echo $result;
            $result2 = addNumbers(200, $result);
            echo "<br>";
            echo $result2;
        ?>


        <?php

            $x = "This is outside value";
            function test_value(){
                global $x;
                $x = "This is Inside value";
            } 

            
            echo "<br>";
            echo $x;
            echo "<br>";
            test_value();
              echo $x;


        ?>
    </body>
</html>