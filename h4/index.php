<?php
require_once(dirname(__FILE__) . "/web/header.php");


if(getIssues()) {
    require_once(dirname(__FILE__) . "/web/issues.php");
} else {
    require_once(dirname(__FILE__) . "/web/addissue.php");
}

require_once(dirname(__FILE__) . "/web/footer.php");
?>