<?php
require_once(dirname(__FILE__) . "/../util/dbconnect.php");

function getIssues(){
    $query = "SELECT issues.issue,priorities.priority,projects.project,statuses.status
              FROM issues
              LEFT JOIN complaints
                ON issues.id = complaints.issue_id
              LEFT JOIN priorities
                ON priorities.id = complaints.priority_id
              LEFT JOIN statuses
                ON statuses.id = complaints.status_id
              LEFT JOIN projects
                ON projects.id = complaints.project_id";

    $mysqlConnection = getConnection();
    $result = mysqli_query($mysqlConnection, $query);
    var_dump($result);
    closeConnection($mysqlConnection);

    if($result){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
        return array();
    }

}

function getIssueProject() {
    $query = "SELECT `issues.description`,`priorities.level`,`projects.type`,`statuses.type`
              FROM `issues`
              LEFT JOIN `complaints`
                ON `issues.id = complaints.issue_id`
              LEFT JOIN `priorities`
                ON `priorities.id = complaints.priotity_id`
              LEFT JOIN `statuses`
                ON `statuses.id = complaints.status_id`
                ON `statuses.id = complaints.status_id`
              LEFT JOIN `projects`
                ON `projects.id = complaints.project_id`";

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