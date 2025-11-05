<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Программы</title>
	
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
      <td>НЭК</td>
      <td>NVDA</td>
      <td>AudDesk</td>
    </tr>
    <tr>
      <td>Технологии речи</td>
      <td>Тифлоком</td>
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
    'НЭК': function() {
      document.location.href = "http://rgbs.ru/";
    },
    'NVDA':function(){
      document.location.href = "http://voi.ru/";
    },
    'AudDesk': function() {
      document.location.href = "https://perspektiva-inva.ru/jobs/vacancy/";
    },
    'технологии речи':function(){
      document.location.href = "https://perspektiva-inva.ru/";
    },
    'тифлоком': function() {
      document.location.href = "http://dislife.ru/";
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
back.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  document.location.href = "/www";
};
</script>

</html>