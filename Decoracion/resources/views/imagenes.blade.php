<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1.0, minimun-scale=1.0">
    <title>PERSIANAS</title>
    <link rel="stylesheet" href="CSS/estilo3.css">
  </head>


<body>
<header>
    <nav class="nav">
               <ul class="menu">
                <div class="logo"><img class="empresa" src="IMG/logo.ico" height="50px"></div>

                   <li><a href="/">HOME</a></li>
                   <li><a href="/maderas">CATÁLOGO MDF</a></li>
                   <li><a href="/persianas">PERSIANAS</a></li>
                   
                        
                    </div>
               </ul>
    </nav>
  </header>
  <div class="scrol"></div>

  <main>
     <h2 class="subtitulo"> Persianas & Cortinas</h2>
    <section>
      


    <div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="slide firts">
          <img src="IMG/cortina3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="IMG/cortina2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="IMG/sheer2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="IMG/cortina4.jpg" alt="">
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>

    </div>

      <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter>4){
            counter =1;
          }
        }, 5000);
      </script>
  
    </section>
    
  </main>
    
  </body>
</html>
      