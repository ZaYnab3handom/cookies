<?php 
    if(isset($_POST["savebtn"])){
        // set cookies
        $fname = "User";
        $nameValue = $_POST["fullName"];
        setcookie($fname, $nameValue, time() + (86400 * 30), "/");

        $email = "Email";
        $emailValue = $_POST["email"];
        setcookie($email, $emailValue, time() + (86400 * 30), "/");

        // get cookies
        if(!isset($_COOKIE[$fname]) || !isset($_COOKIE[$email]) ) {
            echo "Cookies is not set!";
            echo "<br> Plz submit and refresh page after  Submtion to show Cookies";
            } else {
            echo "Cookies is set!<br>";
            echo "your name is: " . $_COOKIE[$fname]; 
            echo "<br> your email is: " .$_COOKIE[$email];
            }
    }
    



?>