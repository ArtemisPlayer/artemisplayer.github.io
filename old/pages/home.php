<style>
    @import  url("css/home.css");
</style>
<script>

function extend(id){
    div = document.getElementById(id);
    div.style.maxHeight="1000vh";
    button = document.getElementById(id + 'button');
    button.style.display='none';
}

function load(){
    pass = document.getElementById("mdp").value;
    art = document.getElementById("nom").value;
    if (art ==''){
        window.location.href="/index.php?page=edit&pass=" + pass;
    } else {
        window.location.href="/index.php?page=edit&pass=" + pass + "&edit=" + art;
    }
}

</script>


<div class="container">
    <div class="articles">
        <?php
            $dir = scandir('articles');
            unset($dir[1]);
            unset($dir[0]);
            foreach ($dir as $art):
            ?>
            <div class=article id="<?php echo $art; ?>">
                <?php require 'articles/'.$art; ?>
            </div>
            <button id="<?php echo $art.'button'; ?>" class="viewmore" onclick="extend('<?php echo $art; ?>')">View More</button>
            <?php
            endforeach;
        ?>
    </div>
    <div class="side">
            Hello there ! Welcome on my website that is also used as a blog.<br>
            I'm a french student, you can know more about me clicking the right button up there.
            <br>
            <br>
            <B>A quote:</B> (in french)<br>
            <?php require 'cits.php';?>
            <br><br>
            <div class="private">
            <B>Private space:</B><br>
                Password: <input id="mdp" type="text"><br>
                Article: <input id="nom" type="text"><br><br>
                <button type="button" onclick="load();" class='viewmore'>Connexion</button>
            </div>
     </div>
</div>
<span style="display:none">Nathan GASC ArtemisPlayer Polytechnique GASC</span>