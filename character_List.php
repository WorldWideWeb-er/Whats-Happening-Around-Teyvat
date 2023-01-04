<?php include_once('php/phpCall/characterTalents.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats Happening Around Teyvat</title>
    <link href="./dist/style-char.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header">
        <div class="header__type">
            <a class="header__type inactive" href="material_List.php">Weapon Ascension Materials</a>
            <a class="header__type" href="character_List.php">Character Talent Materials</a>
        </div>
        <div class="header__filter" method="GET">
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">All</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=matDayOne&filterDay=Monday">Monday & Thursday</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=matDayOne&filterDay=Tuesday">Tuesday & Friday</a>
            <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?filterColumn=matDayOne&filterDay=Wednesday">Wednesday & Saturday</a>
        </div>
    </header>
    <div class="tableGrid">
        <div class="tableGrid__header">
            <p>Image</p>
            <p>Name</p>
            <p>Characters</p>
            <p>Days</p>
        </div>
        <div class="tableGrid__info">
            <?php
            foreach ($charTalList as $charTal) {
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