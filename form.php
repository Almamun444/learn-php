<?php 

 ?>

<!doctype html>
<html >
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Form</title>

</head>

    <body>
        <h1><?php echo "Form learning";?></h1>
        
            <form action="form-collect.php" method="post">
                
                <input type="text" name="username" placeholder="Name">
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <button type="submit" name="button">Submit</button>
            </form>

            <style>
                form input{
                    padding:10px 20px;
                    margin: 10px 0;
                }
                form button{
                    padding: 10px 20px;
                }
            </style>

    </body>
</html>