<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>React e Ratchet, async e websockets com PHP</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

        <style>
            #loginForm{display: block; width: 100%; text-align: left; box-sizing: border-box; padding: 0 10%;}
            #loginForm label{display: block; width: 100%;}
            #loginForm input{display: block; width: 100%; margin-bottom: 2em;}
            #loginForm button{display: block; float: right;}
            #loginForm small{display: block; font-size: 0.4em}
        </style>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body>

		<div class="reveal">
            <div class="users-counter"></div>

			<div class="slides">

                <section>
                    <h2>Acesso aos Slides</h2>
                    <form method="post" id="loginForm">
                        <label for="mail">Email</label>
                        <input type="text" name="mail" id="mail">

                        <label for="pass">Senha <small>(Preencha apenas se for palestrante)</small></label>
                        <input type="password" name="pass" id="pass">

                        <button type="submit">Enviar</button>
                    </form>
                </section>

			</div>

		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
        <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

		<script>
            var mode = $('body').attr('data-mode');
            var websocketsAddress = $('body').attr('data-websockets-address');

            var revealConfig = {
                controls: false,
                progress: true,
                history: false,
                keyboard: false,
                overview: false,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'js/code.min.js', async: true }
                ]
            };

			Reveal.initialize(revealConfig);

            // Fake ratchet
            window.ratchet = {
                on: function() {}
            }
		</script>

	</body>
</html>
