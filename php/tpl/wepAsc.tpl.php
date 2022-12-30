<div class="wepAscCont">
    <ul>
        <?php foreach ($wepAscList as $wepAscItem) { ?>
            <?php if ($wepCount++ >= $wepTotal) break; ?>
            <p><?= $wepAscItem["wepAscName"]; ?>
                - Days: <?= $wepAscItem["wepAscDayOne"],
                        $wepAscItem["wepAscDayTwo"],
                        $wepAscItem["wepAscSunday"]; ?> </p>
        <?php } ?>
    </ul>
</div>