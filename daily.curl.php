<?php include_once('php/phpCall/dailyList.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats Happening Around Teyvat</title>
    <link href="./dist/style-daily.css" rel="stylesheet" type="text/css">
</head>

<head>

</head>

<body>
    <?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/WHAT/daily-char");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36";
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    $curlChar = curl_exec($ch);
    curl_close($ch);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/WHAT/daily-wep');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36";
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    $curlwep = curl_exec($ch);
    curl_close($ch);


    ?>
    <?php echo $curlChar ?>
    <?php echo $curlwep ?>
</body>