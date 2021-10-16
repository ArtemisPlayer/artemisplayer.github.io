
<html>
    <head>
        <title>Nathan GASC</title>
        <link rel="stylesheet" href="main.css">
        <link href="/fonts/css/all.css" rel="stylesheet">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    </head>

    <body>
        
        <div id="introPage"><?php require "pages/intro.php" ?></div>

    </body>
</html>
<script>
    function fade(element) {
        var op = 1;  
        var timer = setInterval(function () {
            if (op <= 0.1){
                clearInterval(timer);
                element.style.display = 'none';
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 50);
    }

</script>