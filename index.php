
<html>
    <head>
        <title>Nathan GASC</title>
        <link rel="stylesheet" href="main.css">
        <link href="/fonts/css/all.css" rel="stylesheet">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    </head>

    <body>
        
        <div id="introPage"><div id='intro' class='intro'>
            <img src='/media/PP.jpg' class="pp">
            <div class="name">Nathan GASC</div>
            <div class="subname">
                STEM student at Ecole Polytechnique
            </div>

            <div class='presentation'>
                <div class='contact'>
                    <p>
                        <i id='mailIcon' class="fas fa-envelope"></i> <span>nathan.gasc[at]polytechnique.edu</span>
                        <br><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/nathan-gasc-356365193">LinkedIn</a>
                        <br><img src='/media/USicon.png' class='icon'> <a href='/media/CV_Nathan_GASC_EN.pdf'>International CV</a>
                        <br><img src='/media/FRicon.png' class='icon'> <a href='/media/CV_Nathan_GASC_FR.pdf'>French CV</a>
                    </p>
                </div>
                <div class='introText'>
                    <p>
                        I'm a french student at the <a href='https://en.wikipedia.org/wiki/%C3%89cole_Polytechnique'>Ecole Polytechnique</a> near Paris. 
                    </p>
                </div>
            </div>
            
            <div id='CV' class='CV'>

                <div id='formation' class='point'>
                    <h2>
                        Formation
                    </h2>
                    <ul style="text-align: left;">
                        <li>2020 - Today : <a href='https://en.wikipedia.org/wiki/%C3%89cole_Polytechnique'>Ecole Polytechnique</a></li>
                        <li>2018 - 2020 : <a href='https://en.wikipedia.org/wiki/Classe_pr%C3%A9paratoire_aux_grandes_%C3%A9coles'>Higher School Preparatory Classes</a></li>
                        <li>2018 : Science high school</li>
                    </ul>
                </div>

                <div id='exp' class='point'>
                    <h2>
                        Experiences
                    </h2>
                    <ul style="text-align: left;">
                        <li>2021 - Today : President of the computer association of the Ecole Polytechnique</a></li>
                        <li>2021 - Today : Webmaster of the <a href='https://www.x-forum.fr/'>X-Forum</a></li>
                        <li>Summer 2021 : Volunteering for the FACE in French Polynesia (consulting for the creation of a food bank)</li>
                        <li>June 2019 : <a href='https://en.wikipedia.org/wiki/International_Physics_Olympiad'>International Physics Olympiad (IPhO)</a> in Tel-Aviv, french team.</li>
                    </ul>
                </div>

                <div class='point'>
                    <h2>
                        Skills
                    </h2>
                    <ul style="text-align: left;">
                        <li>Programming languages : Python3, C, PHP, JAVA, VBA, HTML, CSS, JS, SQL</li>
                        <li>Tools : Office, SolidWorks, Simulink, VS Code, GIT, Windows and Ubuntu</li>
                        <li>Cybersecurity : Root-me, <a href="https://tracs.viarezo.fr/">TRACS</a> (8th team over 94 in 2021)</li>
                        <li>Other : Driving License, fluent in french, advanced in english, intermediate in spanish</li>
                    </ul>
                </div>

    </div>

    <span id='showButton' class='showButton' onclick="showCV()">About me <i class="fas fa-chevron-down"></i></span>
    <script>
    function showCV(){
        document.getElementById('CV').style.maxHeight = '700px';
        document.getElementById('intro').style.marginTop = "50px";
        fade(document.getElementById('showButton'));
        document.getElementById('exp').style.marginBottom = '0px';
        document.getElementById('formation').style.marginBottom = '0px';
    }
    </script>
</div></div>

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