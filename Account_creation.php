<!DOCTYPE html>
<meta charset="utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>Account creation</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h1>Account creation</h1>
        
        <!--Si on passe par un serveur, remplacer p<->form et button<->submitt.-->
        <!--Pour l'instant, coder en JS: "si button active alors read text and password".-->
        <div class="std_box">
            <form action="read_form.php" method="post">
                <table>
                    <tr><td>id:</td>
                        <td><input type="text" name="name" required minlength="2" maxlength="20" size="30"></td> </tr>
                    <tr><td>pw:</td>
                        <td><input type="password" id="password" required minlength="6" maxlength="12" size="30"></td> </tr>
                <!--peut-etre pas necessaire-->
                <!--<tr><td>confirm pw:</td>
                        <td><input type="password" id="new_pw" required minlength="6" maxlength="12" size="30"></td></tr>-->
                </table>

                <p><input type="submit" id="submit" value="create account"></p>
            </form>
        </div>


    </body>