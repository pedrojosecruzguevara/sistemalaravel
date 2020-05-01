<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Correo</title>
   <style>
      .titulo {
         color: #1e80b6;
         padding-top: 20px;
         padding-bottom: 10px;
         padding-left: 20px;
         padding-right: 20px;
      }

      .body {
         background-color: #ECECEC;
      }

      .div_contenido {
         color: #1e80b6;
         padding-top: 20px;
         padding-bottom: 10px;
         padding-left: 20px;
         padding-right: 20px;
         background-color: #ffffff !important;
      }
   </style>
</head>
<body class="body">
   <div class="titulo">
      <h1>Información Pymasoft</h1>
   </div>
   <hr>
   <div class=".div_contenido"> <?= $contenido;   ?></div>
   <div class=".div_contenido"> Gracias por participar en el proyecto pymasoft <br /> NO OLVIDE VISITAR NUESTRO SITIO WEB <b>http://pymasoft.pym:8888</b> </div>
</body>
</html>