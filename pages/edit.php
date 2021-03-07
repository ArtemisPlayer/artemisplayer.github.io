<?php 

if (!isset($_GET["pass"])){
    die ("No Password provided");
}
$pass = $_GET["pass"];

if (strtolower(md5($pass)) != "93078c16595fa886aa3c3a48c7a2cde9"){
    die ("Wrong password");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST["introtext"])) {
    $texte = $_POST["introtext"];

    if ($_POST['isNew']=='new'){
        $nom = 'articles/'.date("YmdHi").'article.html';
    } else {
        $nom = 'articles/'.$_POST['isNew'];
    }
    
    if ($texte == ""){
        unlink($nom);
    } else {
        
        if ($_POST['isNew']=='new'){
            $texte = $texte.'<br>'.$nom;
        }

        if (file_put_contents($nom, $texte)){
            echo "Article enregistré !<br>";
        }else {
            echo "Erreur lors de la création de l'article.<br>";
        }
        die();
    }
    
}


if (!isset($_GET["edit"]) or $_GET["edit"] == ''): ?>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?page=edit&pass='.$pass;?>">
        <textarea name="introtext" style="width: 100%; max-width: 100%;">...</textarea><br>
        <input type='hidden' value="new" name="isNew">
        <input type="submit" name="submit" value="Submit" class="blogSubmit">
    </form>

<?php else: 
$nom = $_GET['edit'];
$content = file_get_contents('articles/'.$nom);
?>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?page=edit&pass='.$pass;?>">
        <textarea name="introtext" style="width: 100%; max-width: 100%;"><?php echo $content; ?></textarea><br>
        <input type='hidden' value="<?php echo $nom; ?>" name="isNew">
        <input type="submit" name="submit" value="Submit" class="blogSubmit">
    </form>

<?php endif; ?>