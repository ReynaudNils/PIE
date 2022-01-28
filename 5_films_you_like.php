<!DOCTYPE html>
<meta charset="utf-8" />
    <head>
        <meta charset="utf-8" />
        <title>5_films_you_like</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h2 class="instruction">Tell us 5 films you like !</h2>
        
        <form action="update_database.php" method="get">
            <div class="std_box">
                <table>
                    <tr>
                        <td>
                        Film 1
                        <input type="text" id="film1" required minlength="2" maxlength="100" size="30"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Film 2
                        <input type="text" id="film2" required minlength="2" maxlength="20" size="30"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Film 3
                        <input type="text" id="film3" required minlength="2" maxlength="20" size="30"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Film 4
                        <input type="text" id="film4" required minlength="2" maxlength="20" size="30"> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Film 5
                        <input type="text" id="film5" required minlength="2" maxlength="20" size="30"> 
                        </td>
                    </tr>
                    
                </table>
            </div>

            <p><input type="submit" class="submit" value="confirm"></p>
        </form>
        
    </body>
</html>