<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $text; ?>"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="apple-touch-icon" sizes="57x57" href="//kurzantwort.de/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="//kurzantwort.de/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="//kurzantwort.de/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="//kurzantwort.de/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="//kurzantwort.de/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="//kurzantwort.de/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="//kurzantwort.de/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="//kurzantwort.de/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="//kurzantwort.de/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="//kurzantwort.de/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="//kurzantwort.de/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="//kurzantwort.de/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="//kurzantwort.de/icon/favicon-16x16.png">
        <link rel="manifest" href="//kurzantwort.de/icon/manifest.json">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="//kurzantwort.de/assets/css/main.css" />
        <link rel="stylesheet" href="//kurzantwort.de/assets/kurzantwort.css" />
        <!-- Matomo -->
        <script type="text/javascript">
            var _paq = _paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//stats.toensing.com/";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', '<?php echo $matomo_id ?>']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>
        <!-- End Matomo Code -->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<div class="inner" >
					<span class="icon major fa-<?php echo $icon; ?>"></span>
					<h1><?php echo $title; ?></h1>

					<ul class="actions <?php echo strtolower($status); ?>">
						<li><span class="status"><?php echo $status; ?></span></li>
					</ul>
				</div>
			</section>

        <section id="one" class="main center style1">
            <div class="container centered">
            <p><?php echo $text ?></p>
            </div>
        </section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="//twitter.com/marctv" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				</ul>
				<ul class="copyright">
					<li><?php echo $title ?></li>
                    <li><a href="http://kurzantwort.de">Kurzantwort.de</a> ist ein Projekt von: <a href="https://marc.tv">Marc.TV</a></li>
				</ul>
			</section>

		<!-- Scripts -->

	</body>

</html>