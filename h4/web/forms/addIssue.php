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

<section>
    <h1> Add new issue</h1>
    <form id="add" method="post" action="">
        <label for="issue">
            <span>Issue</span>
            <input type="text" name="issue" value="" />
        </label>

        <label for="project">
            <span>Project name</span>
            <select name="project">
                <?php
                foreach($dbProjects as $dbProject) {
                    echo "<option>" . ucfirst($dbProject['project']) . "</option>";
                }
                ?>
            </select>
        </label>

        <label for="priority">
            <span>Priority level</span>
            <select name="priority">
                <?php
                foreach($dbPriorities as $dbPriority) {
                    echo "<option>" . ucfirst($dbPriority['priority']). "</option>";
                }
                ?>
            </select>
        </label>

        <label for="status">
            <span>Status</span>
            <select name="status">
                <?php
                foreach($dbStatuses as $dbStatus) {
                    echo "<option>" . ucfirst($dbStatus['status']) . "</option>";
                }
                ?>
            </select>
        </label>

        <input type="submit" value="Submit">

    </form>
</section>

<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
