<?php
$img_0 = 'https://sun1-21.userapi.com/s/v1/ig2/pZQ7PvCLv0a_kodpmY6tT7urdfB-3WDi7_3S6D2daPUS509EuujxjvysTeAx8_q6CrA_VBwwu7lJhjJa0VWEiVAd.jpg?size=200x0&quality=96&crop=0,50,960,960&ava=1';
$img_1 = 'https://st1-18.vk.com/images/login/en/reg_iphone_en.png';
$hrefs = [
	['href' => '/', 'title' => 'Home'],
	['href' => '/test/', 'title' => 'Item 1'],
	['href' => '//www.revolted.ru/index.php/abc', 'title' => 'www'],
	['href' => 'https://www.revolted.ru/index.php/abc', 'title' => 'https + www'],
	['href' => '//revolted.ru//index.php/abc-def', 'title' => 'Item 3'],
	['href' => 'https://revolted.ru//index.php/abc-def', 'title' => 'Item 3.1'],
	['href' => '/index.php/abc-def/index.html', 'title' => 'Item 4'],
	['href' => '', 'title' => 'Empty href'],
	['href' => '/index.php/название-кириллицей-без-кодировки/', 'title' => 'Кириллица без кодировки'],
	['href' => 'index.php/relative-url/', 'title' => 'Relative URL'],
	['href' => '/html/molla/', 'title' => 'Сайт в папке'],
	// ['href' => '/head-test.html', 'title' => 'head-test'],
];
$hrefs1 = [
	['href' => 'mailto:example@email.net', 'title' => 'example@email.net'],
	['href' => 'http://dolly.maxtheps.beget.tech/d/https/www.php.net/1mz9bf0y2c~/manual/en/function.str-ireplace.php', 'title' => 'base tag'],
	'css_1' => ['href' => 'https://css.revolted.ru?filename=mystylesheet', 'title' => 'CSS 1'],
	'css_2' => ['href' => 'https://www.revolted.ru/css/style-1/minified', 'title' => 'CSS 2'],
	['href' => '/include/', 'title' => '403 Server'],
	['href' => '/panel/', 'title' => '403 Page'],
	['href' => '/nonexisting.css', 'title' => '404 Page'],
	['href' => '/server-error', 'title' => '500'],
];
$hrefs2 = [
	['href' => '/old-test/', 'title' => 'Redirect once [301 Moved Permanently]'],
	['href' => '/redirect/', 'title' => 'Infinite redirects [303 See Other]'],
	['href' => '/redirect/?dec=8', 'title' => 'Redirect loop [303 See Other]'],
	['href' => '/redirect-test/', 'title' => 'Redirect loop [307 Temporary Redirect]'],
];
function MkNav(array $hrefs) : string
{
	$s = '<ul class="nav bg-light bg-gradient shadow my-2 border border-2 border-white">';
	foreach($hrefs as $k => $v) $s .= '<li class="nav-item">'."<a href='$v[href]' title='$v[href]' class='nav-link'>$v[title]</a>".'</li>';
	return $s.'</ul>';
}
?><!DOCTYPE html>
<html lang="ru">
<head>
  <!-- meta charset="windows-1250" -->
  <!-- base href="https://images.revolted.ru/" -->
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Сайт для тестирования DollySites 2</title>
  <meta property="og:site_name" content="Сайт для тестирования DollySites 2">
  <meta property="og:url" content="https://revolted.ru/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="https://dolly-source.msapis.com/images/favicon">
  <link rel="shortcut icon" type="image/png" sizes="32x32" href="//dolly-source.msapis.com/images/favicon">
  <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css"  integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"  integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://static.revolted.ru/style.css" />
  <link rel="stylesheet" href="https://static.revolted.ru/nonexisting.css" />
  <link rel="stylesheet" href="<?=$hrefs1['css_1']['href']?>" />
  <style>
    .top, .bottom, hr {flex-shrink: 0; }
    hr {height: 2px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);margin: 0;   }
    h1, h2 {font-family: 'PT Sans Caption', Arial, sans-serif;font-weight: normal;margin: 0;   }
    h1 {font-size: 21px;line-height: 30px; }

    h2 {font-size: 18px; }
  </style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZFS28F');</script>
<!-- End Google Tag Manager -->
<meta name="yandex-verification" content="bda4edef0dbeaa74">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZFS28F"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-8"><?php
foreach($domains as $k => $domain) :
	$href = "https://$domain/";
	if($k) echo ' &bull; ';
	echo "<a href='$href'>$domain</a>";
endforeach;
?>		</div>
		<div class="col-12 col-lg-4">
			<a href='http://dolly.maxtheps.beget.tech/'>DollySites 2 sandbox</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class='col-12'><?=MkNav($hrefs)?></div>
	</div>
	<div class="row py-2">
		<div class='col-12'>
			<h1>Сайт для тестирования DollySites 2</h1>
			<?=MkNav($hrefs1)?>
			<form method='post' action='/'>
				<input type='text' name='test_1' />
				<button type='submit'>Send!</button>
			</form>
			<?=MkNav($hrefs2)?>
		</div>
	</div>
	<div class="row py-2">
		<div class='col-6 col-md-3'>
			<p>Ссылка на картинку с VK.</p>
			<p><a href='<?=$img_0?>'><img src='<?=$img_0?>' alt='Max Antipin' width='75' height='75' /></a></p>
		</div>
		<div class='col-6 col-md-9'>
			<small class='text-muted'>HTTP Referer:</small>
			<div><?=isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '—'?></div>
			<small class='text-muted'>HTTP User Agent:</small>
			<div><?=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '—'?></div>
		</div>
	</div>
</div>
<div class="container-fluid py-3">
	<div class="row">
		<div class='col-4 col-md-3'>
			<div class="card h-100 shadow-sm">
				<a href='https://vk.com/maxthegodslayer' class="text-center card-img-top p-2"><img src='<?=$img_0?>' alt='Max Antipin' width='200' height='199' /></a>
				<div class="card-body bg-light">
					<p class="card-text">Ссылка на VK и картинка с VK.</p>
				</div>
			</div>
		</div>
		<div class='col-4 col-md-3'>
			<div class="card shadow-sm">
				<div class="text-center card-img-top p-2">
					<img src='<?=$img_1?>' class="img-fluid" alt='' width='198' height='397' />
				</div>
				<div class="card-body bg-light">
					<h5 class="card-title"><a href='<?=$img_1?>'>Картинка</a> с VK</h5>
					<p class="card-text">«Внешний» домен.</p>
				</div>
			</div>
		</div>
		<div class='col-4 col-md-3'>
			<div class="card h-100 shadow-sm">
				<a href='//images.revolted.ru/images/FOVB3MED001.jpg' class="text-center card-img-top p-2">
					<img src='//images.revolted.ru/images/FOVB3MED001.jpg' width='210' height='210' alt='' />
				</a>
				<div class="card-body bg-light">
					<p class="card-text">Картинка на домене images.revolted.ru</p>
				</div>
			</div>
		</div>
		<div class='col-4 col-md-3'>
			<div class="card h-100 shadow-sm">
				<a href='//images.revolted.ru/images/FOVB3MED001.jpg' class="text-center card-img-top p-2">
				<img src='/images/FOVB3SCI001.jpg' width='210' height='210' alt='' />
				</a>
				<div class="card-body bg-light">
					<p class="card-text">Картинка с root-relative URL</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container py-3">
	<div class="row">
		<div class='col-12'>
	<form method='post' action='https://msapis.com/tests/http.html.php'>
		<input type='text' name='val[0]' />
		<input type='text' name='val[1]' />
		<button type='submit'>Send!</button>
	</form>
		</div>
	</div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42666824 = new Ya.Metrika({
                    id:42666824,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42666824" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
var Tawk_API=Tawk_API||{};
Tawk_API.visitor = {
name : 'visitor name',
email : 'visitor@email.com'
};

var Tawk_LoadStart=new Date();
<!-- rest of the tawk.to widget code -->
</script>

<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-32923038-1', 'auto');
ga('send', 'pageview');
</script>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '656651834500804');
    fbq('track', "PageView");
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=656651834500804&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
<!-- VK Pixel Code -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=bxK/UjgvsDSqSv8A5qKp2eUAdcYLvrhqdDOOdO3LUhAA*DmWLfVZN*k90rX4m1L7F7O1*vwQU05QaVeY8R0JEb4aV0GoN5dcXbISjBc1zCVLz0PUNYxgVTlYWs2pkfy59eh9fySEheLszFEThbeTUrXNkuo/xWvt9OBFaR7Ah7Y-';</script>
<!-- End VK Pixel Code -->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2802527", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
    <img src="//top-fwz1.mail.ru/counter?id=2802527;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
    <div id="ModalsPortal" class="b-dialog-portal"></div>
    <div id="DialogsQueue" class="b-dialog-queue hidden"></div>
    <div id="GlobalHint"></div>
    <div id="NotificationPopup"></div>
    <!-- Build 61922 -->
<script type="text/javascript" src="https://msapis.com/msse/core.100.js"></script>
<script type="text/javascript" src="/script.js"></script>
<div class="container">
	<div class="row">
		<div class='col-12'>
			<a href='/'>Homepage</a> |
			<a href='/test/'>Item 1</a> |
			<a href='//www.revolted.ru/index.php/abc'>Item 2 - www</a> |
			<a href='https://www.revolted.ru/index.php/abc'>Item 2.1 - www + https</a> |
			<a href='//revolted.ru//index.php/abc-def'>Item 3 - revolted.ru</a> |
			<a href='https://revolted.ru//index.php/abc-def'>Item 3.1 - https://revolted.ru</a> |
			<a href='/index.php/abc-def/index.html'>Item 4</a> |
			<a href=''>Item 5</a> |
			<a href='/index.php/название-кириллицей-без-кодировки/'>Кириллическое название</a>
			<a href='index.php/relative-url/'>Relative URL</a>
		</div>
	</div>
	<div class="row">
		<div class='col-12'>$_GET<pre><?php
var_dump($_GET);
?></pre>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<?=$hrefs1['css_2']['href']?>" />
</body>
<!-- End Google Tag Manager -->
</html>