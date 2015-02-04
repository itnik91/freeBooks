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
                    <div id="image"><a href="article=article1"><img src="images/article.jpg" alt="article" ></a></div>
                    <div id="texte">
                        <h2><a href="article=article1">Article 1</a></h2>
                        <p>Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur, cum non inpetraret, minabatur se discessurum: ut saltem id metuens perquisitor malivolus tandem desineret quieti coalitos homines in aperta pericula proiectare.</p>
                    </div>
                </div>
                <hr/>
                <div id="article">
                    <div id="image"><a href="article=article2"><img src="images/article.jpg" alt="article"></a></div>
                    <div id="texte">
                        <h2><a href="article=article2">Article 2</a></h2>
                        <p>Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur, cum non inpetraret, minabatur se discessurum: ut saltem id metuens perquisitor malivolus tandem desineret quieti coalitos homines in aperta pericula proiectare.</p>
                    </div>
                </div>
                <hr/>
                <div id="article">
                    <div id="image"><a href="article=article3"><img src="images/article.jpg" alt="article"></a></div>
                    <div id="texte">
                        <h2><a href="article=article3">Article 3</a></h2>
                        <p>Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur, cum non inpetraret, minabatur se discessurum: ut saltem id metuens perquisitor malivolus tandem desineret quieti coalitos homines in aperta pericula proiectare.</p>
                    </div>
                </div>    
                <?php include_once('includes/liens.html') ?>
            </section>
            <footer>
                <?php include_once('includes/footer.html') ?>
            </footer>
        </div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');        
            ga('create', 'UA-44902153-1', 'argent-web.fr');
            ga('send', 'pageview');
        </script>
    </body>
</html>