<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
    <form name="myForm" action="formular.php" method="post">
        <h1>Form</h1>
        <div>
            <label>First name</label>
            <input type="text" name="firstname">

        </div>
        <div>
            <label>Last name</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Re-type password</label>
            <input type="password" name="confirm">
        </div>

        <div>
            <input class="button" type="reset" name="reset">
            <input class="button" type="submit" name="submit">
        </div>

</body>
</html>