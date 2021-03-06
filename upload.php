<?php

// core functions
include_once "core.php";

// session check
seg(2);

// page params
$tpl->set_param("mfs_upload", $config["mfs_upload"]); // max mod file size for upload value
$tpl->set_param("mfs_image", $config["mfs_image"]); // max image file size for upload value
$tpl->set_param("noi", $config["noi"]); // max number of gallery images

// page
$tpl->set_param("sel_cat", -1);
$tpl->set_param("page_title", "Carregar um mod");
$tpl->load("head");
$tpl->load("upload");
$tpl->load("footer");
$tpl->output();
?>
