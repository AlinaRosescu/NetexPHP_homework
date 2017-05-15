<?php
require_once(dirname(__FILE__) . "/../util/dbconnect.php");

require_once(dirname(__FILE__) . "/../db_model/issues.php");
$dbItems = getIssues();
var_dump(getIssues());


?>

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
