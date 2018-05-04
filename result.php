<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 01/05/2018
 * Time: 10:43
 */
$pdo = new PDO('mysql:host=localhost; dbname=quest','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$love = isset($_POST['love']) ? $_POST['love'] : NULL;
$age = isset($_POST['age']) ? $_POST['age'] : NULL;
$satv = isset($_POST['SatisfactionVendeur']) ? $_POST['SatisfactionVendeur'] : NULL;
$satd = isset($_POST['SatisfactionDepot']) ? $_POST['SatisfactionDepot'] : NULL;
$satc = isset($_POST['Satisfactioncaisse']) ? $_POST['Satisfactioncaisse'] : NULL;
$monta = isset($_POST['MontantAchat']) ? $_POST['MontantAchat'] : NULL;

//echo $nom.$satc.$satv.$satd.$monta.$age;
//echo $love;
//echo $age;

$req = $pdo->prepare("INSERT INTO test2 (nom, love, age, SatisfactionVendeur, SatisfactionDepot, Satisfactioncaisse, MontantAchat) 
                                VALUE (:nom, :love, :age, :SatisfactionVendeur, :SatisfactionDepot, :Satisfactioncaisse, :MontantAchat)");
$req->execute(array(
    "nom" => $nom,
    "love" => $love,
    "age" => $age,
    "SatisfactionVendeur" => $satv,
    "SatisfactionDepot" => $satd,
    "Satisfactioncaisse" => $satc,
    "MontantAchat" => $monta
));


//compteur
$sel = $pdo->query("SELECT * FROM test2");
$count = $sel->rowCount();
echo $count.' Avis';

$units = substr($count, -1);
if ($count>10){

    $diz = substr($count,-2, 1);
}else{
    $diz = 0;
}
if ($count>100){

    $cent = substr($count,-3, 1);
}else{
    $cent = 0;
}
if ($count>1000){

    $mill = substr($count,-4, 1);
}else{
    $mill = 0;
}


//calcul de moyenne

$requeteNombreMembres = $pdo->query('SELECT * FROM test2');
$data = $requeteNombreMembres->fetchAll(PDO::PARAM_STR);
$satve = 0;
$satca= 0;
$satde= 0;
$i= 0;

for ($i= 0;$i<$count;$i++){

    $strdata = intval($data[$i]['SatisfactionVendeur']);
    $strca = intval($data[$i]['Satisfactioncaisse']);
    $strde = intval($data[$i]['SatisfactionDepot']);

    $satve= $satve + $strdata *25;
    $satca= $satca + $strca *25;
    $satde = $satde + $strde *25;

}

$satglob = intval((($satca+$satve+$satve)/3)/100);
echo '  $data = '.$satve/100;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" href="result.css">
    <title>Document</title>
</head>
<body style="background-image: url('http://cdn1.bestpsdfreebies.com/wp-content/uploads/2014/05/Hexagon-1.jpg')">
<header>

    <nav class="navbar navbar-expand-lg navbar-light navstyle " >
        <a class="navbar-brand" href="#"><i class="fab fa-cuttlefish"></i>confo S.A.V</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/quest/index.php"><i class="far fa-smile"></i>Happy-client <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-wrench"></i>S.A.V <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-searchengin"></i>Engie<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<div class="raw rowtitle">
    <p><h1>Merci pour votre avis <?=$nom?>.</h1></p>
</div>
<div class="row rowavis">
    <div class="col-lg-7 col-sm-12 col-md-12">
        <div class="boxy1">
        <div class="card text-center ">
            <div class="card-header">
                <h2>Satisfaction vendeur</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="progress" >
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:<?= $satve/100 ?>%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <div class="boxy1">
        <div class="card text-center ">
            <div class="card-header">
                <h2>Satisfaction depôt</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="progress" >
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:<?=$satde/100?>%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <div class="boxy1">
        <div class="card text-center ">
            <div class="card-header ">
                <h2>Satisfaction caisse</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="progress" >
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:<?=$satca/100?>%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>

            </div>
        </div>
        </div>


    </div>

    <div class="col-lg-5 col-sm-12 col-md-12" style="background-color:rgba(5,120,255,0.07); padding-top: 2em" >

        <div class="titlecount"><h2>Nombre d'avis à ce jour</h2></div>
        <div class="container">
        <div class="bloc"><p><?=$units ?></p></div>
        <div class="bloc"><p><?=$diz ?></p></div>
        <div class="bloc"><p><?=$cent ?></p></div>
        <div class="bloc"><p><?=$mill ?></p></div>
        </div>


        <div class="boxy1" style="padding-top: 9em;">
            <div class="card text-center ">
                <div class="card-header ">
                    <h2>Satisfaction Global</h2>
                        <h3><?= $satglob?> %</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                        <?php
                        echo 'hello';
                        $sel = $pdo->prepare('SELECT * FROM test2');
                        while ($donnees = $sel->fetch()){
                            echo $donnees['nom'];
                            echo $donnees['MontantAchat'];
                        }
                        $sel->closeCursor();
                        ?>
                        With supporting text below as a natural lead-in to additional content.</p>
                    <div class="progress" >
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100" style="width:<?= $satglob?>%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

</body>
</html>
