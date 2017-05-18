<?php

require_once(dirname(__FILE__) . "/header.php");
require_once(dirname(__FILE__) . "/../db_model/issues.php");
require_once(dirname(__FILE__) . "/../db_model/projects.php");


if (!empty($_POST['submitIssue'])) {
    $issue = $_POST['issue'];
    $project_id = $_POST['project'];
    $priority_id = $_POST['priority'];
    $status_id = $_POST['status'];
    addIssue($issue, $project_id,$priority_id, $status_id);
}

$dbItems = getIssues();
$dbProjects = getProjects();


?>
<section>
    <h1>Registered issues</h1>
    <form id="show" method="get" action="">
        <select>
            <option>All</option>
            <?php

                foreach($dbProjects as $dbProject) {
                    echo "<option>" . ucfirst($dbProject['project']) . "</option>";
                }
            ?>
        </select>
    </form>
    <table>
        <tbody>
            <tr>
                <th>Nr.</th>
                <th>Issue</th>
                <th>Project</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Operations</th>
            </tr>
            <?php
                foreach($dbItems as $dbItem) {
                    echo "<tr>";
                    foreach ($dbItem as $key=>$value) {
                    echo "<td>" . ucfirst($value) . "</td>";
                    }
            ?>
                <td>
                    <form id="operations" method="post" action="">
                        <input name="<?=$dbItem['id']?>" type="hidden" />
                        <input type="submit" name="edit" value="Edit" />
                        <input type="submit" name="delete" value="Delete" />
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>


        </tbody>
    </table>
</section>