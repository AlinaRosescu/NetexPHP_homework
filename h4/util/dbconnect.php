<?php

function getConnection() {
    $link = mysqli_connect("localhost", "root", "", "complaints");
    return $link;
}

function closeConnection($link){
    mysqli_close($link);
}