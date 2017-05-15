<?php
require_once(dirname(__FILE__) . "/web/header.php");
require_once(dirname(__FILE__) . "/web/issues.php");

if(getIssues()) {
    require_once(dirname(__FILE__) . "/web/issues.php");
} else {
    require_once(dirname(__FILE__) . "/web/forms/addIssue.php");
}

require_once(dirname(__FILE__) . "/web/footer.php");
