<h1>Cercas</h1>

<p>As cercas podem ser utilizadas para marcar regi&otilde;es no mapa, delimitar dist&acirc;ncias. Pode ainda exibir ou n&atilde;o os marcadores nas extremidades da cerca.</p>


<pre class="pre">Map.Fences.add();</pre>
                   
                   
<div class="esp"></div>




<h1>M&eacute;todo add ( Map.Fences.add() )</h1>
<p>Para habilitar a cria&ccedil;&atilde;o de cercas no mapa, &eacute; s&oacute; chamar o m&eacute;todo Map.Fences.add(). Este m&eacute;todo n&atilde;o recebe par&acirc;metros.</p>        



<div class="esp"></div>









<h1>M&eacute;todo load ( Map.Fences.load(json) )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel carregar uma cerca, voc&ecirc; pode informar alguns par&acirc;metros via json, como </p>        
<div class="esp2"></div>






<h2>Par&acirc;metros</h2>
<table width="100%">
  <tr>
    <td width="200" bgcolor="#CCCCCC">Parametro</td>
    <td bgcolor="#CCCCCC">Descri&ccedil;&atilde;o</td>
    <td width="70" bgcolor="#CCCCCC">Tipo</td>
    <td bgcolor="#CCCCCC">Obrigat&oacute;rio</td>
  </tr>
  <tr class="tab-cor">
    <td>del</td>
    <td>Se informado, ir&aacute; apagar todos os marcadores e cercas criados anteriormente, por padr&atilde;o vem setado como true</td>
    <td>boolean</td>
    <td>N&atilde;o</td>
  </tr>
  <tr>
    <td>markers</td>
    <td>Deve vir um array de json de marcadores, para saber como criar um marcador via json, leia a documenta&ccedil;&atilde;o de marcadores, definir&aacute; os pontos do pol&iacute;gono que formar&aacute; a cerca.</td>
    <td>json</td>
    <td>Sim</td>
  </tr>
  <tr class="tab-cor">
    <td>showMarkers</td>
    <td>Define se ir&aacute; ou n&atilde;o mostrar os marcadores na cerca, por padr&atilde;o vem setado como true.</td>
    <td>boolean</td>
    <td>N&atilde;o</td>
  </tr>
</table>
<div class="esp"></div>

 












<h1>M&eacute;todo del ( Map.Markers.del() )</h1>
<p>Este m&eacute;todo &eacute; utilizado para remover todas as cercas plotadas no mapa, este m&eacute;todo n&atilde;o recebe par&acirc;metros.</p>        
<div class="esp"></div>



<h1>M&eacute;todo serialize ( Map.Markers.serialize() )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel obter todos os dados da cerca, incluindo os marcadores que est&atilde;o plotados no mapa, ele retornar&aacute; um JSON da cerca.</p>
<p>Veja um exemplo de uso com as fun&ccedil;&otilde;es serialize e load, <a href="examples/04.html" target="_blank">clique aqui</a>.</p>
 
 
<div class="esp"></div>








<h1>M&eacute;todo load ( Map.Markers.load() )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel plotar cercas com marcadores no mampa atrav&eacute;s de um objeto JSON.</p>        
<div class="esp2"></div>


<h2>Par&acirc;metros</h2>

<table width="100%">
	<tr>
	<td width="200" bgcolor="#CCCCCC">Parametro</td>
	<td bgcolor="#CCCCCC">Descri&ccedil;&atilde;o</td>
	<td width="70" bgcolor="#CCCCCC">Tipo</td>
	<td bgcolor="#CCCCCC">Obrigat&oacute;rio</td>
    </tr>
    
        
    <tr class="tab-cor">
    	<td>json</td>
        <td>&nbsp;</td>
        <td>json</td>
        <td>Sim</td>
    </tr>
</table>


<div class="esp"></div>

 

