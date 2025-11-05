<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Досуг</title>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
	
	<link rel="stylesheet" type="text/css" title="default" href="../css/style.css">
	<link rel="alternate stylesheet" type="text/css" title="bw" href="../css/bw.css">
	<link rel="alternate stylesheet" type="text/css" title="wb" href="../css/wb.css">

</head>

<body onload="set_style_from_cookie()"  style="margin-top: -1rem">
<?php include('head.php'); ?>

<table id = "content" width="100%" height="92%">
<tbody>
    <tr>
      <td id="anek">Анекдоты</td>
      <td id="weather">Погода</td>
      <td id="news">Новости</td>
    </tr>
    <tr>
      <td id="youtube">YouTube</td>
      <td id="translate">Переводчик</td>
      <td id="avito">Avito</td>
    </tr>
    <tr>
      <td id="wiki">Википедия</td>
      <td id="music">Музыкальная студия</td>
      <td id="back">На главную</td>
    </tr>
  </tbody>
</table>

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
    'анекдоты': function() {
      document.location.href = "https://www.anekdot.ru/last/anekdot/";
    },
    'погода':function(){
      document.location.href = "https://yandex.ru/pogoda/moscow/?from=home";
    },
    'новости': function() {
      document.location.href = "https://news.google.com/";
    },
    'youtube':function(){
      document.location.href = "https://www.youtube.com/";
    },
    'переводчик': function() {
      document.location.href = "https://translate.google.ru/";
    },
    'авито':function(){
      document.location.href = "https://www.avito.ru/";
    },
    'википедия': function() {
      document.location.href = "https://ru.wikipedia.org";
    },
    'музыкальная студия':function(){
      document.location.href = "https://blues-mcdc.ru/";
    },
    'На главную':function(){
      document.location.href = "/www";
    },
  };
  annyang.addCommands(commands);
  annyang.start();
  }
</script>

<script>
var html = document.documentElement;
anek.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://www.anekdot.ru/last/anekdot/";
};

weather.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://yandex.ru/pogoda/moscow/?from=home";
};

news.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://news.google.com/";
};

youtube.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://www.youtube.com/";
};

translate.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://translate.google.ru/";
};

avito.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://www.avito.ru/";
};

wiki.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://ru.wikipedia.org";
};

music.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://blues-mcdc.ru/";
};
</script>

<script>
var html = document.documentElement;
back.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "/www";
};
</script>

</body>

</html>