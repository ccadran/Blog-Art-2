<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numThem = $_POST['numThem'];

sql_delete('thematique', "numThem = $numThem");


header('Location: ../../views/backend/thematiques/list.php');