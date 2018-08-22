<?php
	if(!isset($_SESSION))
		session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
		<title>Museus de São Paulo</title>
		<link type="text/css" rel="stylesheet" href="estilo/style.css" />
		<script type="text/javascript" src="lib/jquery.js"></script>
</head>
<body>
<script>
  

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.login(function(response) {
		if (response.authResponse) {
            // usuario aceitou o app
			testAPI();
        }
    }, {
        scope: 'email, publish_actions,user_photos' // o que vai trazer
    });

  }

  window.fbAsyncInit = function()
  {
	  FB.init({
		appId      : '1886462378233264',
		cookie     : true,  // enable cookies to allow the server to access 
							// the session
		xfbml      : true,  // parse social plugins on this page
		version    : 'v2.2' // use version 2.2
	  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

	  FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	  });

  };
  // Load the SDK asynchronously
  (function(d, s, id)
  {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }
  (document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
	
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
	  document.getElementById('in').setAttribute('style', 'display: none');
	  document.getElementById('out').setAttribute('style', 'display: inline');
      document.getElementById('status').innerHTML =
        'Olá, ' + response.name + ' Seja Bem-Vindo!'; 
		document.getElementById('foto1').innerHTML = '<img src="http://graph.facebook.com/' + response.id + '/picture" />';
		
    });
  }
	function logout()
	{
		FB.logout(function(response) {
				// Person is now logged out
		});
		document.getElementById('in').setAttribute('style', 'display: inline');
		document.getElementById('out').setAttribute('style', 'display: none');
		document.getElementById('email').innerHTML = "";
		document.getElementById('sexo').innerHTML = "";
		document.getElementById('id').innerHTML = "";
		document.getElementById('foto1').innerHTML ="";
		document.getElementById('status').innerHTML ="";

	}
</script>
<div id="geral">
	<header></header>
	<nav>
	<div id='menudireita'>
	<?php
		
		if(isset($_SESSION["login"])) // ver se é interno ou pelo face
		{
			echo "<div id='menucentro'>";
				
					echo "<ul>";
						echo"<li><a href='index.php?controle=dinamico_control&metodo=mapa'>Mapa</a></li>";
						echo"<li><a href='index.php?controle=mapa_control&metodo=rota'>Rota</a></li>";
			
			if($_SESSION["login"] == "interno")
			{
				echo "<li><a href='index.php?controle=usuarioControle&metodo=logout'>Sair</a></li>";
				}
					echo "</ul>";
				echo "</div>";		
		}
		if(!isset($_SESSION) ||  @$_SESSION["login"]!= "interno")
		{
				echo "<div id='menucentro'>";
					echo "<ul>";
						echo "<div id='in'>";
						echo "<li><a href='?controle=control_cadastro&metodo=cadastro'>Cadastre-se</a></li>";
						echo "<li><a href='?controle=usuarioControle&metodo=login'>Entrar</a></li>&nbsp;&nbsp;";
						echo "<fb:login-button scope='public_profile,email' onlogin='checkLoginState();'>";
						echo "</fb:login-button>";
						echo "</div>";
						
						echo "<div id='foto1'></div>";
						
						echo "<div id='out' style='display:none;'>";
						echo"<li><a href='index.php?controle=dinamico_control&metodo=mapa'>Mapa</a></li>";
						echo"<li><a href='index.php?controle=mapa_control&metodo=rota'>Rota</a></li>";
						echo "<li><a button onclick='logout();'>Sair</a></button></li>";
						echo "</div>";
					echo "</ul>";	
				echo "</div>";
				
		}
		
	?>
	</div>	
	</nav>
	