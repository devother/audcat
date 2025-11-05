<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Социальные сети</title>
	
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
      <td id="vk">ВКонтакте</td>
      <td id="ok">Одноклассники</td>
      <td id="face">Facebook</td>
    </tr>
    <tr>
      <td id="twit">Twitter</td>
      <td id="jj">Живой Журнал</td>
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
    'вконтакте': function() {
      document.location.href = "https://vk.com/";
    },
    'одноклассники':function(){
      document.location.href = "https://ok.ru/";
    },
    'facebook': function() {
      document.location.href = "https://facebook.com/";
    },
    'twitter':function(){
      document.location.href = "https://twitter.com/";
    },
    'живой журнал': function() {
      document.location.href = "https://www.livejournal.com/";
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
vk.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://vk.com/";
};

ok.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://ok.ru/";
};

face.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://facebook.com/";
};

twit.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://twitter.com/";
};

jj.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://www.livejournal.com/";
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