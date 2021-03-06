<?php

// core functions
include_once "core.php";

// no session check needed

$term = "";
$pagn = "";
$results = '<font color="#666">Você deve inserir um nome válido!</font>';

if(isset($_GET["term"]) || !empty($_GET["term"]))
{
	// search term
	$term = filter($_GET["term"]);

	if(strlen($term) < 4)
	{
		$results = '<div class="msg mt_e">Sua pesquisa deve ter pelo menos 4 caracteres.</div>';
	}
	else
	{
		// pagination id
		if(isset($_GET["pid"]) && is_numeric($_GET["pid"]) && $_GET["pid"] != 0){ $mods->page_id = $_GET["pid"]; } else { $mods->page_id = 1; }

		// page settings
		$mods->page_query = 'name LIKE "%'.$term.'%" AND status = 1';
		$mods->pagination_url = 'search?term='.$term.'&pid=';

		$results = $mods->load_list("_search");
		$pagn = $mods->pagn();
	}
}

// search param results
$tpl->set_param("term", $term);
$tpl->set_param("results", $results, true);
$tpl->set_param("pagination", $pagn);

// page
$tpl->set_param("sel_cat", -1);
$tpl->set_param("page_title", "Resultados para: ".$term);
$tpl->load("head");
$tpl->load("search");
$tpl->load("footer");
$tpl->output();
?>
