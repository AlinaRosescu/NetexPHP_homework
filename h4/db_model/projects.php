<?php

require_once(dirname(__FILE__)."/../util/dbconnect.php");

function getProjects(){
    $query = "SELECT * FROM `projects`";

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

function addProjects($project) {
    $query = "INSERT INTO `projects` (project) VALUES ('$project')";

    $mysqlConnection = getConnection();
    $projectAdded = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    return $projectAdded;

}
