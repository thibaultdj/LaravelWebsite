<!DOCTYPE HTML>

<html>
	<head>
		<title>website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <script>
            function myFunction() {
            var x = document.getElementById("burgernav");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            }
        }
        </script>
	</head>
	<body class="is-preload">
        @yield('content')
	</body>
</html>
