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

echo $nom.$satc.$satv.$satd.$monta.$age;
echo $love;
echo $age;

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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
