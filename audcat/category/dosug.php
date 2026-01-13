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
      <td id="anek" role="button" tabindex="0" aria-label="Анекдоты" onmouseenter="speakText('Анекдоты')" onfocus="speakText('Анекдоты')" onclick="speakAndNavigateExternal('Переход на сайт анекдотов', 'https://www.anekdot.ru/last/anekdot/')">Анекдоты</td>
      <td id="weather" role="button" tabindex="0" aria-label="Погода" onmouseenter="speakText('Погода')" onfocus="speakText('Погода')" onclick="speakAndNavigateExternal('Переход на сайт погоды', 'https://yandex.ru/pogoda/moscow/?from=home')">Погода</td>
      <td id="news" role="button" tabindex="0" aria-label="Новости" onmouseenter="speakText('Новости')" onfocus="speakText('Новости')" onclick="speakAndNavigateExternal('Переход на сайт новостей', 'https://news.google.com/')">Новости</td>
    </tr>
    <tr>
      <td id="youtube" role="button" tabindex="0" aria-label="YouTube" onmouseenter="speakText('YouTube')" onfocus="speakText('YouTube')" onclick="speakAndNavigateExternal('Переход на сайт YouTube', 'https://www.youtube.com/')">YouTube</td>
      <td id="translate" role="button" tabindex="0" aria-label="Переводчик" onmouseenter="speakText('Переводчик')" onfocus="speakText('Переводчик')" onclick="speakAndNavigateExternal('Переход на сайт переводчика', 'https://translate.google.ru/')">Переводчик</td>
      <td id="avito" role="button" tabindex="0" aria-label="Avito" onmouseenter="speakText('Avito')" onfocus="speakText('Avito')" onclick="speakAndNavigateExternal('Переход на сайт Avito', 'https://www.avito.ru/')">Avito</td>
    </tr>
    <tr>
      <td id="wiki" role="button" tabindex="0" aria-label="Википедия" onmouseenter="speakText('Википедия')" onfocus="speakText('Википедия')" onclick="speakAndNavigateExternal('Переход на сайт Википедия', 'https://ru.wikipedia.org')">Википедия</td>
      <td id="music" role="button" tabindex="0" aria-label="Музыкальная студия" onmouseenter="speakText('Музыкальная студия')" onfocus="speakText('Музыкальная студия')" onclick="speakAndNavigateExternal('Переход на сайт музыкальной студии', 'https://blues-mcdc.ru/')">Музыкальная студия</td>
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

function speakAndNavigateExternal(text, url) {
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
      window.open(url, '_blank');
    }, 300);
  };
  
  synth.speak(utterance);
}

// Озвучивание при загрузке страницы
window.addEventListener('load', function() {
  setTimeout(function() {
    speakText('Раздел досуг. Выберите нужный сайт.');
  }, 500);
});
</script>

</body>

</html>