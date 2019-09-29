<?php 
 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Condition</title>

</head>

    <body>
        <h1><?php echo "Condition learing";?></h1>
        
           <?php 
                if(5>10){
                    echo "Five is less then Ten";
                    
                }elseif(5==6){
                    echo "This is true";
                    
                }else{
                    echo "Pleaes entry a real value";
                }
        
                echo "<br> <br> <br>";
        
            ?>
            
            
            <?php 
                $today = date("H"); 
        
                if ($today > "28"){
                    echo "Tomorrow was 28th Sep";
                }elseif($today = "29"){
                    echo "Today is 29th September";
                }else{
                    echo "Tomorrow will 30th Sep";
                }
            ?>
        
    </body>
</html>