<?php

require_once(dirname(__FILE__) . "/../header.php");
require_once(dirname(__FILE__) . "/../../db_model/projects.php");
?>

<form method="post" action="">

    <label>Project name</label>
    <input name="project">

    <input type="submit" value="Submit">
</form>


<?php
require_once(dirname(__FILE__) . "/../footer.php");
?>
