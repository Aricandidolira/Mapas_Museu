<!DOCTYPE html>
<html>
<head>
	<title>Mapa</title>
	<style>
		html, body, #mapa{height:100%; width:100%;}
	</style>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=AIzaSyBLKRnQaWv6M7DvuoznPFdhlaRgdQrqiG0"></script>
</head>

<header></header>
<br>
<center>
<h1>Mapa</h1>
<br>
<h3><a href='index.php?controle=mapa_control&metodo=rota'>Clique aqui para ir para pagina da rota!</a></h3>
</center>
<br><br>
	<script>
		var ar = <?php echo json_encode($ret) ?>;
		
		function carrega_mapa()
		{
			var mapa = new google.maps.Map(document.getElementById('mapa'),
			{
			zoom:13, center:{lat:-23.561084, lng:-46.658288}
			});

			mostrar_pontos(mapa);
		}

		function mostrar_pontos(mapa)
		{
			
			for(var x=0; x<ar.length; x++)
			{
				//var imagem = 'museu.png';
				var marca = new google.maps.Marker
				({
					position: {lat: parseFloat(ar[x].latitude),	lng: parseFloat(ar[x].longitude)},
					//icon: imagem,
					map: mapa,
		  			title: ar[x].nomemuseu
				});
			}
		}
		
		
		</script>
		<body onload="carrega_mapa()">
			<div id="mapa"></div>
		</body>
</html>