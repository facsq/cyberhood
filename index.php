<?php

$html = "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>CyberHood</title>
    <link rel=\"icon\" href=\"images/favicon.ico\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles_landing.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/flaticon.css\" />
   <link rel=\"stylesheet\" type=\"text/css\" href=\"css/responsive_landing.css\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
</head>

<body>
    <div class=\"wrap\">
        <div id=\"logo\">
            <a href=\"#\"><h1>CyberHood</h1></a>
        </div>
    </div>

    <div id=\"fullpage\">
        <div class=\"section \" id=\"section0\">
            <div class=\"wrap\">
                <div class=\"box\">
                    <h1>A Pentester's Playground</h1>
                    <h4>Exploit the most common vulnerabilities with this game.</h4>
                    <br><a href=\"functions.php?setup=true\" class=\"simple-button\">Start Now</a> </div>
                </div>
            </div>
        </div>

    </div>

    <script src=\"js/jquery.easings.min.js\"></script>
    <script src=\"js/jquery.fullPage.js\"></script>
    <script src=\"js/cbpFWTabs.js\"></script>
    <script src=\"js/jquery.sidr.min.js\"></script>
    <script src=\"js/scripts_landing.js\"></script>

</body>

</html>";

require_once 'functions.php';

echo "{$html}";

?>