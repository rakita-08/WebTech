<?php
// reset_counter.php
session_start();
$_SESSION["page_views"] = 0;
header("Location: pgview_counter.php");
exit;
?>