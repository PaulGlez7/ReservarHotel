<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/estilo2.css">
	<title>MAPA DEL SITIO</title>
	<style >
        .breadcrumbs{
            padding: 10px;
            font-family: Bahnschrift SemiBold;
        }
        .breadcrumb-item{
            display: inline-block;
        }

        .breadcrumb-item:not(:last-of-type)::after {
            content: '/';
            margin: 0 5px;
            color: #cccccc;
        }

        .breadcrumbs__link{
            text-decoration: none;
            color: #999999;
        }

        .breadcrumbs__link:hover{
            text-decoration: underline;
        }

        .breadcrumbs__link--active{
            color:  darkcyan;
        }
    </style>
</head>

<body>
<header>
		<nav class="nav">
               <ul class="menu">
                <div class="logo"><img class="empresa" src="IMG/logo.ico" height="50px"></div>
                <li><a href="/">CENTRAL DECORACIÓN</a></li>
               </ul>
		</nav>
	</header>
<main>
	<ul class="breadcrumbs">
        <li class="breadcrumb-item">
            <a href="/" class="breadcrumbs__link">HOME</a>
         </li>
         <li class="breadcrumb-item">
            <a href="/mapa" class="breadcrumbs__link">MAPA DEL SITIO</a>
         </li>
        </ul>
	<h2 class="subtitulo"> Mapa del sitio</h2>
	<nav>
		<br>
 		<a href="/">HOME</a><br>
 		<a href="/maderas">CATÁLOGO MDF</a><br>
 		<a href="/persianas">PRODUCTOS</a><br>
        <a href="https://www.facebook.com/CD.CESARSALAZAR">PAGINA DE FACEBOOK</a><br>
        <a href="https://www.google.com/maps/place/Central+de+Decoraci%C3%B3n+Casa+Tienda/@21.5189691,-104.9262527,15z/data=!3m1!4b1!4m5!3m4!1s0x842736673ed420bd:0xc57b38eb8ce81b8b!8m2!3d21.5190136!4d-104.9174704">UBICACIÓN</a>
 	</nav>
</main>
	
</body>
</html>