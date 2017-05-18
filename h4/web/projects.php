<?php

require_once(dirname(__FILE__) . "/../db_model/projects.php");
require_once(dirname(__FILE__) . "/../web/header.php");

if (!empty($_POST['submitProject'])) {
    $project = $_POST['project'];
    addProjects($project);
}

$dbItems = getProjects();
?>

<section>
    <h1>Registered projects</h1>
    <ul id="itemList">
        <?php
        foreach($dbItems as $dbItem) {
            echo "<li>" . ucfirst($dbItem['project']) . "</li>";
        }
        ?>
    </ul>
</section>

<?php
require_once(dirname(__FILE__) . "/../web/footer.php");
?>