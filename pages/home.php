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
            I'm programming using various languages: Python3, PHP, C, HTML, CSS and JS, you can find examples
            of what I am doing on <a href="">my Github</a>.
            <br>
            <br>
            <B>A quote:</B> (in french)<br>
            <?php require 'cits.php';?>
            <?php require 'mail.php'; ?>
    </div>
</div>