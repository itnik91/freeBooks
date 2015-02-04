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
            <section id="avatar">
                <h1>Les meilleurs eBooks</h1>
                <hr id="main_hr" />
                <div id="article">
                    <div id="image"><a href="technique=ebook1"><img src="images/ebook.jpg" alt="ebook"></a></div>
                    <div id="texte">
                        <h2><a href="technique=ebook1">eBook 1</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <hr/>
                <div id="article">
                    <div id="image"><a href="technique=ebook2"><img src="images/ebook.jpg" alt="ebook"></a></div>
                    <div id="texte">
                        <h2><a href="technique=ebook2">eBook 2</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <hr/>
                <div id="article">
                    <div id="image"><a href="technique=ebook3"><img src="images/ebook.jpg" alt="ebook"></a></div>
                    <div id="texte">
                        <h2><a href="technique=ebook3">eBook 3</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <?php include_once('includes/liens.html') ?>
            </section>
            <footer>
                <?php include_once('includes/footer.html') ?>
            </footer>
        </div>
    </body>
</html>