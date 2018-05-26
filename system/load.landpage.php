<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="./materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="bg_img.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="bgwhitetransp">
    <nav class="bg-black-transp" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo center"><img width="150px"
                                                                           src="./images/logos/tibia-logo-artwork-top.gif"/></a>
            <ul class="left hide-on-med-and-down">
                <li>Status: Online (1/1000)</li>
            </ul>
            <ul class="right">
                <li><a class="" href="./">Ir para o site</a></li>
            </ul>
        </div>
    </nav>
    <!--
    <div class="row right-align">
        <a href="http://materializecss.com/getting-started.html" id="download-button"
           class="btn-primary">Fazer Login!</a>
    </div>
    -->
    <!--
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text"><?= $config['server']['serverName']; ?></h1>
            <div class="row center">
                <h5 class="header white-text col s12 light"><?= Website::getWebsiteConfig()->getValue('landpage_description') ?></h5>
            </div>
            <br><br>
        </div>
    </div>
    -->

    <div class="bgwhitetransp">
        <div class="container">
            <div class="bg"></div>
            <br/>
            <br/>
            <div class="section">
                <div class="row container">
                    <form class="col s12 push-m3 m6 offset-l3 l6">
                        <h5 class="center white-text">Criar account</h5>
                        <div class="row" style="margin: 0 !important;">
                            <div class="input-field s12">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">Account Name</label>
                            </div>
                        </div>
                        <div class="row" style="margin: 0 !important;">
                            <div class="input-field s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row" style="margin: 0 !important;">
                            <div class="input-field s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row" style="margin: 0 !important;">
                            <div class="input-field s12">
                                <input disabled value="<?= $config['server']['serverName']; ?>" id="disabled"
                                       type="text"
                                       class="validate">
                                <label for="disabled">World</label>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="input-field s12">
                                <input value="Cadastrar" type="submit" class="validate btn-primary"/>
                            </div>
                        </div>
                    </form>

                    <!--   Icon Section   -->
                    <!--
                    <div class="col s6 m6">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center white-text">Speeds up development</h5>
        
                            <p class="light white-text">We did most of the heavy lifting for you to provide a default stylings
                                that
                                incorporate our custom components. Additionally, we refined animations and transitions to
                                provide a smoother experience for developers.</p>
                        </div>
                    </div>
                    -->
                </div>

            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<div style="background-color: white; margin-top: -40px">
    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light">We did most of the heavy lifting for you to provide a default stylings that
                            incorporate our custom components. Additionally, we refined animations and transitions to
                            provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create
                            a framework that incorporates components and animations that provide more feedback to users.
                            Additionally, a single underlying responsive system across all platforms allow for a more
                            unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">We have provided detailed documentation as well as specific code examples to
                            help new users get started. We are also always open to feedback and can answer any questions
                            a user may have about Materialize.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bg-black-transp">
    <div style="padding: 50px">
        <div class="center">
            <a href="http://materializecss.com/getting-started.html" id="download-button"
               class="btn-primary">Fazer Download</a>
        </div>
    </div>
</div>


<footer class="page-footer orange">
    <!--
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    -->
    <div class="footer-copyright right-align">
        <div class="container">
            Made by <a class="navbar-brand white-text" href="http://codenome.com/"><font
                        face="Anurati"><span></span><span>COD<span class="light-blue-text">E</span></span><span>NOM<span
                                class="light-blue-text">E</span></span><span></span></font></a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="./materialize/js/materialize.js"></script>
<script src="./materialize/js/init.js"></script>

</body>
</html>
