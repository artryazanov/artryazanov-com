<?php
    if (isset($_SERVER['SERVER_NAME'])) {
        $host = strtolower($_SERVER['SERVER_NAME']);
        if (strpos($host, 'artryazanov') === false) {
            header('HTTP/1.1 307 Temporary Redirect');
            header('Location: //www.artryazanov.com/404.html');
            exit();
        } elseif (!in_array($host, array('www.artryazanov.com', 'artryazanov.local'))) {
            header('HTTP/1.1 303 See Other');
            header('Location: //www.artryazanov.com');
            exit();
        }
    }
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Artem Ryazanov</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>

    <div class="polaroid">
        <img src="images/tema.jpg" alt="Artem Ryazanov" />
        <p>Artem Ryazanov</p>
    </div>

    <div class="polaroid">
        <img src="images/vk.jpg" alt="vk.com/artryazanov" />
        <p><a href="http://vk.com/artryazanov" target="_blank">VK</a></p>
    </div>

    <div class="polaroid">
        <img src="images/fb.jpg" alt="facebook.com/artryazanov" />
        <p><a href="http://www.facebook.com/artryazanov" target="_blank">Facebook</a></p>
    </div>

    <div class="polaroid">
        <img src="images/twitter.jpg" alt="twitter.com/artryazanov" />
        <p><a href="http://twitter.com/artryazanov" target="_blank">Twitter</a></p>
    </div>

    <div class="polaroid">
        <img src="images/github.jpg" alt="github.com/artryazanov" />
        <p><a href="http://github.com/artryazanov" target="_blank">GitHub</a></p>
    </div>

    <div class="polaroid">
        <img src="images/thegamerbay.jpg" alt="www.thegamerbay.ru" />
        <p><a href="http://www.thegamerbay.ru" target="_blank">TheGamerBay</a></p>
    </div>

    <div class="polaroid">
        <img src="images/360.jpg" alt="360cities.net/profile/artryazanov" />
        <p><a href="http://www.360cities.net/profile/artryazanov" target="_blank">360Cities</a></p>
    </div>

    <div class="polaroid">
        <img src="images/instagram.jpg" alt="instagram.com/artryazanov" />
        <p><a href="http://instagram.com/artryazanov" target="_blank">Instagram</a></p>
    </div>

    <div class="polaroid">
        <img src="images/runkeeper.jpg" alt="runkeeper.com/user/artryazanov" />
        <p><a href="http://runkeeper.com/user/artryazanov" target="_blank">RunKeeper</a></p>
    </div>

    <div class="polaroid">
        <img src="images/moikrug.jpg" alt="artryazanov.moikrug.ru" />
        <p><a href="http://artryazanov.moikrug.ru/" target="_blank">MoiKrug</a></p>
    </div>

    <div class="polaroid">
        <img src="images/linkedin.jpg" alt="linkedin.com/in/artryazanov" />
        <p><a href="http://www.linkedin.com/in/artryazanov" target="_blank">LinkedIn</a></p>
    </div>

    <!--LiveInternet counter--><script type="text/javascript"><!--
    new Image().src = "//counter.yadro.ru/hit?r"+
            escape(document.referrer)+((typeof(screen)=="undefined")?"":
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
            ";"+Math.random();//--></script><!--/LiveInternet-->

</body>
</html>