<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Поисковики</title>
	
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
      <td id="google">Google</td>
      <td id="yandex">Яндекс</td>
      <td id="mail">Mail</td>
    </tr>
    <tr>
      <td id="rambler">Рамблер</td>
      <td id="sput">Спутник</td>
      <td id="back">На главную</td>
    </tr>
  </tbody>
</table>

</body>

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
    'google': function() {
      document.location.href = "https://google.ru/";
    },
    'yandex':function(){
      document.location.href = "https://yandex.ru/";
    },
    'mail': function() {
      document.location.href = "https://mail.ru/";
    },
    'rambler':function(){
      document.location.href = "https://rambler.ru/";
    },
    'спутник': function() {
      document.location.href = "https://sputnik.ru/";
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
google.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://google.ru/";
};

var html = document.documentElement;
yandex.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://yandex.ru/";
};

var html = document.documentElement;
mail.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://mail.ru/";
};

var html = document.documentElement;
rambler.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://rambler.ru/";
};

var html = document.documentElement;
sput.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://sputnik.ru/";
};
</script>

<script>
var html = document.documentElement;
back.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "/www";
};
</script>

</html>