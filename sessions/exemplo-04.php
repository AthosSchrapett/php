<?php

session_id('vci9327jjtr42irr1m3h4lo3i3');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>