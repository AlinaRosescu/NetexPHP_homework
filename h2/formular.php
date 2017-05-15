<?php
//check $_POST is not empty
if(!empty($_POST['submit'])) {
    //set form input into variables
    $firsName = ucfirst($_POST['firstname']);
    $lastName = ucfirst($_POST['lastname']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    $success = "Hello $firsName $lastName, we will contact you soon :)";
    $errors =[];

    //check email input is set
    if(isset($email)) {
        //check email contains only one @ character
        $monkey = "@";
        $arr = explode($monkey, $email);
        if(count($arr) > 2) {
            $errors['email'] =  "A valid email has only one @ character" . "</br>";
        }

        //check email contains at least one "."
        $dot = ".";
        if(!strpos($email, $dot)) {
            $errors['email'] = "Email must contain at least one '.'" . "</br>";
        }

        //min 3 chars on the left of @
        $monkeyPos = strpos($email, "@");
        $subStr = substr($email, 0, $monkeyPos);
        if(strlen($subStr) < 3) {
            $errors['email'] = "Email must have minimum 3 chars on the left of @" . "</br>";
        }

        //min 2 chars between @ and '.'
        $dotPos = strpos($email, ".");
        $minus = ($dotPos-1) - $monkeyPos;
        if($minus < 2) {
            $errors['email'] = "Email must have minimum 2 chars between @ and '.'" . "</br>";
        }

        //min 2 chars after '.'
        $subStr2 = substr($email, $dotPos+1);
        if(strlen($subStr2) < 2) {
            $errors['email'] = "Email must have minimum 2 chars after '.'" . "</br>";
        }
    }

    //check password input is filled
    if(isset($password)) {

        //check password contains a number
        $nrInPass = true;
        foreach (str_split($password) as $pass) {
            if (!is_numeric($pass)) {
                $nrInPass = false;
            } else {
                $nrInPass = true;
            }
        }
        if (!$nrInPass) {
            $errors['password'] = "Password must contain at least one number" . "</br>";
        }

        //check password is 6 chars long
        if (strlen($password) !== 6) {
            $errors['password'] = "Password must be 6 characters long" . "</br>";
        }
        //check the two passwords are the same
        if ($password !== $confirm) {
            $errors['password'] = "The two passwords must be the same" . "</br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Contacts</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <p>
        <?php
            if(!empty($errors['email'])) {
                echo $errors['email'];
            }elseif(!empty($errors['password'])) {
                echo $errors['password'];
            } else {
                echo $success;
            }
        ?>
    </p>
</body>
</html>