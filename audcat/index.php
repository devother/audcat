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
        <td id="themes" role="button" tabindex="0" aria-label="Тематические сайты" onmouseenter="speakText('Тематические сайты')" onfocus="speakText('Тематические сайты')" onclick="speakAndNavigate('Переход в раздел тематические сайты', 'category/themes.php')">Тематические</td>
        <td id="abook" role="button" tabindex="0" aria-label="Аудиокниги" onmouseenter="speakText('Аудиокниги')" onfocus="speakText('Аудиокниги')" onclick="speakAndNavigate('Переход в раздел аудиокниги', 'category/abook.php')">Аудиокниги</td>
        <td id="site" role="button" tabindex="0" aria-label="Обычная версия сайта" onmouseenter="speakText('Обычная версия сайта')" onfocus="speakText('Обычная версия сайта')" onclick="speakAndNavigate('Переход на обычную версию сайта', 'site')">Обычная версия</td>
      </tr>
      <tr>
        <td id="soft" role="button" tabindex="0" aria-label="Программы" onmouseenter="speakText('Программы')" onfocus="speakText('Программы')" onclick="speakAndNavigate('Переход в раздел программы', 'category/soft.php')">Программы</td>
        <td id="dosug" role="button" tabindex="0" aria-label="Досуг" onmouseenter="speakText('Досуг')" onfocus="speakText('Досуг')" onclick="speakAndNavigate('Переход в раздел досуг', 'category/dosug.php')">Досуг</td>
        <td id="post" role="button" tabindex="0" aria-label="Почта" onmouseenter="speakText('Почта')" onfocus="speakText('Почта')" onclick="speakAndNavigate('Переход в раздел почта', 'category/post.php')">Почта</td>
      </tr>
      <tr>
        <td id="social" role="button" tabindex="0" aria-label="Социальные сети" onmouseenter="speakText('Социальные сети')" onfocus="speakText('Социальные сети')" onclick="speakAndNavigate('Переход в раздел социальные сети', 'category/social.php')">Социальные сети</td>
        <td id="search" role="button" tabindex="0" aria-label="Поисковики" onmouseenter="speakText('Поисковики')" onfocus="speakText('Поисковики')" onclick="speakAndNavigate('Переход в раздел поисковики', 'category/search.php')">Поисковики</td>
        <td id="about" role="button" tabindex="0" aria-label="О нас" onmouseenter="speakText('О нас')" onfocus="speakText('О нас')" onclick="speakAndNavigate('Переход в раздел о нас', 'category/about.php')">О нас</td>
      </tr>
  </tbody>
</table>


<div id='voice'></div>

<script>
var synth = window.speechSynthesis;
var currentUtterance = null;

// Функция для озвучивания текста
function speakText(text) {
  if (synth.speaking) {
    synth.cancel();
  }
  var utterance = new SpeechSynthesisUtterance(text);
  utterance.lang = 'ru-RU';
  utterance.rate = 1.0;
  utterance.pitch = 1.0;
  utterance.volume = 1.0;
  currentUtterance = utterance;
  synth.speak(utterance);
}

// Функция для озвучивания и навигации
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

// Функция для озвучивания и перехода на внешний сайт
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

function stop() {
  synth.cancel();
}

// Озвучивание при загрузке страницы
window.addEventListener('load', function() {
  setTimeout(function() {
    speakText('Вы находитесь на главной странице сайта AudCat. Используйте клавиши Tab для навигации или кликните на нужный раздел.');
  }, 500);
});
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


<!-- Обработчики onclick теперь встроены в элементы через атрибут onclick -->

</body>

</html>