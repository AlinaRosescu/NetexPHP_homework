<?php
require_once(dirname(__FILE__) . "/../util/dbconnect.php");

function getIssues(){
    $query = "SELECT issues.id,issues.issue,projects.project, priorities.priority,statuses.status
              FROM issues
              LEFT JOIN priorities
                ON priorities.id = issues.priority_id
              LEFT JOIN statuses
                ON statuses.id = issues.status_id
              LEFT JOIN projects
                ON projects.id = issues.project_id";

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

function addIssue($issue, $project_id, $priority_id, $status_id) {
    $query = "INSERT INTO `issues` (issue, project_id, priority_id, status_id) VALUES ('$issue'.'$project_id','$priority_id','$status_id')";

    $mysqlConnection = getConnection();
    $issueAdded = mysqli_query($mysqlConnection, $query);

    closeConnection($mysqlConnection);

    return $issueAdded;
}

function getIssueByProject() {
    $query = "SELECT `issues.issue`,`priorities.priority`,`projects.project`,`statuses.status`
              FROM `issues`
              LEFT JOIN `complaints`
                ON `issues.id = complaints.issue_id`
              LEFT JOIN `priorities`
                ON `priorities.id = complaints.priotity_id`
              LEFT JOIN `statuses`
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