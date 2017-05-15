<?php

require_once(dirname(__FILE__) . "/../db_model/statuses.php");
require_once(dirname(__FILE__) . "/../web/header.php");
$dbItems = getStatuses();


?>

    <table>
        <tbody>
        <tr>
            <th>Issue</th>
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
<?php
require_once(dirname(__FILE__) . "/../web/footer.php");
?>