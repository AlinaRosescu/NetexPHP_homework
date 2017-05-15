<?php

require_once(dirname(__FILE__) . "/../db_model/projects.php");
require_once(dirname(__FILE__) . "/../web/header.php");
$dbItems = getProjects();


?>

<table>
    <tbody>
    <tr>
        <th>Issue</th>
        <th>Project</th>
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