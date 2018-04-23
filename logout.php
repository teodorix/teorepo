<?php
include_once("cms/modules/config.php");

  unset($_SESSION["loguser"]);
  session_destroy();
header("Location: /");
?>
