<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza Food</title>
		
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		
        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/home.css')}} " type="text/css"/>
		
    </head>
    <body>
		<header>
			<img src="{{ asset('img/pizza_mesa.jpg')  }}" />
			<div class="d-flex align-items-end justify-content-center" style="height: 100%;">
				<div id="icon">
					<img src="{{ asset('img/logo_bg_black.png')  }}" />
				</div>
			</div>
		</header>
		<nav class="nav justify-content-center">
			<ul class="nav justify-content-between align-items-center">
				<li class="nav-item show"><a href="{{ route('pedido') }}" class="nav-link m-3">PEÇA AGORA</a></li>
				<li class="nav-item orange show"><a href="#" class="nav-link m-3">CARDÁPIO</a></li>
                <li class="nav-item hide"><a href="#" class="nav-link m-3"></a></li><!-- Criar o meio vazio para md lg -->
				<li class="nav-item orange show"><a href="#" class="nav-link m-3">PROMOÇÕES</a></li>
				<li class="nav-item show"><a href="#" class="nav-link m-3">QUEM SOMOS</a></li>	
			</ul>
		</nav>
    </body>
</html>