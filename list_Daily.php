<?php include_once('php/phpCall/dailyList.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats Happening Around Teyvat</title>
    <link href="./dist/style-daily.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="tableGrid">
        <div class="tableGrid__header">
            <p>Image</p>
            <p>Name</p>
            <p>Days</p>
        </div>
        <div class="tableGrid__wep">
            <?php
            foreach ($matDailyList as $wepAsc) {
            ?>
                <div class="wepAsc">
                    <img src="https://rerollcdn.com/GENSHIN/Farming/NEW/<?php echo $wepAsc['imgName'] ?>.png" alt="<?php echo $wepAsc['imgName'] ?> Img">
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
        <div class="tableGrid__char">
            <?php
            foreach ($charDailyList as $charTal) {
            ?>
                <div class="matInfo">
                    <img src="https://rerollcdn.com/GENSHIN/Farming/NEW/<?php echo $charTal['matName'] ?>.png " alt="<?php echo $charTal['matName'] ?> Img">
                    <p> <?php echo $charTal['matName'] ?></p>
                    <div id="<?php echo $charTal['matName'] ?>CharList" class="matInfo__Char"></div>
                    <script>
                        var charArray = [<?php echo $charTal['matChars'] ?>];
                        var charImgs = '';
                        charArray.forEach(charImg);
                        document.querySelector("#<?php echo $charTal['matName'] ?>CharList")

                        function charImg(item) {
                            let charInfo = document.createElement("p");
                            charInfo.setAttribute("class", "matInfo__Char__Indiv");
                            let charImgs = document.createElement("img");
                            charImgs.setAttribute("src", "https://rerollcdn.com/GENSHIN/Characters/" + item + ".png");
                            charInfo.appendChild(charImgs);
                            let charName = document.createElement("p");
                            charName.innerHTML = item;
                            charInfo.appendChild(charName);

                            document.querySelector("#<?php echo $charTal['matName'] ?>CharList").appendChild(charInfo)
                        }
                    </script>
                    <p> <?php echo $charTal['matDayOne'] ?> & <?php echo $charTal['matDayTwo'] ?></p>
                    <div class="matInfo__Edit">
                        <a href="faq_view.php?faqId=<?php echo $faqSingle['matId'] ?>">
                            <p>Edit</p>
                        </a>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</body>