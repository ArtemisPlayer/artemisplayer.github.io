<?php 
//Gère les requêtes ajax

function storeCit($cit){
    $all = file_get_contents('media/publicCits.txt');
    $all .= "#".$cit;
    file_put_contents('media/publicCits', $all);
}

if (isset($_GET["cit"])){
    storeCit($_GET["cit"]);
}
?>