<?php

if(!empty($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $fileName = "contacts.txt";
    $data =  $firstName . ',' . $lastName . ',' . $phone . ',' . $email . ',' . $country . ',' . $message . "\n";
    file_put_contents('contacts.txt', $data, FILE_APPEND | LOCK_EX);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Contacts</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>
    <table>
        <tbody>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Tara</th>
                <th>Mesaj</th>
            </tr>

            <?php
            $file = fopen("contacts.txt","r");

            while(!feof($file)) {
                echo "<tr>";
                    $mystring = fgets ($file);
                    $info = explode(',', $mystring);

                    foreach($info as $key=>$value) {
                        if(!empty($value)) {
                            echo "<td>" . $value . "</td>";
                        }
                    }
                echo "</tr>";
            }

            fclose($file);
            ?>

        </tbody>
    </table>
</body>
</html>