<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/priorities.php");
?>

<form method="post" action="">
    <label>Priority</label>
    <input name="priority">

    <input type="submit" value="Submit">
</form>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
