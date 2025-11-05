<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Тематические сайты</title>
	
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
      <td id="rgbs">РГБС</td>
      <td id="voi">ВОИ</td>
      <td id="rooi">РООИ Перспектива</td>
    </tr>
    <tr>
      <td id="trud">Трудоустройство</td>
      <td id="dis">Дислайф</td>
      <td id="ds">Доступная среда</td>
    </tr>
    <tr>
      <td id="disab">Дисабилити</td>
      <td id="rea">Реакомп</td>
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
    'российская государственная библиотека для слепых': function() {
      document.location.href = "http://rgbs.ru/";
    },
    'всероссийское общество инвалидов':function(){
      document.location.href = "http://voi.ru/";
    },
    'трудоустройство': function() {
      document.location.href = "https://perspektiva-inva.ru/jobs/vacancy/";
    },
    'роии преспектива':function(){
      document.location.href = "https://perspektiva-inva.ru/";
    },
    'дислайф': function() {
      document.location.href = "http://dislife.ru/";
    },
    'доступная среда':function(){
      document.location.href = "https://www.smartaids.ru/";
    },
    'дисабилити': function() {
      document.location.href = "http://www.disability.ru/";
    },
    'реакомп':function(){
      document.location.href = "http://www.rehacomp.ru/";
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
rgbs.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "http://rgbs.ru/";
};

voi.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "http://voi.ru/";
};

rooi.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://perspektiva-inva.ru/";
};

trud.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://perspektiva-inva.ru/jobs/vacancy/";
};

dis.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "http://dislife.ru/";
};

ds.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "https://www.smartaids.ru/";
};

disab.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "http://www.disability.ru/";
};

rea.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "http://www.rehacomp.ru/";
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