<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/issues.php");
require_once(dirname(__FILE__) . "/../../db_model/projects.php");
require_once(dirname(__FILE__) . "/../../db_model/priorities.php");
require_once(dirname(__FILE__) . "/../../db_model/statuses.php");

$dbProjects = getProjects();
$dbPriorities = getPriorities();
$dbStatuses = getStatuses();

?>

<form name="issue" method="post" action="">
    <label>Issue</label>
    <input name="issue">

    <label>Project name</label>
    <select>
        <?php
        foreach($dbProjects as $dbProject) {
            echo "<option>" . $dbProject['project'] . "</option>";
        }
        ?>
    </select>

    <label>Priority level</label>
    <select>
        <?php
        foreach($dbPriorities as $dbPriority) {
            echo "<option>" . $dbPriority['priority'] . "</option>";
        }
        ?>
    </select>

    <label>Status</label>
    <select>
        <?php
        foreach($dbStatuses as $dbStatus) {
            echo "<option>" . $dbStatus['status'] . "</option>";
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
