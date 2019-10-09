<?php 

if(isset($_POST['button'])){

 $user = array(
    "Anis", "Alif", "Kamal", "Jamal"
);

   $username = $_POST['username'];
   $password = $_POST['password'];

  // echo "Hello" . " " .$username ." " . "Your Password is" ." "  .$password;

   if(strlen($username)<5){
        echo "<br>";
        echo "Your name no longer then five";
   }

   if(!in_array($username, $user)){
        echo "<br>";
        echo "You are not allowed to login";
        echo "<br>";

   }else{
        echo "<br>";
        echo "You are welcome";
   }



}

 ?>
