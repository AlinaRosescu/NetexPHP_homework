<?php

function getConnection() {
    $link = mysqli_connect("localhost", "root", "auximus", "complaints");
    return $link;
}

function closeConnection($link){
    mysqli_close($link);
}