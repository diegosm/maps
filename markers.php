<h1>Marcadores</h1>

<p>Marcadores s&atilde;o pontos de refer&ecirc;ncia plotados na tela do mapa, veja abaixo um exemplo de como &eacute; simples criar marcadores com nossa API:</p>


<pre class="pre">Map.Markers.add({ 
                   id: 4, 
                   lat: -3.743805, 
                   lng: -38.50128899999999, 
                   title: 'T&iacute;tulo do marcador',  
                   html: 'html 04', 
                   icon: 'images/beachflag.png' });</pre>
                   
                   
<div class="esp"></div>




<h1>M&eacute;todo add ( Map.Markers.add(json) )</h1>
<p>Ao utilizar nossa API voc&ecirc; ter&aacute; maior controle sobre os marcadores de sua aplica&ccedil;&atilde;o, n&oacute;s criamos um m&eacute;todo de controle de marcadores, onde facilmente voc&ecirc; poder&aacute; alterar ou remov&ecirc;-los utilizando nossos met&oacute;dos. Veja abaixo os par&acirc;metros para criar um marcador.</p>        
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
    	<td>id</td>
        <td>Usado para identificar o Marcador, com isto voc&ecirc; poder&aacute; alterar ou remover marcadores existentes.</td>
        <td>num&eacute;rico</td>
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
      <td>title</td>
      <td>Define o t&iacute;tulo do marcador</td>
      <td>varchar</td>
      <td>N&atilde;o</td>
    </tr>
    <tr class="tab-cor">
      <td>html</td>
      <td>C&oacute;digo HTML para inserir no Info Window</td>
      <td>varchar</td>
      <td>N&atilde;o</td>
    </tr>
    <tr>
      <td>icon</td>
      <td>Caminho da imagem em png, para ser o &iacute;cone do marcador</td>
      <td>varchar</td>
      <td>N&atilde;o</td>
    </tr>
    <tr class="tab-cor">
      <td>draggable</td>
      <td>Informa se o marcador &eacute; fixo ou n&atilde;o.</td>
      <td>boolean</td>
      <td>N&atilde;o</td>
    </tr>
    <tr>
      <td>label</td>
      <td>Por padr&atilde;o, &eacute; setado como true, define se exibe ou n&atilde;o a descri&ccedil;&atilde;o do marcador no mapa</td>
      <td>boolean</td>
      <td>N&atilde;o</td>
    </tr>
    <tr class="tab-cor">
      <td>contentString</td>
      <td>Por padr&atilde;o, &eacute; setado como true, define se exibe ou n&atilde;o a info Window, janela de infora&ccedil;&otilde;es do marcador</td>
      <td>boolean</td>
      <td>N&atilde;o</td>
    </tr>


<tr>
      <td>position</td>
      <td>Voc&ecirc; pode informar a latitude e longitude como no google, com um objeto position, exemplo: new google.maps.LatLng( latitude, longitude ); Caso voc&ecirc; informe o position e os parametros lat, lng, a api vai considerar este campo como sendo a posi&ccedil;&atilde;o do marcador.</td>
      <td>varchar</td>
      <td>N&atilde;o</td>
    </tr>
        
    <tr class="tab-cor">
      <td>opt</td>
      <td>Recebe as op&ccedil;&otilde;es padr&atilde;o como na API do google, exemplo: { title : 'titulo', draggable: true , etc} </td>
      <td>options</td>
      <td>N&atilde;o</td>
    </tr>
</table>


<div class="esp"></div>







<h1>M&eacute;todo setPosition ( Map.Markers.setPosition() )</h1>
<p>Este m&eacute;todo seta uma nova posi&ccedil;&atilde;o para o marcador.<br />
  Este 
m&eacute;todo n&atilde;o altera o t&iacute;tulo ou outras informa&ccedil;&otilde;es passadas anteriormente por outro m&eacute;todo, apenas move o marcador para uma nova posi&ccedil;&atilde;o, para alterar outras informa&ccedil;&otilde;es do marcador, consulte Map.Markers.update() .</p>        
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
    	<td>id</td>
        <td>Usado para identificar o Marcador que deseja remover, caso queira remover todos os marcadores, digite 'all' como par&acirc;metro da fun&ccedil;&atilde;o.</td>
        <td>varchar</td>
        <td>Sim</td>
    </tr>
    <tr>
      <td>lat</td>
      <td>Informe a nova latitude do marcador</td>
      <td>num&eacute;rico</td>
      <td>Sim</td>
    </tr>
    <tr class="tab-cor">
      <td>lng</td>
      <td>Informe a nova longitude do marcador</td>
      <td>num&eacute;rico</td>
      <td>Sim</td>
    </tr>
</table>


<div class="esp"></div>

 






<h1>M&eacute;todo update ( Map.Markers.update(json) )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel atualizar as informa&ccedil;&otilde;es do marcador, ele identifica o marcador pelo ID. Clique <a href="examples/02.html" target="_blank">para ver um exemplo</a>.</p>        
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
    <td>id</td>
    <td>Usado para identificar o Marcador, com isto voc&ecirc; poder&aacute; alterar ou remover marcadores existentes.</td>
    <td>num&eacute;rico</td>
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
    <td>title</td>
    <td>Define o t&iacute;tulo do marcador</td>
    <td>varchar</td>
    <td>N&atilde;o</td>
  </tr>
  <tr class="tab-cor">
    <td>html</td>
    <td>C&oacute;digo HTML para inserir no Info Window</td>
    <td>varchar</td>
    <td>N&atilde;o</td>
  </tr>
  <tr>
    <td>icon</td>
    <td>Caminho da imagem em png, para ser o &iacute;cone do marcador</td>
    <td>varchar</td>
    <td>N&atilde;o</td>
  </tr>
  <tr class="tab-cor">
    <td>draggable</td>
    <td>Informa se o marcador &eacute; fixo ou n&atilde;o.</td>
    <td>boolean</td>
    <td>N&atilde;o</td>
  </tr>
  <tr>
    <td>label</td>
    <td>Por padr&atilde;o, &eacute; setado como true, define se exibe ou n&atilde;o a descri&ccedil;&atilde;o do marcador no mapa</td>
    <td>boolean</td>
    <td>N&atilde;o</td>
  </tr>
  <tr class="tab-cor">
    <td>contentString</td>
    <td>Por padr&atilde;o, &eacute; setado como true, define se exibe ou n&atilde;o a info Window, janela de infora&ccedil;&otilde;es do marcador</td>
    <td>boolean</td>
    <td>N&atilde;o</td>
  </tr>
  <tr>
    <td>position</td>
    <td>Voc&ecirc; pode informar a latitude e longitude como no google, com um objeto position, exemplo: new google.maps.LatLng( latitude, longitude ); Caso voc&ecirc; informe o position e os parametros lat, lng, a api vai considerar este campo como sendo a posi&ccedil;&atilde;o do marcador.</td>
    <td>varchar</td>
    <td>N&atilde;o</td>
  </tr>
  <tr class="tab-cor">
    <td>opt</td>
    <td>Recebe as op&ccedil;&otilde;es padr&atilde;o como na API do google, exemplo: { title : 'titulo', draggable: true , etc} </td>
    <td>options</td>
    <td>N&atilde;o</td>
  </tr>
</table>
<div class="esp"></div>

 












<h1>M&eacute;todo del ( Map.Markers.del() )</h1>
<p>Este m&eacute;todo &eacute; utilizado para remover um ou todos os marcadores.</p>        
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
    	<td>id</td>
        <td>Usado para identificar o Marcador que deseja remover, caso queira remover todos os marcadores, digite 'all' como par&acirc;metro da fun&ccedil;&atilde;o.</td>
        <td>varchar</td>
        <td>Sim</td>
    </tr>
</table>







<div class="esp"></div>



<h1>M&eacute;todo serialize ( Map.Markers.serialize() )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel obter todos os dados dos marcadores que est&atilde;o plotados no mapa ele retornar&aacute; um JSON.</p>
<p>Veja um exemplo de uso com as fun&ccedil;&otilde;es serialize e loadSerialize, <a href="examples/03.html" target="_blank">clique aqui</a>.</p>
<div class="esp2"></div>


<h2>Par&acirc;metros</h2>

<table width="100%">
	<tr>
	<td width="200" bgcolor="#CCCCCC">Parametro</td>
	<td bgcolor="#CCCCCC">Descri&ccedil;&atilde;o</td>
	<td width="70" bgcolor="#CCCCCC">Tipo</td>
	<td bgcolor="#CCCCCC">Obrigat&oacute;rio</td>
    </tr>
</table>


<div class="esp"></div>








<h1>M&eacute;todo loadSerialize ( Map.Markers.loadSerialize() )</h1>
<p>Com este m&eacute;todo &eacute; poss&iacute;vel plotar marcadores no mampa atrav&eacute;s de um objeto JSON.</p>        
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

 

