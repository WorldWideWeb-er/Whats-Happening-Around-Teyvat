<?php include_once('php/phpCall/weaponAscension.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats Happening Around Teyvat</title>
    <link href="./dist/style-wepAsc.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header">
        <div class="header__filter" method="GET">
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">All</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=wepAscDayOne&filterDay=Monday">Monday & Thursday</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=wepAscDayOne&filterDay=Tuesday">Tuesday & Friday</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=wepAscDayOne&filterDay=Wednesday">Wednesday & Saturday</a>
        </div>
    </header>
    <div class="tableGrid">
        <div class="tableGrid__header">
            <p>Image</p>
            <p>Name</p>
            <p>Days</p>
        </div>
        <div class="tableGrid__info">
            <?php
            foreach ($wepAscList as $wepAsc) {
            ?>
                <div class="wepAsc">
                    <img src="./inc/wepAsc_img/<?php echo $wepAsc['imgName'] ?>.webp" alt="<?php echo $wepAsc['imgName'] ?> Img">
                    <p> <?php echo $wepAsc['wepAscName'] ?></p>
                    <p> <?php echo $wepAsc['wepAscDayOne'] ?> & <?php echo $wepAsc['wepAscDayTwo'] ?></p>
                    <div class="wepAsc__Edit">
                        <a href="faq_view.php?faqId=<?php echo $faqSingle['faqId'] ?>">
                            <p>Edit</p>
                        </a>
                    </div>

                </div>
            <?php } ?>


        </div>
    </div>
</body>