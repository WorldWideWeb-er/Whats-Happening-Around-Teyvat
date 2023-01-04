<?php
require_once('./php/class/mat.class.php');
require_once('./php/class/char.class.php');


//Get Wep Info
$wepAsc = new wepAsc();
$matDailyList = $wepAsc->getListDaily();
// var_dump(($matDailyList));

//Get Char Info
$charMat = new charTal();
$charDailyList = $charMat->getListDaily();

// var_dump($charDailyList);
