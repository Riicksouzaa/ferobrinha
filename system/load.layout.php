<?php
if (!defined('INITIALIZED'))
    exit;

if ($_SESSION['landpage'] != TRUE && !isset($_SESSION['landpage'])) {
    
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="author" content="Ricardo Souza" />
        <meta name="description" content="This is the best Gesior made with :love: by.: Codenome developers." />
        <meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
        <meta name="Resource-type" content="Document" />


        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" />
        <link rel="stylesheet" type="text/css" href="./examples.css" />


        <style>

            /* Sections
             * --------------------------------------- */
            #section0 img,
            #section1 img{
                margin: 20px 0 0 0;
            }
            #section2 img{
                margin: 20px 0 0 52px;
            }
            #section3 img{
                bottom: 0px;
                position: absolute;
                margin-left: -420px;
            }
            .intro p{
                width: 50%;
                margin: 0 auto;
                font-size: 1.5em;
            }
            .twitter-share-button{
                position: absolute;
                z-index: 99;
                right: 149px;
                top: 9px;
            }

        </style>
        <!--[if IE]>
        <script type="text/javascript">
            var console = { log: function() {} };
        </script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
        <script type="text/javascript" src="./examples.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                    anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                    menu: '#menu',
                    scrollingSpeed: 1000
                });
            });
        </script>

    </head>
    <body>
    
    <ul id="menu">
        <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
        <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
        <li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
    </ul>


    <div id="fullpage">
        <div class="section " id="section0">
            <h1>fullPage.js</h1>
            <input type="hidden" name="id" value="1" />
            <p>Create Beautiful Fullscreen Scrolling Websites</p>
        </div>
        <div class="section" id="section1">
            <div class="slide">
                <div class="intro">
                    <h1>Create Sliders</h1>
                    <p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>
                </div>

            </div>
            <div class="slide">
                <div class="intro">
                    <h1>Simple</h1>
                    <p>Easy to use. Configurable and customizable.</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <h1>Cool</h1>
                    <p>It just looks cool. Impress everybody with a simple and modern web design!</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <h1>Compatible</h1>
                    <p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
                </div>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="intro">
                <h1>Example</h1>
                <p>HTML markup example to define 4 sections.</p>
            </div>
        </div>
        <div class="section" id="section3">
            <div class="intro">
                <h1>Working On Tablets</h1>
                <p>
                    Designed to fit to different screen sizes as well as tablet and mobile devices.
                    <br /><br /><br /><br /><br /><br />
                </p>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
    $layout_header = '<script type=\'text/javascript\'>
function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}

function MouseOverBigButton(source)
{
  source.firstChild.style.visibility = "visible";
}
function MouseOutBigButton(source)
{
  source.firstChild.style.visibility = "hidden";
}
function BigButtonAction(path)
{
  window.location = path;
}
var';
    if ($logged) {
        $layout_header .= "loginStatus=1; loginStatus='true';";
    } else {
        $layout_header .= "loginStatus=0; loginStatus='false';";
    };
    $layout_header .= "var activeSubmenuItem='" . $subtopic . "';  var IMAGES=0; IMAGES='" . $config['server']['url'] . "/" . $layout_name . "/images'; var LINK_ACCOUNT=0; LINK_ACCOUNT='" . $config['server']['url'] . "';</script>";
    include($layout_name . "/layout.php");
}