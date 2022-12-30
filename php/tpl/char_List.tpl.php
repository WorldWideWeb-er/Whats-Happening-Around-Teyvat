<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div>
        <form class="form-inline" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="GET">
            <div class="row">
                <div class="col-sm-2">
                    <span class="input-group-text">Search:</span>
                </div>
                <div class="col-sm-2">
                    <select class="form-select" name="filterColumn" id="search">
                        <option value="wepAscName">Weapon Asc. Name</option>
                        <option>Weapon Asc. Day</option>
                    </select>
                    <select class="form-select" name="filterDay" id="search">
                        <option>Select a Day</option>
                        <option value="">Monday & Thursday</option>
                        <option value="">Tuesday & Friday</option>
                        <option value="">Wednesday & Saturday</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="filterText" />
                </div>
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-warning" name="filter" value="Search" />
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Weapon Ascension Id&nbsp;</th>
                <th>Weapon Ascension Name&nbsp;</th>
                <th>Weapon Ascension Days&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($wepAscList as $wepAsc) {
            ?>
                <tr>
                    <td> <?php echo $wepAsc['wepAscId'] ?></td>
                    <td> <?php echo $wepAsc['wepAscName'] ?></td>
                    <td> <?php echo $wepAsc['wepAscDayOne'] ?> & <?php echo $wepAsc['wepAscDayTwo'] ?> </td>
                    <td>
                        <a href="faq_view.php?faqId=<?php echo $faqSingle['faqId'] ?>"><button type="button" class="btn btn-outline-info">View</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>