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
    <div class="tableGrid">
        <div class="tableGrid__wep">
            <h3>Weapon Ascension Materials</h3>
            <?php
            foreach ($matDailyList as $wepAsc) {
            ?>
                <div class="wepAsc">
                    <img src="https://rerollcdn.com/GENSHIN/Farming/NEW/<?php echo $wepAsc['imgName'] ?>.png" alt="<?php echo $wepAsc['imgName'] ?> Img">
                    <p><?php echo $wepAsc['wepAscName'] ?></p>
                </div>
            <?php } ?>


        </div>
    </div>
</body>