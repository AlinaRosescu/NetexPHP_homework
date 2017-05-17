<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/projects.php");
?>

<section>
    <h1> Add new project</h1>
    <form id="add" method="post" action="">

        <label for="project">
            <span>Project name</span>
            <input type="text" name="project">
        </label>

        <input type="submit" value="Submit">
</form>
</section>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
