<?php

require_once(dirname(__FILE__) . "/../db_model/issues.php");
require_once(dirname(__FILE__) . "/../db_model/projects.php");
$dbItems = getIssues();
$dbProjects = getProjects();


?>
<form method="get" action="" >
    <select>
        <option>All</option>
        <?php
            foreach($dbProjects as $dbProject) {
                echo "<option>" . $dbProject['project'] . "</option>";
            }
        ?>
    </select>
</form>
<table>
    <tbody>
        <tr>
            <th>Issue</th>
            <th>Project</th>
            <th>Priority</th>
            <th>Status</th>
        </tr>
        <?php
            foreach($dbItems as $dbItem) {
                echo "<tr>";
                foreach ($dbItem as $key=>$value) {
                echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
