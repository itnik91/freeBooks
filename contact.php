<?php

if(isset($_POST['envoyer'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $header = "From: $nom <$email>";
    $mail = "guillaume.torres91@gmail.com";
    $message = stripslashes($message);
    if(mail($mail, "Contact", $message, $header)){
        $msg = "Message envoyé !";
        unset($nom);
        unset($email);
        unset($message);
    }else{
        $msg2 = "Le message n'a pas été envoyé !";
    }
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
                <h1>Les meilleurs eBooks</h1>
                <hr id="main_hr" />
                <p style="text-align:center; color: green;" ><strong><?php if(isset($msg)) echo $msg; ?></strong></p>
                <p style="text-align:center; color: red;" ><strong><?php if(isset($msg2)) echo $msg2; ?></strong></p>
                <h2>Me contacter</h2>
                <p>
                  La réponse que vous cherchez se trouve peut être dans la <a href="foire-aux-questions">FAQ</a> ou dans un de mes <a href="accueil">articles</a>.<br>
                  Si malgré les explications du site vous avez toujours des questions, envoyez moi un message :
                </p>
                <form method="post" >
                    <p>
                    <label for="nom" > Votre nom :</label><br/>
                	<input type="text" name="nom" id="nom" pattern="^[a-zA-Z0-9._-]+$" required />
                    </p>
                    <p>
                    <label for="email" >Votre email :</label><br/>
                    <input type="text" name="email" id="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,4}$" required />
                    </p>
                    <p>
                    <label for="message" >Votre message :</label><br/>
                    <textarea name="message" required ></textarea>
                    </p>
                    <p><input type="submit" name="envoyer" value="Envoyer le message" /></p>
                </form>
                <?php include_once('includes/liens.html') ?>
            </section>
            <footer>
                <?php include_once('includes/footer.html') ?>
            </footer>
        </div>
    </body>
</html>