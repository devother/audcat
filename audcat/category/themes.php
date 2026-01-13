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
      <td id="rgbs" role="button" tabindex="0" aria-label="Российская государственная библиотека для слепых" onmouseenter="speakText('Российская государственная библиотека для слепых')" onfocus="speakText('Российская государственная библиотека для слепых')" onclick="speakAndNavigateExternal('Переход на сайт Российской государственной библиотеки для слепых', 'http://rgbs.ru/')">РГБС</td>
      <td id="voi" role="button" tabindex="0" aria-label="Всероссийское общество инвалидов" onmouseenter="speakText('Всероссийское общество инвалидов')" onfocus="speakText('Всероссийское общество инвалидов')" onclick="speakAndNavigateExternal('Переход на сайт Всероссийского общества инвалидов', 'http://voi.ru/')">ВОИ</td>
      <td id="rooi" role="button" tabindex="0" aria-label="РООИ Перспектива" onmouseenter="speakText('РООИ Перспектива')" onfocus="speakText('РООИ Перспектива')" onclick="speakAndNavigateExternal('Переход на сайт РООИ Перспектива', 'https://perspektiva-inva.ru/')">РООИ Перспектива</td>
    </tr>
    <tr>
      <td id="trud" role="button" tabindex="0" aria-label="Трудоустройство" onmouseenter="speakText('Трудоустройство')" onfocus="speakText('Трудоустройство')" onclick="speakAndNavigateExternal('Переход на сайт трудоустройства', 'https://perspektiva-inva.ru/jobs/vacancy/')">Трудоустройство</td>
      <td id="dis" role="button" tabindex="0" aria-label="Дислайф" onmouseenter="speakText('Дислайф')" onfocus="speakText('Дислайф')" onclick="speakAndNavigateExternal('Переход на сайт Дислайф', 'http://dislife.ru/')">Дислайф</td>
      <td id="ds" role="button" tabindex="0" aria-label="Доступная среда" onmouseenter="speakText('Доступная среда')" onfocus="speakText('Доступная среда')" onclick="speakAndNavigateExternal('Переход на сайт Доступная среда', 'https://www.smartaids.ru/')">Доступная среда</td>
    </tr>
    <tr>
      <td id="disab" role="button" tabindex="0" aria-label="Дисабилити" onmouseenter="speakText('Дисабилити')" onfocus="speakText('Дисабилити')" onclick="speakAndNavigateExternal('Переход на сайт Дисабилити', 'http://www.disability.ru/')">Дисабилити</td>
      <td id="rea" role="button" tabindex="0" aria-label="Реакомп" onmouseenter="speakText('Реакомп')" onfocus="speakText('Реакомп')" onclick="speakAndNavigateExternal('Переход на сайт Реакомп', 'http://www.rehacomp.ru/')">Реакомп</td>
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
    speakText('Раздел тематические сайты. Выберите нужный сайт.');
  }, 500);
});
</script>

</body>

</html>