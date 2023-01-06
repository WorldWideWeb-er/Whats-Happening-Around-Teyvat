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
        <div class="tableGrid__char">
            <h3>Chracter Talent Materials</h3>
            <?php
            foreach ($charDailyList as $charTal) {
            ?>
                <div class="matInfo">
                    <img src="https://rerollcdn.com/GENSHIN/Farming/NEW/<?php echo $charTal['matName'] ?>.png " alt="<?php echo $charTal['matName'] ?> Img">
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
                            document.querySelector("#<?php echo $charTal['matName'] ?>CharList").appendChild(charInfo)
                        }
                    </script>
                </div>
            <?php } ?>
        </div>
    </div>
</body>