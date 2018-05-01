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


if(isset($_POST['prenom'])) {
    $nom = strtoupper($_POST['prenom']);
    echo $nom;
    echo 'shtroumpf';
    $req = $pdo->prepare("INSERT INTO test1 (nom) VALUE (:nom)");
    $req->execute(array(
        "nom" => $nom
    ));
}
else{

}
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
