<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="Каталог сайтов для слабовидящих и незрячих людей AudCat">
	<meta name="keywords" content="AudCat, каталог, незрячие, незрячих, слабовидящих, сайт, catalog. blind, people, site">
	<title>AudCat | Аудиокниги</title>
	
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
      <td id="fant">Фантастика</td>
      <td id="clas">Классика</td>
      <td id="advent">Приключения</td>
    </tr>
    <tr>
      <td id="poe">Поэзия</td>
      <td id="det">Детектив</td>
      <td id="rom">Роман</td>
    </tr>
    <tr>
      <td id="humor">Юмор, сатира</td>
      <td id="ist">История</td>
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
    'фантастика': fant.onclick = function() {
      document.location.href = "../page/book/fantasy.php";
    },
    'классика': clas.onclick = function(){
      document.location.href = "../page/book/classic.php";
    },
    'приключения': advent.onclick = function() {
      document.location.href = "../page/book/advent.php";
    },
    'поэзия': poe.onclick = function(){
      document.location.href = "../page/book/poet.php";
    },
    'детектив': det.onclick = function() {
      document.location.href = "../page/book/detec.php";
    },
    'роман': rom.onclick = function(){
      document.location.href = "../page/book/roman.php";
    },
    'юмор': humor.onclick = function() {
      document.location.href = "../page/book/humor.php";
    }, 
    'история': ist.onclick = function(){
      document.location.href = "../page/book/history.php";
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

</body>

</html>