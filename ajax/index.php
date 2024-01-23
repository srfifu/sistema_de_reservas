<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Reservas</title>
    <link rel="icon" href="img/llave.ico">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="js/app.js"></script>
    <style type="text/css">
      h2{
        font-size: 18px;
      }
    </style>
  </head>
  <body onload="carga()" style="background: #000000;">
    <section class=" position-absolute top-50 start-50 translate-middle" id="logo_inicio" ><img src="img/logo_inicio.png" class="animacion_surgimiento" width="500 " style="opacity: 0;"></section>
    <section id="titulo_principal" class="py-4 bg-dark text-light content" style="margin-top: -10px;display: none;">
      <div class="text-center">
        <h1>Sistema de Reservas</h1>
      </div>
    </section>
    <section id="btn_secciones" style="display:none;" class="contentDos">
      <div class="container-md py-3">
        <div class="row">
          <div class="col-12 text-center">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick="reservas_actuales()" checked >
              <label class="btn btn-outline-dark" for="btnradio1">Reservas actuales</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="agregar_reservas()">
              <label class="btn btn-outline-dark" for="btnradio2">Agregar reserva</label>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="reservas_actuales" style="display:none;" class="py-4">   
      <div class="container-md">
        <div class="row" id="mostrar_reservas">
        </div>
      </div>
    </section>
    <section class="py-4" style="display:none;" id="agregar_reservas">
      <div class="container-md">
        <div class="row" id="buscador">
          <div class="col-12 text-center mb-4 contentDos" style="">
            <h2>Selecciona una fecha de ingreso y una fecha de salida</h2>
            <div class="input-group mb-3 content">
              <span class="input-group-text" id="addon-wrapping"><i class="ri-calendar-schedule-line"></i></span>
                <input type="text" class="form-control" name="daterange"  />
            </div>
          </div>
          <div class="col-12 ">
            <div class="row" id="resultado">
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>