<!DOCTYPE html>
<meta charset="utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>update_database</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="std_box">
            Hi <strong><?php echo htmlspecialchars($_POST['name']); ?></strong> !
            <br />
            You successfully created your account.
            <br />
        <a href="Suggestion.html"><input class="std_button" type="button" value="See suggestions"></a>
        </div>
    </body>
</html>