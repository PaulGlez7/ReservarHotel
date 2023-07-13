<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/estilo2.css">
    
 
	<title></title>
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

        .btn{
        border: 3px solid rgba(100, 100, 100, 0.1);
        margin-bottom: 10px;
        justify-content: center;
        align-content: center;
        border-radius: 10px;
        padding: 10px;
        width: 100px;
        font-size: 15px;
        cursor: pointer;
        color: #fff;
        background-size: 100px;
        transition: 0.6;
    }

    .btn:hover{
        background-position: right;
    }

    .btn1{
         background-image: linear-gradient(to left, #0f2027, #203a43, #2c5364);
    }

    </style>
</head>
<body>
	<header>
		<nav class="nav">
               <ul class="menu">
                <div class="logo"><img class="empresa" src="IMG/logo.ico" height="50px"></div>

                   <li><a href="/">HOME</a></li>
                   <li><a href="/maderas">CATÁLOGO MDF</a></li>
                   <li><a href="/persianasproductos">PERSIANAS</a></li>
                   

                   {{-- <li><a href="{{route('registro.create')}}">INICIAR SESIÓN</a></li> --}}

                   <div class="buscar">
                        <input type="text" placeholder="Buscar" required />

                        
                    </div>
               </ul>
		</nav>
	</header>
	<div class="scrol"></div>
    

	<main>
		<section>
			@yield('seccion')
            @yield('seccion_registro')
		</section>
	</main>

	<footer>
		<div class="container-footer-num1">

            <div class="container-info">
                <!--Parte 1 del footer (1er contenedor informacion) -->

                <div class="colum1">
                    <h1>Más informacion de la compañia</h1>

                    <p>
                        Esta compañia se dedica al diseño y fabricación de muebles, asi como la venta de 
                        persianas y cortinas, instalación de pisos laminados, tapices y pasto sintetico.
                    </p><br>
                    <a href="/"><button class="btn btn1">Home</button></a>
                </div>

                
                <div class="colum2">
                    <!--Columna redes sociales -->

                    <h1>Redes Sociales</h1>

                    <div class="fila1">
                        <a href="https://www.facebook.com/CD.CESARSALAZAR" target="_blank"><img src="IMG/footer/facebook.png"></a>
                        <label>Siguenos en Facebook como 
                        Central Decoración Cesar Salazar</label>
                    </div>
                    <div class="fila1">
                        <img src="IMG/footer/whatsapp.png">
                        <label>
                            Whatsapp: 311-122-96-35<br>
                            Telefono: 311-258-08-68
                        </label>

                    </div>
                    
                </div>

                <div class="colum3">
                    <!--Columna info de contacto -->
                    <h1>Informacion de contacto</h1>

                    <div class="fila2">
                        <a href="https://www.google.com/maps/place/Central+de+Decoraci%C3%B3n+Casa+Tienda/@21.5189691,-104.9262527,15z/data=!3m1!4b1!4m5!3m4!1s0x842736673ed420bd:0xc57b38eb8ce81b8b!8m2!3d21.5190136!4d-104.9174704"><img class="img" src="IMG/footer/mapa.png"></a>
                        <label>
                            Domicilio:
                            Av. Insurgentes, Pte. #917
                            Tepic, Nayarit
                        </label>
                    </div>

                    <div class="fila2">
                        <a href=""><img src="IMG/footer/correo.png"></a>
                        <label>centralddecoracion@hotmail.com</label>
                    </div>

                </div>

            </div>

        </div>

        <div class="container-footer-copy">
            <!--Parte 2 del footer (2do contenedor copyright) -->

            <div class="div_inferior">
                <div class="copyright">
                    © 2022 Todos los Derechos Reservados | <a href="">CENTRAL DECORACIÓN </a>
                </div>

                <div class="information">
                    <a href="#">Información Compañia</a> | <a href="">Privación y Politica</a>
                </div>
            </div>
        </div>

	</footer>
</body>
</html>