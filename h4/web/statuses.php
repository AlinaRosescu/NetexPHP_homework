<?php

require_once(dirname(__FILE__) . "/../db_model/statuses.php");
require_once(dirname(__FILE__) . "/../web/header.php");
$dbItems = getStatuses();
?>

<section>
    <h1>Registered statuses</h1>
    <ul id="itemList">
        <?php
        foreach($dbItems as $dbItem) {
            echo "<li>" . ucfirst($dbItem['status']) . "</li>";
        }
        ?>
    </ul>
</section>

<?php
require_once(dirname(__FILE__) . "/../web/footer.php");
?>