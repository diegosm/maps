<h1>O que &eacute; isto ?</h1>
<p class="box">A StarMaps Interface &eacute; um conjunto de funcionalidades para se trabalhar com <b>mapas</b>, entendendo esta API, voc&ecirc; criar&aacute; facilmente aplica&ccedil;&otilde;es com mapas, nossa vers&atilde;o atual est&aacute; dando suporte ao Google Maps V3, em breve estaremos lan&ccedil;ando a mesma biblioteca para integra&ccedil;&atilde;o com Bing Maps e OpenMap.</p>


<div class="esp"></div>



<h1>Por que?</h1>
<p>Nosso objetivo é reduzir o trabalho dos programadores que precisam diariamente desenvolver com as APIs de mapas existentes, utilizando nossa biblioteca você não precisará entender as APIS existentes pois ela fará o trabalho pesado por você.</p>


<div class="esp"></div>
 
 


<h1>Vantagens</h1>
<p>
  Total controle sobre marcadores, manuten&ccedil;&atilde;o de cercas e rotas, padr&atilde;o de c&oacute;digo.</p>
<div class="esp"></div>
 
 


<h1>Como ela pode me ajudar? (Comparativo)</h1>
<p>Veja um exemplo utilizando a API  do GOOGLE MAPS, inserindo dois marcadores, <strong>sem janela de informa&ccedil;&otilde;es (InfoWindow)</strong>.</p>


<pre class="pre">
&lt;script&gt;
function initialize() {
  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
  var mapOptions = {zoom: 4,center: myLatlng, mapTypeId: google.maps.MapTypeId.ROADMAP }
  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  var nPosition = new google.maps.LatLng(-25.353882,130.044922);
  var marker = new google.maps.Marker({position: nPosition, map: map, title: 'Marker 1'});
  var nPosition2 = new google.maps.LatLng(-25.373882,130.144922);
  var marker2 = new google.maps.Marker({position: nPosition2, map: map, title: 'Marker 2'});

}
google.maps.event.addDomListener(window, 'load', initialize);
&lt;/script&gt;
</pre>

<p>Agora veja este exemplo, utilizando nossa API para instanciar o mapa e criar dois marcadores, com janela de informa&ccedil;&otilde;es <a href="examples/01.html" target="_blank">ver</a></p>
  
  <pre class="pre">&lt;script&gt;
function initialize () { 
    Map.init({lat: -3.745727, lng: -38.5215, zoom: 8,  div: 'mapa'});
    Map.Markers.add({id: 1, lat: -3.725727, lng:-38.5015, title: 'Marker 1'});
    Map.Markers.add({id: 2, lat: -3.745727, lng:-38.4915, title: 'Marker 2'});
}  
Map.Utils.addDomListener(window, 'load', initialize);<br />&lt;/script&gt;</pre>
<div class="esp2"></div>

<p>Agora, voc&ecirc; precisar&aacute; alterar as informa&ccedil;&otilde;es do marcador, como &iacute;cone, t&iacute;tulo, posi&ccedil;&atilde;o e o html.</p>
<div class="esp"></div>
