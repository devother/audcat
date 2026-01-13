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
      <td id="fant" role="button" tabindex="0" aria-label="Фантастика" onmouseenter="speakText('Фантастика')" onfocus="speakText('Фантастика')" onclick="speakAndNavigate('Переход в раздел фантастика', '../page/book/fantasy.php')">Фантастика</td>
      <td id="clas" role="button" tabindex="0" aria-label="Классика" onmouseenter="speakText('Классика')" onfocus="speakText('Классика')" onclick="speakAndNavigate('Переход в раздел классика', '../page/book/classic.php')">Классика</td>
      <td id="advent" role="button" tabindex="0" aria-label="Приключения" onmouseenter="speakText('Приключения')" onfocus="speakText('Приключения')" onclick="speakAndNavigate('Переход в раздел приключения', '../page/book/advent.php')">Приключения</td>
    </tr>
    <tr>
      <td id="poe" role="button" tabindex="0" aria-label="Поэзия" onmouseenter="speakText('Поэзия')" onfocus="speakText('Поэзия')" onclick="speakAndNavigate('Переход в раздел поэзия', '../page/book/poet.php')">Поэзия</td>
      <td id="det" role="button" tabindex="0" aria-label="Детектив" onmouseenter="speakText('Детектив')" onfocus="speakText('Детектив')" onclick="speakAndNavigate('Переход в раздел детектив', '../page/book/detec.php')">Детектив</td>
      <td id="rom" role="button" tabindex="0" aria-label="Роман" onmouseenter="speakText('Роман')" onfocus="speakText('Роман')" onclick="speakAndNavigate('Переход в раздел роман', '../page/book/roman.php')">Роман</td>
    </tr>
    <tr>
      <td id="humor" role="button" tabindex="0" aria-label="Юмор, сатира" onmouseenter="speakText('Юмор, сатира')" onfocus="speakText('Юмор, сатира')" onclick="speakAndNavigate('Переход в раздел юмор, сатира', '../page/book/humor.php')">Юмор, сатира</td>
      <td id="ist" role="button" tabindex="0" aria-label="История" onmouseenter="speakText('История')" onfocus="speakText('История')" onclick="speakAndNavigate('Переход в раздел история', '../page/book/history.php')">История</td>
      <td id="back" role="button" tabindex="0" aria-label="На главную" onmouseenter="speakText('На главную')" onfocus="speakText('На главную')" onclick="speakAndNavigate('Возврат на главную страницу', '/www')">На главную</td>
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
// Функции для озвучивания и навигации
var synth = window.speechSynthesis;

function speakText(text) {
  if (synth.speaking) {
    synth.cancel();
  }
  var utterance = new SpeechSynthesisUtterance(text);
  utterance.lang = 'ru-RU';
  utterance.rate = 1.0;
  utterance.pitch = 1.0;
  utterance.volume = 1.0;
  synth.speak(utterance);
}

function speakAndNavigate(text, url) {
  if (synth.speaking) {
    synth.cancel();
  }
  var utterance = new SpeechSynthesisUtterance(text);
  utterance.lang = 'ru-RU';
  utterance.rate = 1.0;
  utterance.pitch = 1.0;
  utterance.volume = 1.0;
  
  utterance.onend = function() {
    setTimeout(function() {
      document.location.href = url;
    }, 300);
  };
  
  synth.speak(utterance);
}

// Озвучивание при загрузке страницы
window.addEventListener('load', function() {
  setTimeout(function() {
    speakText('Раздел аудиокниги. Выберите жанр.');
  }, 500);
});
</script>

</body>

</html>