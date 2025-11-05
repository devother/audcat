<script src="../js/switch.js"></script>


<table width="100%">
  <thead>
    <tr class="black-y">
      <th id = "down" scope="col" style="background-color: #000">A-</th>
      <th id = "up" scope="col" style="background-color: #000">A+</th>
      <th id = "defaul" scope="col" style="background-color: #000">Тема1</th>
      <th id = "wb" class="black-w" scope="col" style="background-color: #000">Тема2</th>
      <th id = "bw" class="white-b" scope="col">Тема3</th>
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

<script type="text/javascript" src="../js/widget.js"></script>
  
<script>
var html = document.documentElement;
up.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) + 2 + 'px';
};
</script>

<script>
var html = document.documentElement;
down.onclick = function() {
  // при помощи JS увеличить размер шрифта html на 2px
  html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) - 2 + 'px';
};
</script>



<script>
  var html = document.documentElement;
    defaul.onclick = function() {
      switch_style('default')
    }
</script>

<script>
  var html = document.documentElement;
    bw.onclick = function() {
      switch_style('bw')
    }
</script>

<script>
  var html = document.documentElement;
    wb.onclick = function() {
      switch_style('wb')
    }
</script>