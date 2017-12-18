<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Login</title>
        <link href="./login/style_log.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="./login/style.css">
        <link rel="stylesheet" type="text/css" href="./login/userpanel.css">
        <link rel="stylesheet" type="text/css" href="./login/jquery.ui.all.css">
    </head>
    
    <body class="login" mycollectionplug="bind">
        <div class="login_m">
            <div class="login_logo"><h1>Identification</h1></div>
            <div class="login_boder">
                <div class="login_padding" id="login_model">
                    <form method="post" action="action/logAction.php?action=login">
                        <h2>IDENTIFIANT</h2>
                        <label>
                            <input type="text" name="username" class="txt_input txt_input2" placeholder="votre identifiant (admin par défaut)">
                        </label>
                        <h2>PASSWORD</h2>
                        <label>
                            <input type="password" name="password" class="txt_input" placeholder="votre mot de passe (admin par défaut)">
                        </label>
                        
                        <?php
                            session_start();
                            if(isset($_SESSION['loginerror'])) {
                                if($_SESSION['loginerror']) {
                                    echo "<span style='color : red ; font-size : 15px ; font-weight : bold;'>Information fausse, veuillez résaisir.</span><br>";
                                } else {
                                    echo "<br><br>";
                                }
                            } else {
                                echo "<br><br>";
                            }
                        ?>
                        
                        <div class="rem_sub">
                            <div class="rem_sub_l">
                                <input type="checkbox" name="save_me" id="save_me" value="save">
                                <label for="checkbox">Se souvenir de moi</label>
                            </div>
                            <label>
                                <input type="submit" class="sub_button" name="button" id="button" value="SE CONNECTER" style="opacity: 0.7;">
                            </label>
                            <label>
                                <input type="reset" class="sub_button" name="button" id="button" value="EFFACER" style="opacity: 0.7;">
                            </label>
                        </div>
                    </form>
                </div>
                                            <!--login_padding  Sign up end-->
            </div><!--login_boder end-->
        </div><!--login_m end-->
        <br> <br>
    </body>
</html>