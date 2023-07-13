<link rel="stylesheet" type="text/css" href="{!! asset('CSS/seccion_persianas.css')!!}">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
@extends('plantilla')

@section('seccion')
			<main>

    		<ul class="breadcrumbs">
        <li class="breadcrumb-item">
            <a href="/" class="breadcrumbs__link">HOME</a>
         </li>
         <li class="breadcrumb-item">
            <a href="/persianas" class="breadcrumbs__link">PRODUCTOS</a>
         </li>

     </ul>
				<section class="contenedor" id="servicio">
 		<h2 class="subtitulo"> Persianas & Cortinas</h2>
 		


       <div class="contenedor-servicio">
 			<iframe width="560" height="315" src="https://www.youtube.com/embed/DFI2zBlX9QE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
 			<div class="checklist-servicio">
 				<div class="service">
 					<h3 class="n-service"><span class="number"></span>Diseños exclusivos para tu privacidad</h3>
 					<p>Crea el ambiente perfecto para tu casa u oficina.
 					En Central Decoración contamos con una gran variedad de persianas y 
 				de diferentes tipos y estilos, ajustandonos a tu espacio y presupuesto.</p>
 				</div>		
 			</div>
 		</div> 		
 	</section>
 		<br>
 	<section>

 		<h2 class="subtitulo"> Estilos de persianas</h2>
 		<div class="conten">
 			
 			<div class="contenedor_tarjeta">
 				<a href="">
 					<figure>
 				<img src="IMG/sheer.jpg" class="frontal" alt="">
 				<figcaption class="trasera">
 					<h2 class="titulo">SHEER ELEGANCE</h2>
 					<hr>
 					<p>Está fabricada con una tela elaborada con la combinación de tejidos transparentes y tejidos opacos que van intercalados de manera horizontal a lo largo de la persiana ofreciendo al mismo tiempo un tenue control de la luz al interior y de la transparencia al exterior</p>
 				</figcaption>
 			</figure>
 				</a>
 			</div>		

 			<div class="contenedor_tarjeta">
 				<a href="">
 					<figure>
 				<img src="IMG/blackout.jpg" class="frontal" alt="">
 				<figcaption class="trasera">
 					<h2 class="titulo">BLACK OUT</h2>
 					<hr>
 					<p>Son ideales para los lugares en los que deseas que la luz no entre, pues la función principal de este estilo de cortinas es bloquear el ingreso de los rayos solares; sin embargo, esto no quiere decir que siempre sea así, ya que permite extender o recoger el lienzo para modular la iluminación.</p>
 				</figcaption>
 			</figure>
 				</a>
 			</div>

 			<div class="contenedor_tarjeta">	
 				<a href="">
 					<figure>
 				<img src="IMG/cortina.jpg" class="frontal" alt="">
 				<figcaption class="trasera">
 					<h2 class="titulo">CORTINAS</h2>
 					<hr>
 					<p>Las cortinas tienen una variedad de estilos para su fabricación además de encontrar tejidos con texturas y acabados únicos, una variedad de colores que permiten coordinar un tejido traslúcido con uno black out.</p>
 				</figcaption>
 			</figure>
 				</a>

 			</div>	
 		</div>
      <div><a href="/imagenes"><button class="btn btn1">Ver mas imagenes</button></a></div>
 	</section>
			</main>
@endsection