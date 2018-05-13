<?php



$valued =  35;
$valuev = 35;
$valuec = 55;
?>
<head> <link rel="stylesheet" href="result.css"> </head>
<body>
<div class="row">
    <div class="col-lg-12 ">
        <?php SatisfacVend($valuev);?>
    <form name="instruction" method="post" action="App/resultformsat.php" >
            <?php
            infoname();
            $value = 'Depot';
            ?>

        <div class="row">
            <div class="col-lg-8">
                <?php inputsatdvc($value);
                $value = 'Vente';
                inputsatdvc($value);
                $value = 'Caisse';
                inputsatdvc($value);
                ?>
                <div class="divbottom" style="padding-left: 30%">
                    <input type="submit" name="submit" class="btn btn-info btn-lg justify-content-center" />
                </div>
    </form>
            </div>
            <div class="col-lg-4">
                <?php SatisfacVend($valuev);
                SatisfacDepot($valued);?>
            </div>
        </div>
    </div>
</div>
</body>
