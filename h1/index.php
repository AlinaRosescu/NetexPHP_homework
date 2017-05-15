<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
    <form name="myForm" action="contacts.php" method="post">
        <h1>Formular</h1>
        <div>
            <label>Nume</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Prenume</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>Telefon</label>
            <input type="tel" name="phone" maxlength="10">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Tara</label>
            <input type="text" name="country">
        </div>
        <div>
            <label>Mesaj</label>
            <textarea rows="5" name="message"></textarea>
        </div>

        <div>
            <input class="button" type="reset" name="reset">
            <input class="button" type="submit" name="submit">
        </div>

</body>
</html>