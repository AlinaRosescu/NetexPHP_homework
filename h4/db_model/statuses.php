<?php
require_once(dirname(__FILE__) . "/../util/dbconnect.php");

function getStatuses(){
    $query = "SELECT * FROM `statuses`";

    $mysqlConnection = getConnection();
    $result = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
        return array();
    }

}

function addStatuses($status) {
    $query = "INSERT INTO `statuses` (status) VALUES ('$status')";

    $mysqlConnection = getConnection();
    $statusAdded = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    return $statusAdded;

}