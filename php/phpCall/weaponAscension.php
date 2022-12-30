<?php
require_once('./php/class/wepAsc.class.php');

$wepAsc = new wepAsc();
//Get Wep Info
$wepAscList = $wepAsc->getWepListFiltered(
    (isset($_GET['filterColumn']) ? $_GET['filterColumn'] : null),
    (isset($_GET['filterDay']) ? $_GET['filterDay'] : null)
);
