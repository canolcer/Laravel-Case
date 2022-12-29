<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

    </head>
    <body>
        <div class="info" style="padding: 70px 0;border: 3px solid black;text-align: center;">
            Username
            <input name="username" type="text" placeholder="username"> <br>
            Password
            <input name="password" type="password" placeholder="password"> <br>
            <button><a href="user.blade.php">Sign In</a></button>
            <button><a href="create.blade.php">Sign Up</a></button>
        </div>
    </body>
</html>

<?php

$users = array();
foreach ($users as $user){
    if (explode("-", $user)[0] == $_POST["username"] or explode("-", $user)[1] == $_POST["password"]){
        echo "Success";
    }
}
