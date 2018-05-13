<?php
if (isset($_POST['nom']) ? $_POST['nom'] : NULL) {
    $nom = $_POST['nom'];
} else {
    //redirection si null
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
if (isset($_POST['prenom']) ? $_POST['prenom']: NULL) {
    $prenom = $_POST['prenom'];
} else {
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
if (isset($_POST['age']) ? $_POST['age'] : NULL) {
    $age = $_POST['age'];
} else {
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
if (isset($_POST['SatisfactionDepot']) ? $_POST['SatisfactionDepot'] :  NULL) {
    $satd = $_POST['SatisfactionDepot'];
} else {
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
if (isset($_POST['SatisfactionVente']) ? $_POST['SatisfactionVente'] : NULL) {
    $satv = $_POST['SatisfactionVente'];
} else {
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
if (isset($_POST['SatisfactionCaisse']) ? $_POST['SatisfactionCaisse'] :NULL) {
    $satc = $_POST['SatisfactionCaisse'];
} else {
    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
}
//if (isset($_POST['MontantAchat']) ? $_POST['MontantAchat'] : NULL) {
//    $monta = $_POST['MontantAchat'];
//} else {
//    echo "<script type='text/javascript'>document.location.replace('http://localhost/quest/indextest.php');</script>";
//}

echo $_POST["SatisfactionCaisse"];
echo $_POST["SatisfactionDepot"];
echo $_POST["SatisfactionVente"];

////inclusion base de donnee
//require 'App/Database/connection.php';
//postform($nom,$prenom,$age,$satd,$satc,$satv);
//


$datas = [$nom,$prenom,$age,$satd,$satc,$satv];
var_dump($_POST);
