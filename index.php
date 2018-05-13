<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 08/05/2018
 * Time: 19:03
 */


//Inclusion des objets

include('App/form/boxform.php');


if(isset($_GET['p'])){
    $p = $_GET['p'];
}
else{
    $p = 'home';
}


ob_start();
if($p=== 'home'){
    require 'page/home/home.php';
}elseif ($p === 'comment'){
    require 'page/comment.php';
}
$content = ob_get_clean();

require  'page/default/default.php';
