<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/statuses.php");
?>

<form method="post" action="">
    <label>Status</label>
    <input name="status">

    <input type="submit" value="Submit">
</form>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
