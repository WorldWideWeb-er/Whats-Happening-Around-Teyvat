<?php
require_once('./php/class/char.class.php');

$charMat = new charTal();
//Get Character Info
$charTalList = $charMat->getcharListFiltered(
    (isset($_GET['filterColumn']) ? $_GET['filterColumn'] : null),
    (isset($_GET['filterDay']) ? $_GET['filterDay'] : null)
);
