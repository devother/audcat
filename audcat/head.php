<script src="js/switch.js"></script>

<table width="100%">
  <thead>
    <tr class="black-y">
      <th id = "down" role="button" tabindex="0" aria-label="Уменьшить размер шрифта" scope="col" style="background-color: #000" onmouseenter="speakText('Уменьшить размер шрифта')" onfocus="speakText('Уменьшить размер шрифта')">A-</th>
      <th id = "up" role="button" tabindex="0" aria-label="Увеличить размер шрифта" scope="col" style="background-color: #000" onmouseenter="speakText('Увеличить размер шрифта')" onfocus="speakText('Увеличить размер шрифта')">A+</th>
      <th id = "defaul" role="button" tabindex="0" aria-label="Тема оформления один" scope="col" style="background-color: #000" onmouseenter="speakText('Тема оформления один')" onfocus="speakText('Тема оформления один')">Тема1</th>
      <th id = "wb" class="black-w" role="button" tabindex="0" aria-label="Тема оформления два" scope="col" style="background-color: #000" onmouseenter="speakText('Тема оформления два')" onfocus="speakText('Тема оформления два')">Тема2</th>
      <th id = "bw" class="white-b" role="button" tabindex="0" aria-label="Тема оформления три" scope="col" onmouseenter="speakText('Тема оформления три')" onfocus="speakText('Тема оформления три')">Тема3</th>
    </tr>
  </thead>

<script type="text/javascript">
var _userway_config = {
// uncomment the following line to override default position
// position: 1,
// uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
// language: 'ru',
// uncomment the following line to override color set via widget
 color: '#e9ff00', 
account: '88mIHn7VnU'
};
</script>

<script type="text/javascript" src="js/widget.js"></script>
  
<script>
// Функция для озвучивания текста (если еще не определена)
if (typeof speakText === 'undefined') {
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
}

var html = document.documentElement;
up.onclick = function() {
  speakText('Размер шрифта увеличен');
  html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) + 2 + 'px';
};
up.onkeypress = function(e) {
  if (e.key === 'Enter' || e.key === ' ') {
    e.preventDefault();
    up.onclick();
  }
};

down.onclick = function() {
  speakText('Размер шрифта уменьшен');
  html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) - 2 + 'px';
};
down.onkeypress = function(e) {
  if (e.key === 'Enter' || e.key === ' ') {
    e.preventDefault();
    down.onclick();
  }
};

defaul.onclick = function() {
  speakText('Применена тема оформления один');
  switch_style('default');
};
defaul.onkeypress = function(e) {
  if (e.key === 'Enter' || e.key === ' ') {
    e.preventDefault();
    defaul.onclick();
  }
};

bw.onclick = function() {
  speakText('Применена тема оформления три');
  switch_style('bw');
};
bw.onkeypress = function(e) {
  if (e.key === 'Enter' || e.key === ' ') {
    e.preventDefault();
    bw.onclick();
  }
};

wb.onclick = function() {
  speakText('Применена тема оформления два');
  switch_style('wb');
};
wb.onkeypress = function(e) {
  if (e.key === 'Enter' || e.key === ' ') {
    e.preventDefault();
    wb.onclick();
  }
};
</script>