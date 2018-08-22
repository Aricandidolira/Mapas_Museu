
 <title>Rotas</title>
	<meta charset="utf-8">
    <style>
      html, body, #mapa {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #painel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
	 #mapa {
        margin-right: 400px;
		
      }
	</style>
	<br>
<center>
<h1>Rotas</h1>
<br>
<h3><a href='index.php?controle=dinamico_control&metodo=mapa'>Clique aqui para ir para pagina do mapa!</a></h3>
</center>
<br><br>
    <script src="http://maps.google.com/maps/api/js?&key=AIzaSyAyHH8WH_a8JdPRtm0JuRLO0UXMk4AYRNY"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize() 
	{
	  directionsDisplay = new google.maps.DirectionsRenderer();
	  var mapOptions = {
		zoom: 6,
		center: new google.maps.LatLng(-23.550041, -46.620061)
	  };
	  var map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
	  directionsDisplay.setMap(map);
	  directionsDisplay.setPanel(document.getElementById('painel'));
	}


function calcRoute() {
  var origem = document.getElementById('origem').value;
  var end = document.getElementById('end').value;
  var modo = document.getElementById('modo').value;
  //alert(end);
  var request = {
      origin:origem,
      destination:end,
      travelMode: google.maps.TravelMode[modo]
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

  <article>
  <label>Origem:</label>
      <input type="text" id="origem"  />
  <label><b>Destino:</b></label>
    <select id="end" onchange="calcRoute();">
	<option>Escolha um Destino</option>
      <?php
	  if(count($ret) > 0)
	  {
		for($x=0;$x<count($ret);$x++)
		{
		$end=$ret[$x]['nomemuseu'];
			echo"<option value='{$ret[$x]['latitude']},{$ret[$x]['longitude']}'>$end</option>";
		}
	  }
	  ?>
    </select>
      <label>Modo de Deslocamento:</label>
			<select id="modo">
				<option value="DRIVING">Dirigindo</option>
				<option value="WALKING">Andando</option>
				<option value="BICYCLING">Pedalando</option>
				<option value="TRANSIT">Transporte Público</option>
			</select>
	  <button onclick="calcRoute();">OK</button>
	  <br>
    <div id="painel"></div><br><br>
    <div id="mapa" ></div>
    </article>
	</center>
 <?php
include"rodape.html";
?>