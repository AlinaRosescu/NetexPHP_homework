<?php

//create first file
$file = fopen('file.txt', 'w+');

fwrite($file, "aherphtoft");
rewind($file);
$read = fgets($file);

//put file info into an array
$chars = str_split($read,1);
$countArr = array_count_values($chars);

//separate vowels from consonants in 2 different arrays
$vowels = [];
$consonants = [];
foreach($chars as $char) {
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        array_push($vowels, $char);
    } else {
        array_push($consonants, $char);
    }
}

//create vowel file and write to it
$fileVowels = fopen('vowels.txt', 'w+');
fwrite($fileVowels, implode($vowels));

//create consonants file and write to it
$fileConsonants = fopen('consonants.txt', 'w+');
fwrite($fileConsonants, implode($consonants));

//read all 3 file contents
$mergeRead = file_get_contents('file.txt');
$mergeRead .= " " . file_get_contents('vowels.txt');
$mergeRead .= " " . file_get_contents('consonants.txt');

//create merge file and write to it
$mergeFile = fopen('merge.txt', 'w');
fwrite($mergeFile, $mergeRead);


//close all all file pointers
fclose($file);
fclose($fileVowels);
fclose($fileConsonants);

//zip the merge file
$zip = new ZipArchive;
if ($zip->open('compressed.zip', ZipArchive::CREATE) === TRUE) {
// Add merge file to the zip file
    $zip->addFile('merge.txt');
    $zip->close();
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
        <th>Character</th>
        <th>Number of appearances</th>
    </tr>
    <!--show letters and how many times they appear into a table-->
    <?php
    foreach ($countArr as $key=>$value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
