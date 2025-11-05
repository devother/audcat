<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Почта</title>
	
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
      <td id="mail">Mail</td>
      <td id="yandex">Яндекс</td>
      <td id="yahoo">Yahoo</td>
    </tr>
    <tr>
      <td id="gmail">GMail</td>
      <td id="rambler">Рамблер</td>
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
    'mail': function() {
      document.location.href = "https://e.mail.ru/";
    },
    'yandex':function(){
      document.location.href = "https://mail.yandex.ru/";
    },
    'yahoo': function() {
      document.location.href = "https://mail.yahoo.com/";
    },
    'gmail':function(){
      document.location.href = "https://mail.google.com/";
    },
    'rambler': function() {
      document.location.href = "https://mail.rambler.ru/";
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
mail.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://e.mail.ru/";
};

yandex.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://mail.yandex.ru/";
};

yahoo.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://mail.yahoo.com/";
};

gmail.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://mail.google.com/";
};

rambler.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://mail.rambler.ru/";
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