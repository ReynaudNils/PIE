<!DOCTYPE html>
<meta charset="utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>lire_formulaire</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="std_box">
            Hi <strong><?php echo htmlspecialchars($_POST['name']); ?></strong> !
            <br />
            You successfully created your account.
            <br />
            <a href="5_films_you_like.php"><input class="std_button" type="button" value="continue"></a>
        </div>
    </body>
</html>

