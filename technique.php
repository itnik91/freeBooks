<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.html') ?>
    </head>
    <body>
        <div id="page">
            <header>
                <?php include_once('includes/header.html') ?>
            </header>
            <section>
                <h1>Gagner de l'argent sur internet</h1>
                <hr id="main_hr" />
                <article id="centrer" >
                    <?php
                    if(file_exists('ebooks/'.$page.'.html')){
                        include_once('ebooks/'.$page.'.html');
                    }
                    else{
                        include_once('articles/404.html');
                    }
                    ?>
                </article>
                <?php include_once('includes/liens.html') ?>
            </section>
            <footer>
                <?php include_once('includes/footer.html') ?>
            </footer>
        </div>
    </body>
</html>