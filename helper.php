<?php 
//Helper général

function saveArticle($textHTML){
    $nom = 'articles/'.date("YmdHi").'article.html';
    file_put_contents($nom, $textHTML);
}



?>