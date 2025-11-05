<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Каталог сайтов</title>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
	
	<link rel="stylesheet" type="text/css" title="default" href="css/style.css">
	<link rel="alternate stylesheet" type="text/css" title="bw" href="css/bw.css">
	<link rel="alternate stylesheet" type="text/css" title="wb" href="css/wb.css">

</head>

<body onload="set_style_from_cookie()"  style="margin-top: -1rem">

<?php include('head.php'); ?>

<table id = "content" width="100%" height="92%">
  <tbody>
      <tr>
        <td id="themes" onmouseenter="log(event)" onmouseleave="log(event)">Тематические</td>
        <td id="abook" >Аудиокниги</td>
        <td id="site">Обычная версия</td>
      </tr>
      <tr>
        <td id="soft">Программы</td>
        <td id="dosug">Досуг</td>
        <td id="post">Почта</td>
      </tr>
      <tr>
        <td id="social">Социальные сети</td>
        <td id="search">Поисковики</td>
        <td id="about">О нас</td>
      </tr>
  </tbody>
</table>


<div id='voice'></div>

<script>
var synth = window.speechSynthesis;
var utterance = new SpeechSynthesisUtterance('Вы находитесь на главной странице сайта.');

function log(event) {
  synth.speak (utterance);
}

function stop () {
  synth.pause();
}
</script>

<script>
      if (annyang) {
          var cont = document.getElementById('voice');
          function addText(text){
              var el = document.createElement('h2');
              el.innerHTML = text;
              cont.appendChild(el);
          }
  annyang.setLanguage('ru');
  var commands = {
    'тематические': function log(event) {
      
      document.location.href = "category/themes.php";
    },
    'аудиокниги':function(){
      document.location.href = "category/abook.php";
    },
    'обычная версия': function() {
      document.location.href = "site";
    },
    'раздел программы':function(){
      document.location.href = "category/soft.php";
    },
    'раздел досуг': function() {
      document.location.href = "category/dosug.php";
    },
    'раздел почта':function(){
      document.location.href = "category/post.php";
    },
    'социальные сети': function() {
      document.location.href = "category/social.php";
    },
    'поисковики':function(){
      document.location.href = "category/search.php";
    },
    'о нас':function(){
      document.location.href = "category/about.php";
    },
  };
  annyang.addCommands(commands);
  annyang.start();
  }
</script>


<script>
var html = document.documentElement;
soft.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/soft.php";
};
</script>

<script>
var html = document.documentElement;
search.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/search.php";
};
</script>

<script>
var html = document.documentElement;
abook.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/abook.php";
};
</script>

<script>
var html = document.documentElement;
post.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/post.php";
};
</script>

<script>
var html = document.documentElement;
social.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/social.php";
};
</script>

<script>
var html = document.documentElement;
themes.onclick = function() { 
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/themes.php";
};


</script>

<script>
var html = document.documentElement;
dosug.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/dosug.php";
};
</script>

<script>
var html = document.documentElement;
about.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "category/about.php";
};
</script>

<script>
var html = document.documentElement;
site.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "site";
};
</script>

</body>

</html>