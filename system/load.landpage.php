<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?= $config['server']['serverName'] ?> - Website</title>
    <meta name="author" content="Ricardo Souza"/>
    <meta name="description" content="This is the best Gesior made with :love: by.: Codenome developers."/>
    <meta name="keywords" content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple"/>
    <meta name="Resource-type" content="Document"/>


    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css"/>
    <link rel="stylesheet" type="text/css" href="./bg_img.css?vs=6"/>
    <link rel="stylesheet" type="text/css" href="./examples.css?vs=1"/>


    <style>

        /* Sections
         * --------------------------------------- */
        #section0 img,
        #section1 img {
            margin: 20px 0 0 0;
        }

        #section2 img {
            margin: 20px 0 0 52px;
        }

        #section3 img {
            bottom: 0px;
            position: absolute;
            margin-left: -420px;
        }

        .intro p {
            width: 50%;
            margin: 0 auto;
            font-size: 1.5em;
        }

        .twitter-share-button {
            position: absolute;
            z-index: 99;
            right: 149px;
            top: 9px;
        }

    </style>
    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log: function () {
            }
        };
    </script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="./examples.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                sectionsColor: ['#ABC', '#4BBFC3', '#ccddff'],
                anchors: ['land', 'noticias', 'lastPage'],
                menu: '#menu',
                scrollingSpeed: 1000
            });
        });
    </script>

</head>
<body>

<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#land">Home</a></li>
    <li data-menuanchor="secondPage"><a href="#noticias">Notícias</a></li>
</ul>


<div id="fullpage">
    <div class="section" id="section0">
        <h1><?=trim($config['server']['serverName']);?></h1>
        <p><?=Website::getWebsiteConfig()->getValue('landpage_description')?></p>
    </div>
    <div class="section" id="section1">
        <?php for($i = 1; $i <= Website::getWebsiteConfig()->getValue('landpage_max_noticias'); $i++){?>
        <div class="slide" id="slide<?=$i?>" data-anchor="blabla<?=$i?>">
                <h1>Noticia <?=$i?></h1>
        </div>
        <?php }?>
    </div>
</div>
</body>
</html>