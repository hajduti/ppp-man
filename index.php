<!doctype html>
<html>

<head>

    <title>Pac-Man</title>
    <!-- last updated: Tue 17 Oct 2017 16:50:08 AEDT -->
    <!-- Lock viewport on mobile devices. -->
    <!--
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

    -->
    <!-- Allow page to be saved as web app on iOS. -->
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Hide status bar -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <!-- icon used for iOS Web App -->
    <link rel="apple-touch-icon-precomposed" href="icon/ios_icon.png"/>

    <link rel="icon" type="image/png" href="icon/favicon.png"/>

    <style>
        body {
            margin:0;
            background: #000;
        }
        @font-face {
            font-family: 'ArcadeR';
            src: url('font/ARCADE_R.TTF');
            /*
            src: url('font/PressStart2P.ttf');
            */
        }
        #canvas-warning {
            color: #FF0;
            font-size: 1.5em;
        }
    </style>

    <script src="pacman.js?v=<?php echo time();?>"></script>

</head>

<body>
    <div style='font-family: ArcadeR'> </div>
    <canvas id='canvas'><div id="canvas-warning">Your browser does not support HTML Canvas.  Please upgrade!</div></canvas>
    <canvas id='atlas' style="display:none"></canvas>
</body>

</html>
