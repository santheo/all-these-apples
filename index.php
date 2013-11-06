<?php
$fn = "apples.txt";
$lines = file($fn);
$n = $_GET["n"];
$o = ($n == count($lines)) ? 1 : $n + 1;
$line = $lines[$n ? $n - 1 : array_rand($lines)];
$answer = split(";;",$line);
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>What Should I Do With All These Apples?</title>
<meta property="og:title" content="What Should I Do With All These Apples?">
<meta name="description" content="Stuck with a bunch of apples? Here is your salvation.">
<meta property="og:description" content="Stuck with a bunch of apples? Here is your salvation.">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
<style type="text/css" media="screen">
a {
  color: #0069D6;
  text-decoration: none;
  line-height: inherit;
  font-weight: inherit;
}

a:hover, a:active {
  outline: 0;
}

body {
  background-color:#101010;
  background-image:url(/wood.jpg);
  background-attachment:fixed;
  background-repeat:no-repeat;
  background-position:0 0;
  padding:20px 40px;
  font-size:13px;
  line-height:18px;
  font-family:etica-display;
  text-align:center;
}

h1 {
  display:none;
}

h2 {
  display:block;
  padding-top:100px;
  font-size:88px;
  line-height:1.2em;
  letter-spacing:-1px;
  text-align:center;
  font-weight:bold;
}

h2 a {
  color:#aaa;
  text-shadow:0 6px 12px rgba(0,0,0,.7);
  border-bottom:1px dashed rgba(255,255,255,.2);
}

.arrow {
  color:#888;
  font-weight:normal;
}

h2 a:hover {
  color:yellow;
  border-bottom-color:rgba(255,255,255,.5);
}

h2 a:hover .arrow {
  color:white;
}

.btn {
  cursor: pointer;
  display: inline-block;
  background-color: #e6e6e6;
  background-repeat: no-repeat;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  padding: 5px 14px 6px;
  color: #333;
  font-size: 16px;
  line-height: normal;
  font-weight:bold;
  border: 1px solid #ccc;
  border-bottom-color: #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -webkit-transition: 0.1s linear all;
  -moz-transition: 0.1s linear all;
  -ms-transition: 0.1s linear all;
  -o-transition: 0.1s linear all;
  transition: 0.1s linear all;
}

.btn:hover {
  background-position: 0 -15px;
  color: #333;
  text-decoration: none;
}

.btn:active {
  position:relative;
  top:1px;
  color:#555;
}

#banner {
  position:fixed;
  bottom: 0;
  left:0;
  height:25px;
  width:100%;
  text-align:left;
  padding-bottom:5px;
}

#banner iframe {
  float:left;
  margin-left:10px;
}

.typekit-badge {
  bottom:2px !important;
}

@media screen and (max-width: 500px) {
  h2 {
    padding-top:10px;
    font-size:40px;
    line-height:;
    letter-spacing:0;
  }
}

</style>
</head>

<body>

<h1>What Should I Do With All These Apples?</h1>

<h2><a href="<?php echo $answer[1]; ?>"><?php echo $answer[0]; ?>&nbsp;<span class="arrow">⇒</span></a></h2>

<a href="/?n=<?php echo $o; ?>" class="btn">Gimme another idea &nbsp; ↻</a>
<br><br>

<div id="banner">
  <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="http://whatshouldidowithalltheseapples.com/" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26077327-1']);
  _gaq.push(['_setDomainName', 'whatshouldidowithalltheseapples.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
