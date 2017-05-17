<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/statuses.php");
?>

<section>
    <h1> Add new status</h1>
    <form id="add" method="post" action="">

        <label for="status">
            <span>Status level</span>
            <input type="text" name="status">
        </label>

        <input type="submit" value="Submit">
    </form>
</section>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
