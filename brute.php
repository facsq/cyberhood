<?php

require_once 'functions.php';
dbConnect();

$html = "";
require_once 'verify/brute.php';
$method = 'GET';

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
	<title>BruteForce - CyberHood</title>
	<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\" integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\" crossorigin=\"anonymous\">
	<link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body style=\"background-color: #222;\" class=\"particles\">
	<nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: #000; \">
		<a class=\"navbar-brand\" href=\"#\">CyberHood</a>
		<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
			<span class=\"navbar-toggler-icon\" ></span>
		</button>
		
		<div style=\"text-align: center;\" class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
			<ul class=\"navbar-nav ml-auto navbar-right\">
				<li class=\"nav-item active\">
					<a class=\"nav-link\" href=\"#\">Bruteforce</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"cmdin.php\">Command Injection</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"xssdom.php\">XSS(DOM)</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"xssref.php\">XSS(Reflected)</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"sqlin.php\">SQL Injection</a>
				</li>
			</ul>
		</div>
	</nav>
	<div id=\"particles-js\"></div>
	<div class=\"container-fluid\">
		<h2>BRUTEFORCE</h2>
	</div>
	<div class=\"container-fluid\">
		<form action=\"#\" method=\"{$method}\">
			<input name=\"username\" type=\"text\" placeholder=\"Username\" /><br>
			<input type=\"password\" name=\"password\" placeholder=\"Password\" /><br>
			<input type=\"submit\" value=\"Login\" class=\"submit-btn\" name=\"Login\" />
		</form>
        {$html}
	</div>

	<script src=\"js/particles.js\"></script>
	<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
	<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js\" integrity=\"sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2\" crossorigin=\"anonymous\"></script>
	<script src=\"js/script.js\" defer></script>
</body>
</html>";

?>