<?php

require_once(dirname(__FILE__) . "/../db_model/priorities.php");
require_once(dirname(__FILE__) . "/../web/header.php");
$dbItems = getPriorities();


?>
<section>
    <h1>Registered priorities</h1>
    <ul id="itemList">
        <?php
        foreach($dbItems as $dbItem) {
            echo "<li>" . ucfirst($dbItem['priority']) . "</li>";
        }
        ?>
    </ul>
</section>
<?php
require_once(dirname(__FILE__) . "/../web/footer.php");
?>