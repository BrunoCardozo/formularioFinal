<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<title>Formulário de Inscrição</title>
	<link rel="stylesheet" href="{{asset('css/layout-principal.css')}}" media="all" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
    @yield('style')
</head>

<body>

	<div class="header-linha-superior"></div>

	<div class="header">
			
		<div class="header-elementos">

			<div id="logo-header">
	            <a href="{{ URL('/') }}">  
	               <h1><img id="logo-index" src="{{ asset('img/doc.png') }}"><span id="central-telefonica" style="margin-bottom: -3px; margin-left: 10px;">Formulário de Inscrição</span></h1>
                </a>
	        </div>

    	</div>

	</div>

	<main>

        @yield('conteudo')

	</main>	

<!--script type="text/javascript" src="{{asset('js/jquery-v-3-5.js')}}"></script-->
@yield('javascript')
<!--script type="text/javascript" src="{{asset('js/layout-principal.js')}}"></script-->

</body>

</html>