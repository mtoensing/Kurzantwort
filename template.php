<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="apple-touch-icon" sizes="57x57" href="//kurzantwort.de/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="//kurzantwort.de//apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="//kurzantwort.de/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="//kurzantwort.de/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="//kurzantwort.de/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="//kurzantwort.de/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="//kurzantwort.de/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="//kurzantwort.de/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="//kurzantwort.de/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="//kurzantwort.de/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="//kurzantwort.de/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="//kurzantwort.de/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="//kurzantwort.de/favicon-16x16.png">
        <link rel="manifest" href="//kurzantwort.de/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="//kurzantwort.de/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
		<!--[if lte IE 8]><script src="//kurzantwort.de/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="//kurzantwort.de/assets/css/main.css" />
        <link rel="stylesheet" href="//kurzantwort.de/assets/kurzantwort.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="//kurzantwort.de/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="//kurzantwort.de/assets/css/ie9.css" /><![endif]-->
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
        <style>.status {font-size: 180%;}</style>
			<section id="header">
				<div class="inner">
					<span class="icon major fa-<?php echo $icon; ?>"></span>
					<h1><?php echo $title; ?></h1>
					<!-- <p></p> -->
					<ul class="actions">
						<li><span class="status"><?php echo $status; ?></span></li>
					</ul>
				</div>
			</section>

        <section id="one" class="main center style1">
            <div class="container centered">

                <script type="text/javascript"><!--
                    amazon_ad_tag = "220780-21"; amazon_ad_width = "160"; amazon_ad_height = "600";//--></script>
                <script type="text/javascript" src="http://ir-de.amazon-adsystem.com/s/ads.js"></script>
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
			<script src="//kurzantwort.de/assets/js/jquery.min.js"></script>
			<script src="//kurzantwort.de/assets/js/jquery.scrolly.min.js"></script>
			<script src="//kurzantwort.de/assets/js/skel.min.js"></script>
			<script src="//kurzantwort.de/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="//kurzantwort.de/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="//kurzantwort.de/assets/js/main.js"></script>

	</body>

</html>