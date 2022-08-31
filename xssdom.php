<?php

require_once 'functions.php';

dbConnect();

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
	<title>XSS(DOM based) - CyberHood</title>
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
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"brute.php\">Bruteforce</a>
				</li>
				<li class=\"nav-item\">
					<a class=\"nav-link\" href=\"cmdin.php\">Command Injection</a>
				</li>
				<li class=\"nav-item active\">
					<a class=\"nav-link\" href=\"#\">XSS(DOM)</a>
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
		<h2>XSS DOM</h2>
	</div>
	<div class=\"container-fluid\">
		<form name=\"XSS\" method=\"GET\">
			<select name=\"default\">
                <script>
                    if(document.location.href.indexOf(\"default=\") >= 0) {
                        var lang = document.location.href.substring(document.location.href.indexOf(\"default=\")+8);
                        document.write(\"<option value='\" + lang + \"'>\" + decodeURI(lang) + \"</option>\");
                        document.write(\"<option value='' disabled>-------</option>\");
                    }
                    document.write(\"<option value='English'>English</option>\");
					document.write(\"<option value='French'>French</option>\");
					document.write(\"<option value='Spanish'>Spanish</option>\");
					document.write(\"<option value='German'>German</option>\");
                </script>
            </select>
			<input type=\"submit\" value=\"Select\" class=\"submit-btn\"/>
		</form>
	</div>

	<script src=\"js/particles.js\" defer></script>
	<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\" defer></script>
	<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js\" integrity=\"sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2\" crossorigin=\"anonymous\" defer></script>
	<script src=\"js/script.js\" defer></script>
</body>
</html>";

?>