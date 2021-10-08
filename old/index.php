<?php
//entry point

if (isset($_GET['ajax'])){
    require 'ajax.php';
}
?>

<html>
    <head>
        <title>Nathan GASC's website</title>
        <meta name="google-site-verification" content="jLy_9gzdkk3nE5Py_Ukit-gnsV80lpjpJ50e41phdqk" />
        <link href="css/global.css" rel="stylesheet">
        <link href="fonts/css/all.css" rel="stylesheet">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    </head>

    <body>
    <div class="header">
        <div class="logo">
            <a href="/"><B>Home</B></a>
        </div>

        <div class="about">
            <button type="button" class="aboutButton" onclick="location.href='/index.php?page=about'">About Me</button>
            <a class="github" href="https://github.com/ArtemisPlayer"><img src="media/github.png"></a>
        </div>
    </div>

    <?php
    if (!isset($_GET["page"]) or $_GET["page"] == "home"){
        require 'pages/home.php';
    } else if ($_GET["page"] == "about"){
        require 'pages/about.php';
    } else if ($_GET["page"] == "edit"){
        require 'pages/edit.php';
    } else {
        die("Des amateurs c'est ce que nous sommes tous, on ne vit jamais assez longtemps pour être autre chose, surtout vous.");
    }
    ?>
    </body>

</html>