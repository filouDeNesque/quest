<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 08/05/2018
 * Time: 19:03
 */
if (isset($_POST['nom']) ? $_POST['nom'] : NULL) {
    $nom = $_POST['nom'];
} else {


    //redirection si null
//    header('http://localhost/quest/indextest.php');
//    exit();
}
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$age = isset($_POST['age']) ? $_POST['age'] : NULL;
$satv = isset($_POST['SatisfactionVendeur']) ? $_POST['SatisfactionVendeur'] : NULL;
$satd = isset($_POST['SatisfactionDepot']) ? $_POST['SatisfactionDepot'] : NULL;
$satc = isset($_POST['Satisfactioncaisse']) ? $_POST['Satisfactioncaisse'] : NULL;
$monta = isset($_POST['MontantAchat']) ? $_POST['MontantAchat'] : NULL;


if (isset($_POST['nom']) ? $_POST['nom'] : NULL){

}
else{

}




//Inclusion des objets

include ('test\filetest.php');

ob_start();

require 'test.php';

$content = ob_get_clean();

require  'page/default/default.php';
