<?php

// core functions
include_once "core.php";

// session check
seg(1);

// check if user created an account
if(isset($_SESSION["created"])){ unset($_SESSION["created"]); } else { header("Location: ".SITE_URL); exit; }

// page
$tpl->set_param("sel_cat", -1);
$tpl->set_param("page_title", "Account Created");
$tpl->load("head");
$tpl->load("account_created");
$tpl->load("footer");
$tpl->output();
?>
