<?php

require_once(dirname(__FILE__) . "/../db_model/priorities.php");
require_once(dirname(__FILE__) . "/../web/header.php");
$dbItems = getPriorities();


?>

    <table>
        <tbody>
        <tr>
            <th>Issue</th>
            <th>Priority</th>
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