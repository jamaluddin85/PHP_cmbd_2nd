<?php
    

    if(isset($_POST['submit'])){
        $password = $_POST['pass'];
        $con_password = $_POST['confirm_pass'];


        if(empty($password)){
            $Pass_message = 'Password is required';
        }elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/",$password)){
            $Pass_message = 'Password must contain one digit with letter (lowercase,uppercase) & special charecter';
        }else{
            $correct_pass = $password;
        }

        if(empty($con_password)){
            $con_Pass_message = 'confirm your password';
        }elseif($password != $con_password){
            $con_pass_message = 'Password is not match!';
        }else{
            $con_pass_word = $con_password; 
        }

        // if($password != $con_password){
        //     $con_pass_message = 'Password is not match!';
        // }else{
        //     echo $con_pass_word = $con_password; 
        // }
     
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP password validation </title>
    <link rel="stylesheet" href="./password.css">
</head>
<body>
    
    <form action="" method="post">
        <!-- for password  -->
        <label for="pass">Type your password</label> <br>
        <input type="password" name="pass" placeholder="write your password" id="pass">

        <p class="con_pas_mess"><?= isset($correct_pass) ? 'password is ok': null ?? null?></p> 
        <p class="pas_mess"> <?= $Pass_message ?? null ?> </p>

        <br>
        <!-- for confirm password  -->
        <label for="confirm_pass">confirm your password</label> <br>
        <input type="password" name="confirm_pass" placeholder="write your password" id="confirm_pass">

        <p class="con_pas_mess"><?= isset($con_pass_word) ? 'Password is match': $con_pass_message ?? null  ?></p>
        <p class="pas_mess"><?= $con_Pass_message ?? null?></p>
        <br> <br>
        <input class="submit" type="submit" name="submit" value="Save">
        <input class="reset" type="reset" name="submit" value="Reset">

    </form>

</body>
</html>

