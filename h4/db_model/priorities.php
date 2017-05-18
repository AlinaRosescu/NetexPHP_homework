<?php
require_once(dirname(__FILE__) . "/../util/dbconnect.php");

function getPriorities(){
    $query = "SELECT * FROM `priorities`";

    $mysqlConnection = getConnection();
    $result = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return array();
    }
}

function addPriorities($priority) {
    $query = "INSERT INTO `priorities` (priority) VALUES ('$priority')";

    $mysqlConnection = getConnection();
    $priorityAdded = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    return $priorityAdded;

}