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
      <td id="vk" role="button" tabindex="0" aria-label="ВКонтакте" onmouseenter="speakText('ВКонтакте')" onfocus="speakText('ВКонтакте')" onclick="speakAndNavigateExternal('Переход на сайт ВКонтакте', 'https://vk.com/')">ВКонтакте</td>
      <td id="ok" role="button" tabindex="0" aria-label="Одноклассники" onmouseenter="speakText('Одноклассники')" onfocus="speakText('Одноклассники')" onclick="speakAndNavigateExternal('Переход на сайт Одноклассники', 'https://ok.ru/')">Одноклассники</td>
      <td id="face" role="button" tabindex="0" aria-label="Facebook" onmouseenter="speakText('Facebook')" onfocus="speakText('Facebook')" onclick="speakAndNavigateExternal('Переход на сайт Facebook', 'https://facebook.com/')">Facebook</td>
    </tr>
    <tr>
      <td id="twit" role="button" tabindex="0" aria-label="Twitter" onmouseenter="speakText('Twitter')" onfocus="speakText('Twitter')" onclick="speakAndNavigateExternal('Переход на сайт Twitter', 'https://twitter.com/')">Twitter</td>
      <td id="jj" role="button" tabindex="0" aria-label="Живой Журнал" onmouseenter="speakText('Живой Журнал')" onfocus="speakText('Живой Журнал')" onclick="speakAndNavigateExternal('Переход на сайт Живой Журнал', 'https://www.livejournal.com/')">Живой Журнал</td>
      <td id="back" role="button" tabindex="0" aria-label="На главную" onmouseenter="speakText('На главную')" onfocus="speakText('На главную')" onclick="speakAndNavigate('Возврат на главную страницу', '/www')">На главную</td>
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
    speakText('Раздел социальные сети. Выберите нужную социальную сеть.');
  }, 500);
});
</script>

</html>