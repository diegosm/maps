<h1>O mapa</h1>

<p>Aprenda como iniciar o mapa e os par&acirc;metros de inicializa&ccedil;&atilde;o</p>

<div class="esp"></div>



<h2>Incluindo os javascripts na p&aacute;gina</h2>
<p>Para que nossa API funcione corretamente, n&atilde;o esque&ccedil;a de incluir os elementros scripts no seu HTML.</p>
<p>A primeira linha invoca a API 2.0 do Google Maps e a segunda e terceira linha importam nossa API</p>
<pre class="pre">&lt;script src=&quot;http://maps.google.com/maps/api/js?sensor=true&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;../js/map.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;../js/labels.js&quot;&gt;&lt;/script&gt;
</pre>

<div class="esp"></div>




<h2>Inicializa&ccedil;&atilde;o</h2>

<p>Abaixo est&aacute; a forma correta de inicializa&ccedil;&atilde;o do mapa, recomendamos o uso da fun&ccedil;&atilde;o addDomListener para instanciar o mapa:</p>

<pre class="pre">&lt;script&gt;
function initialize () { 
    Map.init({
                lat: -3.745727,
                lng: -38.5215,
                zoom: 8,
                div: 'mapa'
            });
}  

Map.Utils.addDomListener(window, 'load', initialize);
&lt;/script&gt;
</pre>


<p>Abaixo est&aacute; a forma ERRADA de se inicializar o mapa:</p>

<pre class="pre">&lt;html&gt;
...
&lt;body&gt;
...
&lt;div id=&quot;mapa&quot;&gt;&lt;/div&gt;
&lt;script&gt;
Map.init({
                lat: -3.745727,
                lng: -38.5215,
                zoom: 8,
                div: 'mapa'
            });
}
&lt;/script&gt;
...
&lt;/body&gt;
&lt;/html&gt;</pre>
  
                   
<div class="esp"></div>




<h2>Método Map.init(json)</h2>
<p>Instancia o mapa, recebe um objeto com os par&acirc;metros abaixo.</p>

<div class="esp2"></div>


<h3>Par&acirc;metros</h3>


<table width="100%">
	<tr>
	<td width="200" bgcolor="#CCCCCC">Parametro</td>
	<td bgcolor="#CCCCCC">Descri&ccedil;&atilde;o</td>
	<td width="70" bgcolor="#CCCCCC">Tipo</td>
	<td bgcolor="#CCCCCC">Obrigat&oacute;rio</td>
    </tr>
    
    <tr class="tab-cor">
    	<td>div</td>
        <td>Deve ser informado para que a API saiba aonde carregar o mapa.</td>
        <td>varchar</td>
        <td>Sim</td>
    </tr>
    
    <tr>
      <td>lat</td>
      <td>Utilizado para inserir a latitude do marcador</td>
      <td>num&eacute;rico</td>
      <td>Sim</td>
    </tr>
    
    
    <tr class="tab-cor">
      <td>lng</td>
      <td>Utilizado para inserir a longitude do marcador</td>
      <td>num&eacute;rico</td>
      <td>Sim</td>
    </tr>
    <tr>
      <td>zoom</td>
      <td>Define o zoom inicial do mapa, por padr&atilde;o inicia-se em 12.</td>
      <td>varchar</td>
      <td>N&atilde;o</td>
    </tr>
</table>


<div class="esp"></div>
