<?php 

if (isset($_POST['submit'])) {
    $username  = $_POST['username'];
    $password = $_POST['password'];

    // if ( $username && $password ) {
    //     echo $username;
    //     echo $password;
    // }else{
    //     echo "Please fill the username & password";
    // }

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ( $connection) {
       echo "Database connection succesfully";
    }else{
       die("Connection failed");
    }

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES( '$username', '$password')";
     //$list = "SELECT * FROM users";

    // $result = mysqli_query($connection, $list);

    // if (!$result) {
    //    die('Connection Falied' .mysqli_error());
    // }

   


}
 ?>

 <!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css />

 
    </head>
    <body>

   

        <div class="uk-container  uk-margin-top">
            <div class="uk-grid">
                <div class="uk-width-1-2@m">
                     <form action="login.php" method="post">
                        <input class="uk-input" name="username" type="text" placeholder="User name">
                         <input class="uk-input uk-margin" name="password" type="password" placeholder="Password">
                        <button  type="sumbit" name="submit" class="uk-button uk-button-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

             <?php 

        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<pre>";
        //    print_r($row);
        //    echo "</pre>";
        // }
        ?>

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    </body>
</html>