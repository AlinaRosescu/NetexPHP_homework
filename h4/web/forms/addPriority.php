<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/priorities.php");
?>
<section>
    <h1> Add new priority</h1>
    <form id="add" method="post" action="">

        <label for="priority">
            <span>Priority level</span>
            <input type=text" name="priority">
        </label>

        <input type="submit" value="Submit">
    </form>
</section>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
